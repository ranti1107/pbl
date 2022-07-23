@extends('admin.template.base')
@section('content')

        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-header" style="background-color: #1F618D; margin-bottom: 0">
                  <h4 class="card-title" style="color: #fff; margin-top: 0.75rem;">Berita P4MP POLITAP</h4>
                </div>
                <div class="card-body">
                  @include('admin.template.utils.notif')
                  <form action="{{url('admin/berita')}}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-lg-10">
                        <div class="input-group input-group-outline">
                          <input type="text" placeholder="Cari" name="judul" class="form-control" value="{{$judul ??""}}">
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <button class="btn btn-primary" type="submit"><i class="typcn typcn-zoom"></i></button>
                      </div>
                    </div>
                  </form>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="float: right;">
                    <i class="typcn typcn-plus"></i> Tambah Berita
                  </button>

                  <!-- Modal -->
                  @include('admin.Berita.create')
                  <div class="container" style="margin-top: 100px">
                      @foreach($list_berita as $berita)
                      <div class="col-lg-4">
                        <div class="card mb-3" style="width: 18rem;">
                          <img src="{{url("/public/$berita->foto")}}" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{$berita->judul}}</h5>
                            <p class="card-text"><i class="typcn typcn-clock"></i> {!! date('d M Y', strtotime($berita->created_at)) !!}</p>
                          </div>
                          <div class="card-body">
                            <div class="row">
                              <a href="{{url('admin/berita', $berita->id)}}/edit" class="btn btn-success" data-toggle="modal" data-target="#edit{{$berita->id}}"><i class="typcn typcn-edit"></i></a>
                              <a href="{{url('admin/berita' , $berita->id)}}" class="btn btn-primary" data-toggle="modal" data-target="#lihat{{$berita->id}}"><i class="typcn typcn-eye"></i></a>
                              @include('admin.template.utils.delete', ['url'=>url('admin/berita', $berita->id)])
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                  </div>
                  

                  <!-- Modal Edit -->
                  @foreach($list_berita as $berita)
                    <div class="modal fade" id="edit{{$berita->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Berita P4MP</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{url('admin/berita/simpan', $berita->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                              <label for="nama"><strong>Judul Berita</strong></label>
                              <input type="text" class="form-control" value="{{$berita->judul}}" id="nama" name="judul" placeholder="Masukkan Judul" required>
                            </div>

                            <div class="form-group">
                              <label for="foto"><strong>Masukan Foto</strong></label>
                              <input type="file" id="foto" name="foto" required="required" accept="image/*" onchange="readFoto(event)" required>
                            </div>
                            <img id="output" src="{{url("/public/$berita->foto")}}" style="width: 100%; margin-top: 5px; margin-bottom: 20px;" alt="">
                            <div class="form-group">
                              <label for="nama"><strong>Berita</strong></label><br>
                              <textarea name="isi" style="width: 100%; height: 150px;" required>{{$berita->isi}}</textarea>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach

                  <!-- Modal Lihat Berita -->
                  @foreach($list_berita as $berita)
                    <div class="modal fade" id="lihat{{$berita->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">{{$berita->judul}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <img src="{{url("/public/$berita->foto")}}" class="card-img-top" alt="...">
                          <p class="mt-2">
                            {{$berita->isi}}
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              {!! $list_berita->links() !!}
              </div>
            </div>
          </div>
        </div>



@endsection
@push('script')
<script type="text/javascript">
        var readFoto= function(event) {
          var input = event.target;
          var reader = new FileReader();
          reader.onload = function(){
            var dataURL = reader.result;
            var output = document.getElementById('output');
            output.src = dataURL;
          };
          reader.readAsDataURL(input.files[0]);
        };
    </script>
@endpush