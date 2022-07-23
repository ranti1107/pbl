@extends('admin.template.base')
@section('content')

        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="shadow-primary border-radius-lg pt-4 pb-3" style="background-color: #808000">
                <h6 class="text-white text-capitalize ps-3">Check List</h6>
                  <a href="{{url('admin/kategori/create')}}" class="btn bg-gradient-dark mb-0" style="margin-left: 20px"><i class="fa fa-plus" style="font-size: 10pt"><b style="font-family: Courier; font-size: 10pt;"> Tambah Dokumen</b></i></a>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr style="text-align: center;">
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($list_kategori as $kategori)
                    <tr style="text-align: center;">
                      <td>
                          {{$loop->iteration}}
                      </td>
                      <td>
                        <div class="btn-group" style="text-align: center;">
                          <a href="{{url('admin/kategori', $kategori->id)}}/edit" class="btn btn-warning" style="width: 40px; border-radius: 5px;"><i class="fa fa-upload"></i></a>
                          <a href="" class="btn btn-success"><i class="fa fa-clipboard-check"></i></a>
                          @include('Admin.template.utils.delete', ['url'=>url('admin/kategori', $kategori->id)])
                        </div>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">{{$kategori->nama}}</p>
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