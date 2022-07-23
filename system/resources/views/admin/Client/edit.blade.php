@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Data Admin</h4>
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('admin/User/simpan', $user->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                              <label for="nama">Nama Admin</label>
                              <input type="text" class="form-control" id="nama" name="nama" value="{{$user->nama}}">
                            </div>

                            <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" class="form-control" id="username" name="username" value="{{$user->username}}">
                            </div>

                            <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
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