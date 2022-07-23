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
                    <h1 class="text-white animated zoomIn mb-3">Profile Akun</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Akun</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{$user->nama}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Features Start -->
        <div class="container-xxl py-2">
            <div class="container">
                <div class="row g-3">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                        <center>
                        <img class="d-flex" style="border-radius: 50%; height: 200px; width: 200px; border: 3px solid #00B98E;" src="{{"/public/$user->foto"}}" alt="Card image">

                        <a data-bs-toggle="modal" data-bs-target="#modalEditProfil" class="btn btn-warning mt-2"><i class="fa fa-edit"></i> Edit Profile</a>
                        </center>
                        <!-- Modal -->
                            
                            <div class="modal fade" id="modalEditProfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{url('profil', $user->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method("PUT")
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nama Anda</label>
                                                    <input class="form-control rounded-pill w-100 ps-4 pe-5" name="nama" type="text" placeholder="Nama Anda" value="{{$user->nama}}" style="height: 48px;">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Username Anda</label>
                                                    <input class="form-control rounded-pill w-100 ps-4 pe-5" name="username" type="text" value="{{$user->username}}" style="height: 48px;">
                                                </div>
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-md-6">
                                                    <label>Email Anda</label>
                                                    <input class="form-control rounded-pill w-100 ps-4 pe-5" name="email" type="email" placeholder="Your Email" value="{{$user->email}}" style="height: 48px;">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Foto Anda</label>
                                                    <input class="form-control rounded-pill w-100 ps-4 pe-5" type="file" placeholder="Your Email" style="height: 48px;" onchange="readFoto(event)" name="foto" accept="image/*">
                                                    <img src="{{"/public/$user->foto"}}" id="output" style="width: 100%; margin-top: 5px" alt="">
                                                </div>
                                            </div>
                                            <button class="btn btn-danger mt-4" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="fa fa-lock"></i> Ganti Password</button>
                                            <button type="submit" class="btn btn-primary shadow-none mt-4" style="float: right"><i class="fa fa-save text-light"></i> Simpan</button>

                                        </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalToggleLabel2">Ganti Password</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{url('profil', $user->id)}}/ganti-password" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label>Password Lama</label>
                                            <input class="form-control rounded-pill w-100 ps-4 pe-5" name="lama" type="password" style="height: 48px;">

                                            <label class="mt-4">Password Baru</label>
                                            <input class="form-control rounded-pill w-100 ps-4 pe-5" name="baru" type="password" style="height: 48px;">

                                            <label class="mt-4">Konfirmasi Password Baru</label>
                                            <input class="form-control rounded-pill w-100 ps-4 pe-5" name="konfirmasi" type="password" style="height: 48px;">
                                        </div>
                                        <button type="submit" class="btn btn-primary shadow-none mt-4" style="float: right"><i class="fa fa-save text-light"></i> Simpan</button>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button class="btn btn-primary" data-bs-target="#modalEditProfil" data-bs-toggle="modal" data-bs-dismiss="modal">Kembali</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                        <div class="row g-5">
                            <center>
                            <div class="col-lg-8 wow fadeIn p-5" data-wow-delay="0.1s" style="">
                                <h3 class="mb-0">Detail Akun</h3> <br>
                                @include('admin.template.utils.notif')
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="card">
                                            <div class="card-body" style="text-align: justify;">
                                                <div class="row">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    Nama
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <strong>{{$user->nama}}</strong>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    Username
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <strong>{{$user->username}}</strong>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    Email
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <strong>{{$user->email}}</strong>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </center>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
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
    @include('user.template.js')
</body>

</html>