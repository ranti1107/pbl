@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Kegiatan</h4>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('admin/kegiatan/simpan', $kegiatan->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="nama">Nama</label>
                                  <input type="text" value="{{$kegiatan->nama}}" class="form-control" id="nama" name="nama" placeholder="Nama">
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="nama">Tahun</label>
                                  <select class="form-control" name="tahun">
                                    <option value="{{$kegiatan->tahun}}" hidden>{{$kegiatan->tahun}}</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="nama">Deskripsi Kegiatan</label><br>
                              <textarea name="deskripsi" style="width: 100%; height: 150px;">{{$kegiatan->deskripsi}}</textarea>
                            </div>
                            <div class="form-group">
                              <label for="file">Masukan Foto</label> <br>
                              <input type="file" id="file" name="foto">
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