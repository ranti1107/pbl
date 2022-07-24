@extends ('admin.template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 mt-5" style="margin-top: 50px; margin-left: 100px;">
			<div class="card card-default">
				<div class="card-header" style="margin-bottom: 20px; background-color: #008080;">
					<h3 style="color: #ffffff; font-size: 14pt; padding: 5px">Ganti Password {{Auth::user()->nama}}</h3>
					@include('admin.template.utils.notif')
				</div>
				<div class="card-body">
					<form action="{{url('admin/setting')}}" method="post">
						@method("PUT")
						@csrf
						<div class="form-group">
							<label for="" class="control-label"> Kata Sandi Saat Ini </label>
							<input type="password" name="lama" class="form-control">
						</div>
						<hr>
						<div class="form-group">
							<label for="" class="control-label"> Kata Sandi Baru </label>
							<input type="password" name="baru" class="form-control">
						</div>
						<div class="form-group">
							<label for="" class="control-label"> Konfirmasi Kata Sandi Baru </label>
							<input type="password" name="konfirmasi" class="form-control">
						</div>
						<div class="form-group">
							<button class="btn btn-info" style="background-color: #008080;"><i class="fa fa-save"></i> Simpan </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection