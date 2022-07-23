@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Data SIAMI</h4>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('admin/siami/simpan', $siami->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text" class="form-control" id="nama" name="nama" value="{{$siami->nama}}">
                            </div>
                            <div class="form-group">
                              <label>Level</label>
                              <select class="form-control" name="level">
                                    <option value="{{$siami->level}}" hidden>{{$siami->level}}</option>
                                    <option value="Informasi">Informasi SIAMI</option>
                                    <option value="Pedoman">Pedoman SIAMI</option>
                                    <option value="Pelaksanaan">Pelaksanaan SIAMI</option>
                                    <option value="Laporan">Laporan SIAMI</option>
                                </select>
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