@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tabel Edit File</h4>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('admin/profil/simpan', $profil->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text" class="form-control" id="nama" value="{{$profil->nama}}" name="nama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                              <label for="status">Status</label>
                              <select name="level" class="form-control">
                              <option value="{{$profil->level}}">{{$profil->level}}</option>
                                  <option value="Visi">Visi</option>
                                  <option value="Misi">Misi</option>
                                  <option value="Tupoksi">Tupoksi</option>
                                  <option value="LatarBelakang">Latar Belakang</option>
                                  <option value="Galeri">Galeri</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="deskripsi">Isi</label>
                              <textarea class="form-control" id="deskripsi" name="deskripsi">{{$profil->deskripsi}}</textarea>
                            </div>
                            @if($profil->level == 'Galeri')
                            <div class="form-group">
                              <label for="foto">Masukan File / Dokumen</label>
                              <input type="file" id="foto" name="foto">
                            </div>
                            @endif
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