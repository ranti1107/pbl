@extends('admin.template.base')
@section('content')

<div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mb-3 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Tambah Artikel</h6>
        </div>
      </div>
      <form action="{{url('admin/postingan')}}" method="post">
            @csrf
      <div class="pe-md-3 d-flex w-50 mt-2 ms-2 mb-2">
        <div class="input-group input-group-outline">
          <label class="form-label">Judul Artikel</label>
          <input type="text" name="judul" class="form-control">
        </div>
       </div>
      <label class="form-label">Isi Artikel</label>
       <div class="pe-md-3 d-flex w-50 ms-2 mb-2">
        <div class="input-group input-group-outline">
          <textarea name="isi" class="form-control"></textarea>
        </div>
       </div>
       <button class="btn btn-dark float-right ms-2 mt-2"><i class="fa fa-save"></i> Simpan</button>
      </form>
    </div>
</div>

@endsection