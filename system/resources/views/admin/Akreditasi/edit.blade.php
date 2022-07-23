@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Data File</h4>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('admin/Akreditasi/simpan', $akreditasi->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                              <label for="nama">Keterangan</label>
                              <input type="text" class="form-control" id="nama" name="keterangan" value="{{$akreditasi->keterangan}}">
                            </div>
                            <div class="form-group">
                              <label for="file">Masukan File / Dokumen <span style="color: red">*Format PDF</span></label> <br>
                              <input type="file" id="file" name="file">
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection