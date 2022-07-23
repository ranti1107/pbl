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
                    <h1 class="text-white animated zoomIn mb-3">TIM P4MP POLITAP</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Profil</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Tim P4MP POLITAP</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Team Start -->
        <div class="container-xxl py-2">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h2 class="mb-5">Tim P4MP POLITAP</h2>
                </div>
                <div class="row g-4">
                    @foreach($list_tim as $tim)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <p>{{$tim->nama}}</p>
                            <p class="mb-4"><strong>{{$tim->jabatan}}</strong></p>
                            <img class="img-fluid rounded-circle w-100 mb-4" src="{{url("/public/$tim->foto")}}" alt="">
                            <div class="d-flex justify-content-center">
                                <p>NIP. {{$tim->nip}}</p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-primary bg-white m-1" href="{{$tim->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Team End -->
        

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