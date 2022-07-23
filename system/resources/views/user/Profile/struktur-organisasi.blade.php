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

            <div class="container-xxl bg-primary page-header" style="border-bottom-right-radius: 80px; border-bottom-left-radius: 80px;">
                <div class="container text-center">
                    <h1 class="text-white animated zoomIn mb-3">Struktur Organisasi P4MP</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Profil</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Struktur Organisasi</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <div class="container-xxl py-2">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 wow zoomIn" data-wow-delay="0.1s">
                        @foreach($galeri as $galeri)
                        <h2 class="mb-4" style="text-align: center">Struktur Organisasi</h2>
                        <img class="img-fluid w-100 mb-4" src="{{url("/public/$galeri->foto")}}" alt="">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>



        

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