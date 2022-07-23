@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Rincian File</h4>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('admin/Unduhan/simpan', $unduhan->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                              <label for="keterangan">Keterangan</label>
                              <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{$unduhan->keterangan}}" placeholder="keterangan">
                            </div>

                            <div class="form-group">
                              <label>Level</label>
                              <select name="level" value="{{$unduhan->level}}" class="form-control">
                                  <option value="{{$unduhan->level}}" hidden>{{$unduhan->level}}</option>
                                  <option value="Kalender">Kalender Akademik</option>
                                  <option value="Monitoring">Monitoring dan Evaluasi</option>
                                  <option value="Dosen">Pengembangan Dosen</option>
                                  <option value="Tendik">Pengembangan Tendik</option>
                                  <option value="Statuta">Statuta POLITAP</option>
                                  <option value="SOTK">SOTK POLITAP</option>
                                  <option value="Renstra">Renstra POLITAP</option>
                                  <option value="Peraturan">Peraturan-peraturan</option>
                                  <option value="Pedoman">Pedoman</option>
                              </select>
                            </div>

                            <div class="form-group">
                              <label for="keterangan">Tanggal Masuk</label>
                              <input type="date" class="form-control" id="keterangan" value="{{$unduhan->tanggal_masuk}}" name="tanggal_masuk">
                            </div>

                            <div class="form-group">
                              <label for="foto">Masukan File Pendukung <span style="color: red">*Format PDF</span></label>
                              <input type="file" id="foto" name="file">
                            </div>

                            <div class="form-group">
                              <label for="nama">Deskripsi</label><br>
                              <textarea name="deskripsi" style="width: 100%; height: 150px;"></textarea>
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