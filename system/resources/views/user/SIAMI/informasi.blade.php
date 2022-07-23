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
                    <h1 class="text-white animated zoomIn mb-3">Informasi SIAMI</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">SIAMI</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Informasi SIAMI</li>
                        </ol>
                        <ol style="margin-top: 20px">
                            <form action="{{url('SIAMI/Informasi-SIAMI')}}" method="post">
                                @csrf
                                <div class="position-relative w-100 mt-3">
                                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Cari Dokumen" style="height: 48px;" name="nama" id="q" value="{{$nama ??""}}">
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
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                                  <img class="d-block w-100" src="{{url ('public/pet-care-website-template') }}/img/4.jpeg" alt="Card image">
                            </div>
                            <div class="carousel-item">
                                  <img class="d-block w-100" src="{{url ('public/pet-care-website-template') }}/img/2.jpeg" alt="Card image">
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-5">
                            <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                                <h3 class="mb-3">Informasi SIAMI</h3>
                                @foreach($siami as $siami)
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h4 class="mb-3">{{$siami->nama}}</h4>
                                        <h1 class="display-4 mb-4"><span class="text-primary"></span>  <span class="text-secondary"></span></h1>
                                        <i class="fa fa-download"></i>
                                    </div>
                                    <a class="p-2" target="_blank" href="{{url("/public/$siami->file")}}"> <i class="fa fa-eye"></i></a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
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