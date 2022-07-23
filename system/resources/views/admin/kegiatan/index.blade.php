@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tabel Kegiatan SPMI</h4>
                  @include('admin.template.utils.notif')
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right;">
                    <i class="typcn typcn-plus"></i> Tambah Kegiatan
                  </button>

                  <!-- Modal -->
                  @include('admin.kegiatan.create')
                  <div class="table-responsive">
                    <table class="table table-datatable">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Aksi</th>
                          <th>Nama</th>
                          <th>Tahun</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($list_kegiatan as $kegiatan)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>
                            <div class="btn-group" style="text-align: center;">
                              <a href="{{url('admin/kegiatan', $kegiatan->id)}}/edit" class="btn btn-warning" style="border-radius: 5px;"><i class="typcn typcn-edit"></i></a>
                              <a href="{{url('admin/kegiatan' , $kegiatan->id)}}" class="btn btn-success" style="border-radius: 5px;"><i class="typcn typcn-info"></i></a>
                              @include('admin.template.utils.delete', ['url'=>url('admin/kegiatan', $kegiatan->id)])
                            </div>
                          </td>
                          <td>{{$kegiatan->nama}}</td>
                          <td>{{$kegiatan->tahun}}</td>
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