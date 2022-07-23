@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">{{$siami->nama}}</h4>
                  <div class="col-md-12 col-sm-12">
                    <iframe width="100%" height="400px" src="{{url("/public/$siami->file")}}"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection