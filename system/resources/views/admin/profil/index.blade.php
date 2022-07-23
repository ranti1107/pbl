@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-header" style="background-color: #1F618D;">
                  <h4 class="card-title" style="color: #fff;margin-top: 0.75rem">Tabel Profile Politap</h4>
                </div>
                <div class="card-body">
                  @include('admin.template.utils.notif')
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right; border-radius: 10px">
                    <i class="typcn typcn-plus"></i> Tambah File
                  </button>

                  <!-- Modal -->
                  @include('admin.profil.create')
                  <div class="table-responsive">
                    <table class="table table-datatable">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Aksi</th>
                          <th>Nama</th>
                          <th>Level</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($list_profil as $profil)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>
                            <div class="btn-group" style="text-align: center;">
                              <a href="{{url('admin/profil', $profil->id)}}/edit" class="btn btn-warning" style="border-radius: 5px;"><i class="typcn typcn-edit"></i></a>
                              @include('admin.template.utils.delete', ['url'=>url('admin/profil', $profil->id)])
                            </div>
                          </td>
                          <td>{{$profil->nama}}</td>
                          <td>{{$profil->level}}</td>
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