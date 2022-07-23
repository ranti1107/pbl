@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card-body">
                  <div class="card-header" style="background-color: #1F618D;">
                  <h4 class="card-title" style="color: #fff; margin-top: 0.75rem">Tabel Dokumen SPMI</h4>
                </div>
              <div class="card">
                <div class="card-body">
                  @include('admin.template.utils.notif')
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right; margin-bottom: 30px; border-radius: 10px;">
                    <i class="typcn typcn-plus"></i> Tambah File
                  </button>

                  <!-- Modal -->
                  @include('admin.KlinikSPMI.create')
                  @include('admin.KlinikSPMI.edit')
                  <div class="table-responsive">
                    <table class="table table-striped table-datatable">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Aksi</th>
                          <th>Nama</th>
                          <th>Tanggal Upload</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($list_klinik_spmi as $klinik_spmi)
                        <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>
                            <div class="btn-group" style="text-align: center;">
                              <button type="button" data-toggle="modal" data-target="#exampleModal{{$klinik_spmi->id}}" class="btn btn-warning" style="border-radius: 5px;"><i class="typcn typcn-edit"></i></button>
                              <a href="{{url('admin/klinik-spmi' , $klinik_spmi->id)}}" class="btn btn-success" style="border-radius: 5px;"><i class="typcn typcn-info"></i></a>
                              @include('admin.template.utils.delete', ['url'=>url('admin/klinik-spmi', $klinik_spmi->id)])
                            </div>
                          </td>
                          <td>{{$klinik_spmi->nama}}</td>
                          <td>{!! date('d M Y', strtotime($klinik_spmi->created_at)) !!}</td>
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