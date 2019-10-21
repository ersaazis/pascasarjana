<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use CRUDBooster;
use Artisan;

class TambahDosen extends Controller
{
    public function add(){
    	return view('user.dosen')->with('page_title','Tambah Dosen');
    }
    public function save(Request $request){
    	$pass='$2y$10$ZnhxRgqqCQAo4xLCFrgf4u7qJNi8lOMDL.2WUbhwloeCPCVxuRB.G'; ///123456
    	$data=$request->all();
		$validatedData = $request->validate([
		    'name' => 'required',
		    'email' => 'required|unique:cms_users,email',
		]);

    	$save=[
    		'name' => $data['name'],
    		'email' => $data['email'],
    		'id_cms_privileges' => 2,
    		'password' => $pass,
    	];
    	$id=DB::table('cms_users')->insertGetId($save);
    	// ADD queue console
		Artisan::queue('scholar:search', ['id' => $id])->onConnection('database')->onQueue('commands');
		Artisan::queue('diktiold:search', ['id' => $id])->onConnection('database')->onQueue('commands');
    	// end queue console 
    	if($data['submit'] == "Simpan"){
	    	return CRUDBooster::redirect(config('crudbooster.ADMIN_PATH').'/users','Berhasil Disimpan','success');
    	}
    	else {
	    	return CRUDBooster::redirect(route('addDosen'),'Berhasil Disimpan','success');
    	}
    }
}
