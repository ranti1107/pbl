@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                	<center>
                		<h4 class="card-title">{{$kegiatan->nama}}</h4>
                	</center>
                  <div class="col-md-12 col-sm-12">
                  	<center>
                  	<img style="width: 60%" src="{{url("/public/$kegiatan->foto")}}">	
                  	</center>
                  	<p style="margin-top: 20px;">{!!nl2br($kegiatan->deskripsi)!!}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection