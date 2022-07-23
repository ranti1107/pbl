@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Client</h4>
                  @include('admin.template.utils.notif')
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right; ">
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
                              <a href="{{url('admin/User', $user->id)}}/edit" class="btn btn-warning" style="border-radius: 5px;"><i class="typcn typcn-edit"></i></a>
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

@endsection