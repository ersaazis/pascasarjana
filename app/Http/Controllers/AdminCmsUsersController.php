<?php namespace App\Http\Controllers;

use Session;
use Request;
use DB;
use CRUDbooster;

class AdminCmsUsersController extends \crocodicstudio\crudbooster\controllers\CBController {


	public function cbInit() {
		# START CONFIGURATION DO NOT REMOVE THIS LINE
		$this->table               = 'cms_users';
		$this->primary_key         = 'id';
		$this->title_field         = "name";
		$this->button_action_style = 'button_icon';	
		$this->button_import 	   = FALSE;	
		$this->button_export 	   = FALSE;	
		// $this->button_add     = FALSE;
		$this->index_button = array(
			[
				'label' => 'Dosen',
				'url' => route('addDosen'),
				'icon' => 'fa fa-plus-circle',
			]
		);

		# END CONFIGURATION DO NOT REMOVE THIS LINE
	
		# START COLUMNS DO NOT REMOVE THIS LINE
		$this->col = array();
		$this->col[] = array("label"=>"Name","name"=>"name");
		$this->col[] = array("label"=>"Email","name"=>"email");
		$this->col[] = array("label"=>"Privilege","name"=>"id_cms_privileges","join"=>"cms_privileges,name");
		$this->col[] = array("label"=>"Photo","name"=>"photo","image"=>1);
		# END COLUMNS DO NOT REMOVE THIS LINE

		# START FORM DO NOT REMOVE THIS LINE
		$this->form = array(); 		
		if(CRUDbooster::myPrivilegeName() == "DOSEN"){
			$this->form[] = array("label"=>"NIP","name"=>"nip",'type'=>'text','required'=>true,'validation'=>'required');
			$this->form[] = array("label"=>"NIDN","name"=>"nidn",'type'=>'text','required'=>true,'validation'=>'required');
		}
		$this->form[] = array("label"=>"Nama","name"=>"name",'required'=>true,'validation'=>'required|min:3');
		$this->form[] = array("label"=>"Email","name"=>"email",'required'=>true,'type'=>'email','validation'=>'required|email|unique:cms_users,email,'.CRUDBooster::getCurrentId());
		$this->form[] = array("label"=>"Photo","name"=>"photo","type"=>"upload","help"=>"Rekomendasi 200x200px",'required'=>true,'validation'=>'required|image|max:1000','resize_width'=>90,'resize_height'=>90);									
		$this->form[] = array("label"=>"Privilege","name"=>"id_cms_privileges","type"=>"select","datatable"=>"cms_privileges,name","datatable_where"=>"id != 2",'required'=>true);				
		// $this->form[] = array("label"=>"Password","name"=>"password","type"=>"password","help"=>"Kosongkan jika tidak ingin diganti");
		$this->form[] = array("label"=>"Password","name"=>"password","type"=>"password","help"=>"Kosongkan jika tidak ingin diganti");
		$this->form[] = array("label"=>"Konfirmasi Password","name"=>"password_confirmation","type"=>"password","help"=>"Kosongkan jika tidak ingin diganti");
		if(CRUDbooster::myPrivilegeName() == "DOSEN"){
			$this->form[] = array("label"=>"Jenis Kelamin","name"=>"jenis_kelamin",'type'=>'select','dataenum'=>'Laki-Laki;Perempuan','required'=>true,'validation'=>'required');
			$this->form[] = array("label"=>"Tempat Lahir","name"=>"tmpt_lahir",'type'=>'text','required'=>true,'validation'=>'required');
			$this->form[] = array("label"=>"Tanggal Lahir","name"=>"tanggal_lahir",'type'=>'date','required'=>true,'validation'=>'required');
			$this->form[] = array("label"=>"Nama Perguruan Tinggi","name"=>"namapt",'type'=>'text','required'=>true,'validation'=>'required');
			$this->form[] = array("label"=>"Nama Program Studi","name"=>"namaprodi",'type'=>'text','required'=>true,'validation'=>'required');
			$this->form[] = array("label"=>"Status Keaktifan","name"=>"statuskeaktifan",'type'=>'text');
			$this->form[] = array("label"=>"Pendidikan","name"=>"pend_tinggi",'type'=>'text','required'=>true,'validation'=>'required');
			$this->form[] = array("label"=>"Fungsional","name"=>"fungsional",'type'=>'text');
			$this->form[] = array("label"=>"Ikatan Kerja","name"=>"ikatankerja",'type'=>'text');
			$this->form[] = array("label"=>"Bidang Keahlian","name"=>"bidang_keahlian",'type'=>'text');
			$this->form[] = array("label"=>"Alamat","name"=>"alamat",'type'=>'textarea');
			$this->form[] = array("label"=>"Auto Update","name"=>"auto_update",'required'=>true,'type'=>'select','validation'=>'required','dataenum'=>'1;0',"help"=>"Auto update untuk Data Mengajar dan Data Penelitian (1=iya, 0=tidak)");
		}
		$this->form[] = array("label"=>"ID Dikti","name"=>"id_dikti",'type'=>'text',"placeholder"=>'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
		$this->form[] = array("label"=>"ID Schollar","name"=>"id_schollar",'type'=>'text',"placeholder"=>'xxxxxxxxxxxx');
		$this->form[] = array("label"=>"ID Scopus","name"=>"id_scopus",'type'=>'text',"placeholder"=>'xxxxxxxxxxx');
		$this->form[] = array("label"=>"ID Orchid","name"=>"id_orchid",'type'=>'text',"placeholder"=>'xxxx-xxxx-xxxx-xxxx');
		# END FORM DO NOT REMOVE THIS LINE
	}

	public function getProfile() {			

		$this->button_addmore = FALSE;
		$this->button_cancel  = FALSE;
		$this->button_show    = FALSE;			
		$this->button_add     = FALSE;
		$this->button_delete  = FALSE;	
		$this->hide_form 	  = ['id_cms_privileges'];

		$data['page_title'] = trans("crudbooster.label_button_profile");
		$data['row']        = CRUDBooster::first('cms_users',CRUDBooster::myId());
		$this->cbView('crudbooster::default.form',$data);		
	}
	public function hook_before_edit(&$postdata,$id) { 
		unset($postdata['password_confirmation']);
	}
	public function hook_before_add(&$postdata) {      
	    unset($postdata['password_confirmation']);
	}
}
