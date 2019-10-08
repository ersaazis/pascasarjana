<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use CRUDBooster;

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
    	DB::table('cms_users')->insert($save);
    	// ADD queue console

    	// end queue console 
    	if($data['submit'] == "Simpan"){
	    	return CRUDBooster::redirect(config('crudbooster.ADMIN_PATH').'/users','Berhasil Disimpan','success');
    	}
    	else {
	    	return CRUDBooster::redirect(route('addDosen'),'Berhasil Disimpan','success');
    	}
    }
}
