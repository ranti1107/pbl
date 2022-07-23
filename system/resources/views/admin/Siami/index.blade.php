@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-header" style="background-color: #1F618D;">
                  <h4 class="card-title" style="color: #fff;margin-top: 0.75rem">Tabel SIAMI</h4>
                </div>
                <div class="card-body">
                  @include('admin.template.utils.notif')
                  <!-- Button trigger modal -->
                  
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right; margin-bottom: 30px; border-radius: 10PX">
                    <i class="typcn typcn-plus"></i> Tambah File
                  </button>

                  <!-- Modal -->
                  @include('admin.Siami.create')
                  <div class="table-responsive">
                    <table class="table table-striped table-datatable">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Aksi</th>
                          <th>Nama</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($list_siami as $siami)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>
                            <div class="btn-group" style="text-align: center;">
                              <a href="{{url('admin/siami', $siami->id)}}/edit" class="btn btn-warning" style="border-radius: 5px;"><i class="typcn typcn-edit"></i></a>
                              <a href="{{url('admin/siami' , $siami->id)}}" class="btn btn-success" style="border-radius: 5px;"><i class="typcn typcn-info"></i></a>
                              @include('admin.template.utils.delete', ['url'=>url('admin/siami', $siami->id)])
                            </div>
                          </td>
                          <td>{{$siami->nama}}</td>
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