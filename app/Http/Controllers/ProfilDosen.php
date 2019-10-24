<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilDosen extends Controller
{
    public function index(){
        $cms_user=DB::table('cms_users')->where('id_cms_privileges',2)->limit(8)->get();
        $random=$cms_user[rand(0,count($cms_user)-1)];
        return view('frontend.home')
            ->with('i',0)
            ->with('contoh',$random)
            ->with('dosen',$cms_user);
    }
    public function cari(Request $request){
        $data=$request->all();
        $nama=$data['Cari'];
        $cms_user=DB::table('cms_users')->where('name','LIKE','%'.$nama.'%')->where('id_cms_privileges',2)->paginate(15);
        return view('frontend.cari')
            ->with('i',0)
            ->with('nama',$nama)
            ->with('dosen',$cms_user);
    }
    public function profil($id,$nama){
        $cms_user=DB::table('cms_users')->find($id);
        if($cms_user){
            $data_pendidikan=DB::table('data_pendidikan')->where('user_id',$cms_user->id)->get();
            $data_mengajar=DB::table('data_mengajar')->where('user_id',$cms_user->id)->get();
            $data_penelitian=DB::table('data_penelitian')->where('user_id',$cms_user->id)->get();
            $dokumen_dosen=DB::table('dokumen_dosen')->join('kategori_dokumen', 'kategori_dokumen.id', '=', 'dokumen_dosen.kategori_id')->where('user_id',$cms_user->id)->get();
            return view('frontend.profil')
            ->with('pendidikan',$data_pendidikan)
            ->with('mengajar',$data_mengajar)
            ->with('penelitian',$data_penelitian)
            ->with('dokumen',$dokumen_dosen)
            ->with('dosen',$cms_user);
        }
        else return redirect('/');
    }
}
