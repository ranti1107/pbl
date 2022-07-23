@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                 <div class="card-header" style="background-color: #1F618D; margin-bottom: 0">
                  <h4 class="card-title" style="color: #fff; margin-top: 0.75rem;">Data Unduhan</h4>
                </div>
                <div class="card-body">
                  @include('admin.template.utils.notif')
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right; border-radius: 10px">
                    <i class="typcn typcn-plus"></i> Tambah Data
                  </button>

                  <!-- Modal -->
                  @include('admin.Unduhan.create')
                  <div class="table-responsive">
                    <table class="table table-datatable">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Aksi</th>
                          <th>Keterangan</th>
                          <th>Tanggal Masuk</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($list_Unduhan as $unduhan)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>
                            <div class="btn-group" style="text-align: center;">
                              <a href="{{url('admin/Unduhan', $unduhan->id)}}/edit" class="btn btn-warning" style="border-radius: 5px;"><i class="typcn typcn-edit"></i></a>
                              <a href="{{url('admin/Unduhan' , $unduhan->id)}}" class="btn btn-success" style="border-radius: 5px;"><i class="typcn typcn-info"></i></a>
                              @include('admin.template.utils.delete', ['url'=>url('admin/Unduhan', $unduhan->id)])
                            </div>
                          </td>
                          <td>{{$unduhan->keterangan}}</td>
                          <td>{!! date('d M Y', strtotime($unduhan->created_at)) !!}</td>
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