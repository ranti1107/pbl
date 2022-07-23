@extends('admin.template.base')
@section('content')

        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="shadow-primary border-radius-lg pt-4 pb-3" style="background-color: #808000">
                <h6 class="text-white text-capitalize ps-3">Postingan</h6>
                  <a href="{{url('admin/postingan/create')}}" class="btn bg-gradient-dark mb-0" style="margin-left: 20px"><i class="fa fa-plus" style="font-size: 10pt"><b style="font-family: Courier; font-size: 10pt;"> Tambah Artikel</b></i></a>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-datatable align-items-center mb-0">
                  <thead style="text-align: center;">
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Rilis</th>
                    </tr>
                  </thead>
                  <tbody style="text-align: center;">
                      @foreach($list_postingan as $postingan)
                    <tr>
                      <td>
                          {{$loop->iteration}}
                      </td>
                      <td>
                        <div class="btn-group">
                          <a href="{{url('admin/postingan', $postingan->id)}}" class="btn btn-primary" style="width: 40px; border-radius: 5px;"><i class="fa fa-info"></i></a>
                          <a href="{{url('admin/postingan', $postingan->id)}}/edit" class="btn btn-warning" style="width: 40px; border-radius: 5px;"><i class="fa fa-edit"></i></a>
                          @include('admin.template.utils.delete', ['url'=>url('admin/postingan', $postingan->id)])
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">{{$postingan->judul}}</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$postingan->created_at}}</span>
                      </td>
                    </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

@endsection