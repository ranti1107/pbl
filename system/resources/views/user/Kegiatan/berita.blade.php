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
                    <h1 class="text-white animated zoomIn mb-3">Berita P4MP</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Serba Serbi P4MP</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Berita P4MP</li>
                        </ol>
                        <ol style="margin-top: 20px">
                            <form action="{{url('Berita')}}" method="post">
                                @csrf
                                <div class="position-relative w-100 mt-3">
                                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Cari Berita" style="height: 48px;" name="judul" id="q" value="{{$judul ??""}}">
                                    <button type="submit" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                                </div>
                            </form>
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
                    @foreach($list_berita as $berita)
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card shadow border-0">
                            <a href="{{url('Berita', $berita->id)}}">
                                <div class="carousel-item active">
                                    <img style="width: 100%;" src="{{url("/public/$berita->foto")}}">
                                    <div class="carousel-caption d-none d-md-block" style="margin-bottom: -20px; height: 50px;">
                                        
                                      </div>
                                  </div>
                            </a>
                          <div class="card-body">
                            <p class="card-text">{{$berita->judul}}</p>
                          </div>
                          <div class="card-footer">
                              <p style="opacity: 100%">By {{$berita->user->nama}}, <br><i class="fa fa-clock"></i> {!! date('d M Y', strtotime($berita->updated_at)) !!}</p>
                          </div>
                        </div>
                    </div>
                    @endforeach
                    {!! $list_berita->links() !!}
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