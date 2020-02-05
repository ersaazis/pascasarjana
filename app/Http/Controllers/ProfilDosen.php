<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilDosen extends Controller
{
    public function index(){
        $cms_user=DB::table('cms_users')->select('cms_users.*','programstudi.nama')->join('programstudi', 'programstudi.id', '=', 'cms_users.programstudi_id')->where(function ($query) {
            $query->where('id_cms_privileges',2)
                  ->orWhere('id_cms_privileges',4);
        })->orderBy(DB::raw('RAND(1234)'))->paginate(12);
        $random=$cms_user[rand(0,count($cms_user)-1)];
        return view('frontend.home')
            ->with('i',0)
            ->with('contoh',$random)
            ->with('dosen',$cms_user);
    }
    public function cari(Request $request){
        $data=$request->all();
        $nama=$data['Cari'];
        $cms_user=DB::table('cms_users')->where('name','LIKE','%'.$nama.'%')->where(function ($query) {
            $query->where('id_cms_privileges',2)
                  ->orWhere('id_cms_privileges',4);
        })->paginate(15);
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
            $programstudi=DB::table('programstudi')->find($cms_user->programstudi_id);
            return view('frontend.profil')
            ->with('pendidikan',$data_pendidikan)
            ->with('mengajar',$data_mengajar)
            ->with('penelitian',$data_penelitian)
            ->with('dokumen',$dokumen_dosen)
            ->with('programstudi',$programstudi->nama)
            ->with('dosen',$cms_user);
        }
        else return redirect('/');
    }
    public function kerjasama(Request $request){
        $data=$request->all();
        $nama=$data['Cari'];
        $data=DB::table('mou')->where('judul','LIKE','%'.$nama.'%')->paginate(15);
        // print_r($data);
        return view('frontend.kerjasama')
            ->with('i',0)
            ->with('nama',$nama)
            ->with('data',$data);
    }
    public function akreditasi(Request $request){
        $data=$request->all();
        $nama=$data['Cari'];
        $data=DB::table('akreditasi')->where('judul','LIKE','%'.$nama.'%')->paginate(15);
        // print_r($data);
        return view('frontend.akreditasi')
            ->with('i',0)
            ->with('nama',$nama)
            ->with('data',$data);
    }
}
