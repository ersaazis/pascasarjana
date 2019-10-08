@extends("crudbooster::admin_template")
@section("content")
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            	@if($error = "validation.unique")
                <li>Email sudah digunakan</li>
            	@endif
            @endforeach
        </ul>
    </div>
@endif
<div class="panel panel-default">
	<div class="panel-heading">
		<strong><i class="fa fa-users"></i> Tambah Dosen</strong>
	</div>

	<div class="panel-body" style="padding:20px 0px 0px 0px">
		<form class="form-horizontal" method="post" id="form" enctype="multipart/form-data" action="{{ route('addDosen') }}">
			@csrf
			<div class="box-body" id="parent-form-area">

				<div class="form-group header-group-0 " id="form-group-name" style="">
				<label class="control-label col-sm-2">
				Nama
				<span class="text-danger" title="This field is required">*</span>
				</label>

				<div class="col-sm-9">
				<input type="text" title="Nama" required="" class="form-control" name="name" id="name" value="">

				<div class="text-danger"></div>
				<p class="help-block"></p>

				</div>
				</div>    <div class="form-group header-group-0 " id="form-group-email" style="">
				<label class="control-label col-sm-2">Email
				<span class="text-danger" title="This field is required">*</span>
				</label>

				<div class="col-sm-9">
				<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
				<input type="email" name="email" style="display: none">
				<input type="email" title="Email" required="" class="form-control" name="email" id="email" value="">
				</div>
				<div class="text-danger"></div>
				<p class="help-block"></p>
				</div>
				</div>    

				<div class="form-group header-group-0 " id="form-group-password" style="">
				<label class="control-label col-sm-2">Password</label>
				<div class="col-sm-9">
				<input type="text" title="Password (Default)" class="form-control" value="123456" disabled="true">
				</div>
			</div>
			</div><!-- /.box-body -->
			<div class="box-footer" style="background: #F5F5F5">
				<div class="form-group">
				<label class="control-label col-sm-2"></label>
				<div class="col-sm-10">
				<a href="/{{config('crudbooster.ADMIN_PATH')}}/users" class="btn btn-default"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
				<input type="submit" name="submit" value="Simpan &amp; Tambah Lagi" class="btn btn-success">
				<input type="submit" name="submit" value="Simpan" class="btn btn-success">
				</div>
				</div>
			</div><!-- /.box-footer-->
		</form>
	</div>
</div>
@endsection