<?php namespace App\Http\Controllers;

use Session;
use Request;
use DB;
use Illuminate\Support\Facades\Artisan;
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
		if(strpos(CRUDbooster::myPrivilegeName(), "DOSEN") !== false){
			$this->form[] = array("label"=>"NIP","name"=>"nip",'type'=>'text','required'=>true,'validation'=>'required');
			$this->form[] = array("label"=>"NIDN","name"=>"nidn",'type'=>'text','required'=>true,'validation'=>'required');
		}
		$this->form[] = array("label"=>"Nama","name"=>"name",'required'=>true,'validation'=>'required|min:3');
		$this->form[] = array("label"=>"Email","name"=>"email",'required'=>true,'type'=>'email','validation'=>'required|email|unique:cms_users,email,'.CRUDBooster::getCurrentId());
		$this->form[] = array("label"=>"Photo","name"=>"photo","type"=>"upload","help"=>"Rekomendasi 200x200px",'required'=>true,'validation'=>'required|image|max:1000','resize_width'=>90,'resize_height'=>90);									
		$this->form[] = array("label"=>"Privilege","name"=>"id_cms_privileges","type"=>"select","datatable"=>"cms_privileges,name",'required'=>true);				
		// $this->form[] = array("label"=>"Privilege","name"=>"id_cms_privileges","type"=>"select","datatable"=>"cms_privileges,name","datatable_where"=>"id != 2",'required'=>true);				
		// $this->form[] = array("label"=>"Password","name"=>"password","type"=>"password","help"=>"Kosongkan jika tidak ingin diganti");
		$this->form[] = array("label"=>"Password","name"=>"password","type"=>"password","help"=>"Kosongkan jika tidak ingin diganti");
		$this->form[] = array("label"=>"Konfirmasi Password","name"=>"password_confirmation","type"=>"password","help"=>"Kosongkan jika tidak ingin diganti");
		if(strpos(CRUDbooster::myPrivilegeName(), "DOSEN") !== false){
			$this->form[] = array("label"=>"Jenis Kelamin","name"=>"jenis_kelamin",'type'=>'select','dataenum'=>'Laki-Laki;Perempuan','required'=>true,'validation'=>'required');
			$this->form[] = array("label"=>"Tempat Lahir","name"=>"tmpt_lahir",'type'=>'text','required'=>true,'validation'=>'required');
			$this->form[] = array("label"=>"Tanggal Lahir","name"=>"tanggal_lahir",'type'=>'date','required'=>true,'validation'=>'required');
			$this->form[] = array("label"=>"Nama Perguruan Tinggi","name"=>"namapt",'type'=>'text','required'=>true,'validation'=>'required');
			// $this->form[] = array("label"=>"Nama Program Studi","name"=>"namaprodi",'type'=>'text','required'=>true,'validation'=>'required');
			$this->form[] = array("label"=>"Status Keaktifan","name"=>"statuskeaktifan",'type'=>'text');
			$this->form[] = array("label"=>"Pendidikan","name"=>"pend_tinggi",'type'=>'text','required'=>true,'validation'=>'required');
			$this->form[] = array("label"=>"Fungsional","name"=>"fungsional",'type'=>'text');
			$this->form[] = array("label"=>"Ikatan Kerja","name"=>"ikatankerja",'type'=>'text');
			$this->form[] = array("label"=>"Bidang Keahlian","name"=>"bidang_keahlian",'type'=>'text');
			$this->form[] = array("label"=>"Alamat","name"=>"alamat",'type'=>'textarea');
			$this->form[] = array("label"=>"Auto Update","name"=>"auto_update",'required'=>true,'type'=>'select','validation'=>'required','dataenum'=>'1;0',"help"=>"Auto update untuk Data Mengajar dan Data Penelitian (1=iya, 0=tidak)");
		}
		$this->form[] = array("label"=>"ID Dikti","name"=>"id_dikti",'type'=>'text',"placeholder"=>'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
		$this->form[] = array("label"=>"ID Scholar","name"=>"id_schollar",'type'=>'text',"placeholder"=>'xxxxxxxxxxxx');
		$this->form[] = array("label"=>"ID Scopus","name"=>"id_scopus",'type'=>'text',"placeholder"=>'xxxxxxxxxxx');
		$this->form[] = array("label"=>"ID Orchid","name"=>"id_orchid",'type'=>'text',"placeholder"=>'xxxx-xxxx-xxxx-xxxx');
		$this->form[] = array("label"=>"Program Studi","name"=>"programstudi_id","type"=>"select","datatable"=>"programstudi,nama",'required'=>true);				
		# END FORM DO NOT REMOVE THIS LINE

		$this->addaction = array();
		$this->addaction[] = ['label'=>'Reset','url'=>CRUDBooster::mainpath('reset/[id]'),'icon'=>'fa fa-refresh','color'=>'danger','showIf'=>"[id_cms_privileges] == 2", 'confirmation' => true];
		$this->sub_module = array();
		$this->sub_module[] = ['label'=>'','path'=>'dokumen_dosen','parent_columns'=>'name,email','foreign_key'=>'user_id','button_color'=>'success','button_icon'=>'fa fa-file','showIf'=>"[id_cms_privileges] == 2",];
		$this->sub_module[] = ['label'=>'','path'=>'data_mengajar','parent_columns'=>'name,email','foreign_key'=>'user_id','button_color'=>'success','button_icon'=>'fa fa-book','showIf'=>"[id_cms_privileges] == 2",];
		$this->sub_module[] = ['label'=>'','path'=>'data_pendidikan','parent_columns'=>'name,email','foreign_key'=>'user_id','button_color'=>'success','button_icon'=>'fa fa-graduation-cap','showIf'=>"[id_cms_privileges] == 2",];
		$this->sub_module[] = ['label'=>'','path'=>'data_penelitian','parent_columns'=>'name,email','foreign_key'=>'user_id','button_color'=>'success','button_icon'=>'fa fa-thumb-tack','showIf'=>"[id_cms_privileges] == 2",];
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
	public function reset($id) { 
		$dosen=DB::table('cms_users')->find($id);
		DB::table('data_mengajar')->where('user_id',$id)->delete();
		DB::table('data_pendidikan')->where('user_id',$id)->delete();
		DB::table('data_penelitian')->where('user_id',$id)->delete();

		Artisan::queue('scholar:search', ['id' => $id])->onConnection('database')->onQueue('autoupdate');
		Artisan::queue('diktiold:search', ['id' => $id])->onConnection('database')->onQueue('autoupdate');

		return CRUDBooster::redirect(CRUDBooster::mainpath(),'Data '.$dosen->name.' Berhasil Direset, Proses pengambilan data di Dikti dan Schollar sedang berjalan dibackgroud','success');
	}
	public function hook_before_edit(&$postdata,$id) { 
		unset($postdata['password_confirmation']);
		if($postdata['id_schollar'] != "")
			$postdata['url_schollar']='https://scholar.google.co.id/citations?user='.$postdata['id_schollar'];
		else
			$postdata['url_schollar']='';
			
		if($postdata['id_dikti'] != "")
			$postdata['url_dikti']='https://forlap.ristekdikti.go.id/dosen/detail/'.$postdata['id_dikti'];
		else
			$postdata['url_dikti']='';
	}
	public function hook_before_add(&$postdata) {      
	    unset($postdata['password_confirmation']);
	}
}
