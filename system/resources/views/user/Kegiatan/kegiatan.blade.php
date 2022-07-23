<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.template.css')
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            @include('user.template.header')

            <div class="container-xxl bg-primary page-header">
                <div class="container text-center">
                    <h1 class="text-white animated zoomIn mb-3">Kegiatan P4MP</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Serba Serbi P4MP</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Kegiatan P4MP</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Features Start -->
        <div class="container-xxl py-2">
            <div class="container">
                <div class="row g-5">
                    <form action="{{url('Kegiatan')}}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="col-lg-10">
                        <div class="input-group input-group-outline">
                            <select class="form-control" name="tahun" value="{{$tahun ??""}}">
                                <option>-- Pilih Tahun --</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i></button>
                      </div>
                    </div>
                  </form>
                  @include('admin.template.utils.notif')
                    @foreach($list_kegiatan as $kegiatan)
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card shadow border-0">
                            <a data-bs-toggle="modal" data-bs-target="#modal{{$kegiatan->id}}">
                                <div class="carousel-item active">
                                    <img style="width: 100%;" src="{{url("/public/$kegiatan->foto")}}">
                                    <div class="carousel-caption d-none d-md-block" style="margin-bottom: -20px; height: 50px;">
                                      </div>
                                  </div>
                            </a>
                          <div class="card-body">
                            <p class="card-text">{{$kegiatan->nama}}</p>
                            <p class="card-text"><i class="fa fa-clock"></i> {!! date('d M Y', strtotime($kegiatan->created_at)) !!}</p>
                          </div>
                        </div>
                    </div>
                    @endforeach

                    <!-- Modal -->
                    @foreach($list_kegiatan as $kegiatan)
                    <div class="modal fade" id="modal{{$kegiatan->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{$kegiatan->nama}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <img style="width: 100%;" src="{{url("/public/$kegiatan->foto")}}">
                          </div>
                          <div class="modal-content">
                            <p class="modal-body" id="exampleModalLabel" style="margin-top: -10px; text-align: center;">
                                <strong><i class="fa fa-clock"></i> {!! date('d M Y', strtotime($kegiatan->created_at)) !!}</strong><br>
                            </p>
                            <p class="modal-body" id="exampleModalLabel" style="margin-top: -30px">
                                {{$kegiatan->deskripsi}}
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Features End -->
        

        <!-- Footer Start -->
        @include('user.template.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('user.template.js')
</body>

</html>