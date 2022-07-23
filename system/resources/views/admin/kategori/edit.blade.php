@extends('admin.template.base')
@section('content')

<div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mb-3 mx-3 z-index-2">
        <div class="shadow-primary border-radius-lg pt-4 pb-3" style="background-color: #808000">
          <h6 class="text-white text-capitalize ps-3">Edit Kategori</h6>
        </div>
      </div>
      <div class="pe-md-3 d-flex w-50 mt-2 ms-2 mb-2">
        <form action="{{url('admin/kategori')}}" method="post">
            @csrf
        <div class="input-group input-group-outline">
          <label class="form-label">Nama</label>
          <input type="text" name="nama" value="{{$kategori->nama}}" class="form-control">
        </div>
        <button class="btn btn-dark float-right mt-2"><i class="fa fa-save"></i> Simpan</button>
            </form>
       </div>
    </div>
</div>

@endsection