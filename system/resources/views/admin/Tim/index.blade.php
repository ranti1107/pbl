@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-header" style="background-color: #1F618D;">
                  <h4 class="card-title" style="color: #fff; margin-top: 0.75rem">Data Tim P4MP POLITAP</h4>
                </div>
                <div class="card-body">
                  @include('admin.template.utils.notif')
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right; border-radius: 10px">
                    <i class="typcn typcn-plus"></i> Tambah Data
                  </button>

                  <!-- Modal -->
                  @include('admin.Tim.create')

                  @foreach($list_tim as $tim)
                  <div class="col-md-3" style="margin-top: 70px">
                    <div class="card shadow border-0" style="border-radius: 20px">
                      <img style="height: 220px; border-top-right-radius: 20px; border-top-left-radius: 20px" src="{{url("/public/$tim->foto")}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p style="text-align: center; font-size: 12pt">{{$tim->nama}}</p>
                        <p style="text-align: center;"><span>NIP : {{$tim->nip}}</span></p>
                        <p style="text-align: center"><strong>{{$tim->jabatan}}</strong></p>
                        <center>
                        <div class="btn-group" style="text-align: center;">
                            <a href="{{url('admin/tim', $tim->id)}}/edit" class="btn btn-warning" style="border-radius: 5px;"><i class="typcn typcn-edit"></i></a>
                              @include('admin.template.utils.delete', ['url'=>url('admin/tim', $tim->id)])
                        </div>
                        </center>
                      </div>
                    </div>
                  </div>
                  @endforeach

                </div>
              </div>
            </div>
          </div>
        </div>

@endsection