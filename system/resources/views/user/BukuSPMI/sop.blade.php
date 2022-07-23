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
                    <h1 class="text-white animated zoomIn mb-3">Standar Operasi Prosedur</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Buku SPMI</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Standar Operasi Prosedur</li>
                        </ol>
                        <ol style="margin-top: 20px">
                            <form action="{{url('buku-SPMI/SOP')}}" method="post">
                                @csrf
                                <div class="position-relative w-100 mt-3">
                                    <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Cari SOP" style="height: 48px;" name="nama" id="q" value="{{$nama ??""}}">
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
                          <div class="carousel-item active">
                                  <img class="d-block w-100" src="{{url ('public/pet-care-website-template') }}/img/10.jpeg" alt="Card image">
                            </div>
                            <div class="carousel-item">
                                  <img class="d-block w-100" src="{{url ('public/pet-care-website-template') }}/img/00.jpeg" alt="Card image">
                            </div>
                          </div>
                        </div>
                    <div class="col-lg-7">
                        <div class="row g-5">
                            <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                                <h3 class="mb-0">Standar Operasi Prosedur</h3>
                                <p style="text-align: justify;"><b>Prosedur Operasi Standar atau Standar Operasional Prosedur</b> yang dapat disingkat sebagai SOP, adalah suatu alur/cara kerja yang sudah ter-standarisasi, Standar Operasional Prosedur ini memiliki kekuatan sebagai suatu petunjuk. Hal ini mencakup hal-hal dari operasi yang memiliki suatu prosedur tertulis yang pasti.</p> <br>
                                <span>Dokumen SOP SPMI POLITAP</span>
                                <ul class="list-group list-group-flush">
                                @foreach($list_sops as $sop)
                                  <li class="list-group-item">{{$sop->nama}} <a class="btn btn-primary" style="float: right;" href="{{url("/public/$sop->file")}}" download> <i class="fa fa-download"></i></a> <a data-bs-toggle="modal" data-bs-target="#modalSOP{{$sop->id}}" class="btn btn-success" style="float: right; margin-right: 10px"><i class="fa fa-eye"></i></a></li>
                                @endforeach
                                </ul>
                                {!! $list_sops->links() !!}
                            </div>
                        </div>
                        <!-- Modal -->
                            @foreach($list_sops as $sop)
                            <div class="modal fade" id="modalSOP{{$sop->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$sop->nama}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <iframe style="width: 100%; height: 500px" src="{{url("/public/$sop->file")}}"></iframe>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach
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