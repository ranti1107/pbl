@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tabel Edit File</h4>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('admin/tim/simpan', $tim->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                              <label for="nama">Nama</label>
                              <input type="text" class="form-control" id="nama" value="{{$tim->nama}}" name="nama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                              <div class="col-md-6">
                                <label for="nama">Jabatan</label>
                                <input type="text" class="form-control" id="nama" value="{{$tim->jabatan}}" name="jabatan" placeholder="{{$tim->jabatan}}">
                              </div>
                              <div class="col-md-6">
                                <label for="nama">NIP</label>
                                <input type="text" class="form-control" id="nama" value="{{$tim->nip}}" name="nip" placeholder="{{$tim->nip}}">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-6">
                                <label for="status">Jenis Kelamin</label>
                                  <select name="jenis_kelamin" class="form-control">
                                  <option value="{{$tim->jenis_kelamin}}" hidden>{{$tim->jenis_kelamin}}</option>
                                      <option value="Laki-laki">Laki-laki</option>
                                      <option value="Perempuan">Perempuan</option>
                                  </select>
                              </div>
                              <div class="col-md-6">
                                <label for="nama">Link Instagram</label>
                                <input type="text" class="form-control" id="nama" value="{{$tim->instagram}}" name="instagram" placeholder="{{$tim->instagram}}">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="deskripsi">Alamat</label>
                              <textarea class="form-control" id="deskripsi" name="alamat">{{$tim->alamat}}</textarea>
                            </div>
                            <div class="form-group">
                              <label for="foto">Masukan Foto</label>
                              <input type="file" id="foto" name="foto">
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