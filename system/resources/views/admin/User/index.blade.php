@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-header" style="background-color: #1F618D;">
                  <h4 class="card-title" style="color: #fff; margin-top: 0.75rem; ">Data Admin</h4>
                </div>
                <div class="card-body">
                  @include('admin.template.utils.notif')
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right;border-radius: 10px ">
                    <i class="typcn typcn-plus"></i> Tambah Data
                  </button>

                  <!-- Modal -->
                  @include('admin.User.create')
                  <div class="table-responsive">
                    <table class="table table-datatable">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Aksi</th>
                          <th>Email</th>
                          <th>Username</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($list_user as $user)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>
                            <div class="btn-group" style="text-align: center;">
                              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$user->id}}" style="border-radius: 5px;"><i class="typcn typcn-edit"></i></button>
                              <a href="{{url('admin/User' , $user->id)}}" class="btn btn-success" style="border-radius: 5px;"><i class="typcn typcn-info"></i></a>
                              @include('admin.template.utils.delete', ['url'=>url('admin/User', $user->id)])
                            </div>
                          </td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->username}}</td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


<!-- Modal -->
@foreach($list_user as $user)
<div class="modal fade" id="edit{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{url('admin/User/simpan', $user->id)}}" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="col-lg-12">
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

          </div>
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>      
    </div>
  </div>
</div>
@endforeach

@endsection