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

            <div class="container-xxl bg-primary hero-header">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Apa itu P4MP?</h1>
                            <p class="text-white pb-3 animated zoomIn">P4MP (Pusat Pengembangan Pembelajaran dan Penjaminan Mutu Pendidikan) merupakan suatu Lembaga/Unit yang ada di Politeknik Negeri Ketapang yang bertugas dalam melakukan Perencanaan, Pelaksanaan, Evaluasi serta Pengembangan Pembelajaran dan Sistem Penjaminan Mutu di Lingkungan Politeknik Negeri Ketapang.</p>
                            <a href="{{url('profil/latar-belakang')}}" class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Baca Selengkapnya</a>
                        </div>
                        <div class="col-lg-6 text-lg-start" style="">
                            <img class="img-fluid animated zoomIn" src="{{url('public')}}/img/p4mp-logo5 (1).png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Features Start -->
        <div class="container-xxl py-2">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                          <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          </div>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="{{url ('public/pet-care-website-template') }}/img/10.jpeg" alt="Card image">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="{{url ('public/pet-care-website-template') }}/img/00.jpeg" alt="Card image">
                            </div>
                          </div>
                          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                          </button>
                          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                          </button>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-5">
                            <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                                <h3 class="mb-4 wow fadeIn" data-wow-delay="0.1s">Berita Terbaru P4MP</h3>
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                @foreach($list_berita as $berita)
                                    <div class="card mb-4 shadow border-0" style="max-width: 540px;">
                                      <div class="row g-0">
                                        <div class="col-md-4">
                                          <img style="margin-bottom: auto; margin-top: 25px; margin-bottom: 25px" src="{{url("/public/$berita->foto")}}" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                          <div class="card-body">
                                            <h5 class="card-title"><a class="text-primary" href="{{url('Berita', $berita->id)}}">{{$berita->judul}}</a></h5>
                                            <p class="card-text">
                                                {{(str_word_count("$berita->isi") > 10 ? substr("$berita->isi",0,100)."(...)" : "$berita->isi")}}
                                            </p>
                                            <p class="card-text"><i class="fa fa-clock"></i> {!! date('d M Y', strtotime($berita->created_at)) !!}</p>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                @endforeach
                                <a href="{{url('Berita')}}" class="btn btn-primary"> Berita Lebih Lengkap Cek Disini</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->

        @include('user.template.footer')

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('user.template.js')
</body>

</html>