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
                    <h1 class="text-white animated zoomIn mb-3">Standar Pendidikan POLITAP</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Buku SPMI</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Standar Pendidikan POLITAP</li>
                        </ol>
                        <ol style="margin-top: 20px">
                            <form action="{{url('buku-SPMI/standar-pendidikan')}}" method="post">
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
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                  <img class="d-block w-100" src="{{url ('public/pet-care-website-template') }}/img/22.jpg" alt="Card image">
                            </div>
                            <div class="carousel-item">
                                  <img class="d-block w-100" src="{{url ('public/pet-care-website-template') }}/img/00.jpeg" alt="Card image">
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-5">
                            <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                                <h4 class="mb-0">Standar Pendidikan POLITAP</h4>
                                <p style="text-align: justify;">
                                    <b>Standar Nasional Pendidikan</b> merupakan kriteria minimal tentang berbagai aspek yang relevan dalam pelaksanaan sistem pendidikan nasional dan harus dipenuhi oleh penyelenggara dan/atau satuan pendidikan di seluruh wilayah hukum Negara Kesatuan Republik Indonesia. 
                                </p>
                                <ul class="list-group list-group-flush">
                                @foreach($standar_pendidikans as $standar_pendidikan)
                                  <li class="list-group-item">{{$standar_pendidikan->nama}} <a class="btn btn-primary" style="float: right;" href="{{url("/public/$standar_pendidikan->file")}}" download> <i class="fa fa-download"></i></a> <a data-bs-toggle="modal" data-bs-target="#modalStandarPendidikan{{$standar_pendidikan->id}}" class="btn btn-success" style="float: right; margin-right: 10px"><i class="fa fa-eye"></i></a></li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- Modal -->
                            @foreach($standar_pendidikans as $standar_pendidikan)
                            <div class="modal fade" id="modalStandarPendidikan{{$standar_pendidikan->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$standar_pendidikan->nama}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <iframe style="width: 100%; height: 500px" src="{{url("/public/$standar_pendidikan->file")}}"></iframe>
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