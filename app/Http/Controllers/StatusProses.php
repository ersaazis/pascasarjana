<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusProses extends Controller
{
    public function aktif(){
    	exec('ps -x | grep autoupdate',$autoupdate);
        $autoupdate=count($autoupdate)-2;
        if($autoupdate === 0){
            echo "$autoupdate - <br>";
            exec("/usr/local/bin/ea-php72 -c /home/ppsuinsgd/pascasarjanasys/php.ini /home/ppsuinsgd/pascasarjanasys/artisan queue:work database --queue=autoupdate > /dev/null 2>/dev/null &"); 
        }
        exec('ps -x | grep commands',$commands);
        $commands=count($commands)-2;
        if($commands === 0){
            echo "$commands - <br>";
            exec("/usr/local/bin/ea-php72 -c /home/ppsuinsgd/pascasarjanasys/php.ini /home/ppsuinsgd/pascasarjanasys/artisan queue:work database --queue=commands > /dev/null 2>/dev/null &"); 
        }
        return back();
    }

    public function index(){
        echo "
        <table class='table'>
            <tr>
                <th>Nama Proses</th>
                <th>Status</th>
            </tr>
        ";
        echo "
            <tr>
                <td>Proses Update</td>
                <td>
        ";
    	exec('ps -x | grep autoupdate',$autoupdate);
        $autoupdate=count($autoupdate)-2;
        if($autoupdate > 0){
            echo "Aktif";
        }
        else
            echo "Tidak Aktif";
        echo "
                </td>
            </tr>
            <tr>
                <td>Proses Tambah</td>
                <td>
        ";
        exec('ps -x | grep commands',$commands);
        $commands=count($commands)-2;
        if($commands > 0){
            echo "Aktif";
        }
        else
            echo "Tidak Aktif";
        echo "
                </td>
            </tr>
        </table>
        ";
        if($commands == 0 or $autoupdate == 0)
            echo '<center><a href="/admin/status/aktif" class="btn btn-sm btn-primary">Aktifkan Semua Proses</a></center>';
    }
}