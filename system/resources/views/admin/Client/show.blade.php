@extends('admin.template.base')
@section('content')

<div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mb-3 mx-3 z-index-2">
        <div class="shadow-primary border-radius-lg pt-4 pb-3" style="background-color: #808000">
          <h6 class="text-white text-capitalize ps-3">Data Akun</h6>
        </div>
      </div>
      <div class="pe-md-3 d-flex w-80 mt-2 ms-4 mb-2">
        <h3>{{$user->nama}}</h3>
      </div>
      <div class="pe-md-3 d-flex w-80 mt-2 ms-4 mb-2">
        <div class="col-md-6">
        <h5>Email : {{$user->email}}</h5>
        </div>
        <div class="col-md-6">
        <h5>Username : {{$user->username}}</h5>
        </div>
      </div>

    </div>
</div>

@endsection