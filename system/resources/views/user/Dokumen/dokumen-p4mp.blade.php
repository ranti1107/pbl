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
                    <h1 class="text-white animated zoomIn mb-3">Akademik</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-2">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h2 class="mb-5">Daftar Dokumen P4MP POLITAP</h2>
                </div>
                <div class="row g-4">
                    <div class="d-flex align-items-start">
                        <div class="col-lg-4">
                          <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-kalender-tab" data-bs-toggle="pill" data-bs-target="#v-pills-kalender" type="button" role="tab" aria-controls="v-pills-kalender" aria-selected="true">Kalender Akademik</button>
                            <button class="nav-link" id="v-pills-monitoring-tab" data-bs-toggle="pill" data-bs-target="#v-pills-monitoring" type="button" role="tab" aria-controls="v-pills-monitoring" aria-selected="false">Monitoring dan Evaluasi</button>
                            <button class="nav-link" id="v-pills-pengembangan-dosen-tab" data-bs-toggle="pill" data-bs-target="#v-pills-pengembangan-dosen" type="button" role="tab" aria-controls="v-pills-pengembangan-dosen" aria-selected="false">Pengembangan Dosen</button>
                            <button class="nav-link" id="v-pills-pengembangan-tendik-tab" data-bs-toggle="pill" data-bs-target="#v-pills-pengembangan-tendik" type="button" role="tab" aria-controls="v-pills-pengembangan-tendik" aria-selected="false">Pengembangan Tendik</button>
                            <button class="nav-link" id="v-pills-statuta-tab" data-bs-toggle="pill" data-bs-target="#v-pills-statuta" type="button" role="tab" aria-controls="v-pills-statuta" aria-selected="false">Statuta POLITAP</button>
                            <button class="nav-link" id="v-pills-sotk-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sotk" type="button" role="tab" aria-controls="v-pills-sotk" aria-selected="false">SOTK POLITAP</button>
                            <button class="nav-link" id="v-pills-renstra-tab" data-bs-toggle="pill" data-bs-target="#v-pills-renstra" type="button" role="tab" aria-controls="v-pills-renstra" aria-selected="false">Renstra POLITAP</button>
                            <button class="nav-link" id="v-pills-peraturan-tab" data-bs-toggle="pill" data-bs-target="#v-pills-peraturan" type="button" role="tab" aria-controls="v-pills-peraturan" aria-selected="false">Peraturan-peraturan</button>
                            <button class="nav-link" id="v-pills-pedoman-tab" data-bs-toggle="pill" data-bs-target="#v-pills-pedoman" type="button" role="tab" aria-controls="v-pills-pedoman" aria-selected="false">Pedoman</button>
                          </div>
                        </div>
                      <div class="col-lg-8">
                          <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-kalender" role="tabpanel" aria-labelledby="v-pills-kalender-tab">
                                    @foreach($kalenders as $kalender)
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-md-8">
                                        {{$kalender->keterangan}}
                                    </div>
                                    <div class="col-md-4"> 
                                        <a data-bs-toggle="modal" data-bs-target="#modalDokumen{{$kalender->id}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                        <a href="{{url("/public/$kalender->file")}}" class="btn btn-primary" download><i class="fa fa-download"></i> Unduh Disini</a>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                            <!-- Modal -->
                            @foreach($kalenders as $kalender)
                            <div class="modal fade" id="modalDokumen{{$kalender->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$kalender->keterangan}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <iframe style="width: 100%; height: 500px" src="{{url("/public/$kalender->file")}}"></iframe>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade" id="v-pills-monitoring" role="tabpanel" aria-labelledby="v-pills-monitoring-tab">
                                    @foreach($monitorings as $monitoring)
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-md-8">
                                        {{$monitoring->keterangan}}
                                    </div>
                                    <div class="col-md-4">
                                        <a data-bs-toggle="modal" data-bs-target="#modalDokumen{{$monitoring->id}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                        <a href="{{url("/public/$monitoring->file")}}" class="btn btn-primary" download><i class="fa fa-download"></i> Unduh Disini</a>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                            <!-- Modal -->
                            @foreach($monitorings as $monitoring)
                            <div class="modal fade" id="modalDokumen{{$monitoring->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$monitoring->keterangan}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <iframe style="width: 100%; height: 500px" src="{{url("/public/$monitoring->file")}}"></iframe>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade" id="v-pills-pengembangan-dosen" role="tabpanel" aria-labelledby="v-pills-pengembangan-dosen-tab">
                                    @foreach($dosens as $dosen)
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-md-8">
                                        {{$dosen->keterangan}}
                                    </div>
                                    <div class="col-md-4">
                                        <a data-bs-toggle="modal" data-bs-target="#modalDokumen{{$dosen->id}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                        <a href="{{url("/public/$dosen->file")}}" class="btn btn-primary" download><i class="fa fa-download"></i> Unduh Disini</a>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                            <!-- Modal -->
                            @foreach($dosens as $dosen)
                            <div class="modal fade" id="modalDokumen{{$dosen->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$dosen->keterangan}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <iframe style="width: 100%; height: 500px" src="{{url("/public/$dosen->file")}}"></iframe>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade" id="v-pills-pengembangan-tendik" role="tabpanel" aria-labelledby="v-pills-pengembangan-tendik-tab">
                                    @foreach($tendiks as $tendik)
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-md-8">
                                        {{$tendik->keterangan}}
                                    </div>
                                    <div class="col-md-4">
                                        <a data-bs-toggle="modal" data-bs-target="#modalDokumen{{$tendik->id}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                        <a href="{{url("/public/$tendik->file")}}" class="btn btn-primary" download><i class="fa fa-download"></i> Unduh Disini</a>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                            <!-- Modal -->
                            @foreach($tendiks as $tendik)
                            <div class="modal fade" id="modalDokumen{{$tendik->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$tendik->keterangan}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <iframe style="width: 100%; height: 500px" src="{{url("/public/$tendik->file")}}"></iframe>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade" id="v-pills-statuta" role="tabpanel" aria-labelledby="v-pills-statuta-tab">
                                    @foreach($statutas as $statuta)
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-md-8">
                                        {{$statuta->keterangan}}
                                    </div>
                                    <div class="col-md-4">
                                        <a data-bs-toggle="modal" data-bs-target="#modalDokumen{{$statuta->id}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                        <a href="{{url("/public/$statuta->file")}}" class="btn btn-primary" download><i class="fa fa-download"></i> Unduh Disini</a>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                            <!-- Modal -->
                            @foreach($statutas as $statuta)
                            <div class="modal fade" id="modalDokumen{{$statuta->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$statuta->keterangan}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <iframe style="width: 100%; height: 500px" src="{{url("/public/$statuta->file")}}"></iframe>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade" id="v-pills-sotk" role="tabpanel" aria-labelledby="v-pills-sotk-tab">
                                    @foreach($sotks as $sotk)
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-md-8">
                                        {{$sotk->keterangan}}
                                    </div>
                                    <div class="col-md-4">
                                        <a data-bs-toggle="modal" data-bs-target="#modalDokumen{{$sotk->id}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                        <a href="{{url("/public/$sotk->file")}}" class="btn btn-primary" download><i class="fa fa-download"></i> Unduh Disini</a>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                            <!-- Modal -->
                            @foreach($sotks as $sotk)
                            <div class="modal fade" id="modalDokumen{{$sotk->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$sotk->keterangan}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <iframe style="width: 100%; height: 500px" src="{{url("/public/$sotk->file")}}"></iframe>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade" id="v-pills-renstra" role="tabpanel" aria-labelledby="v-pills-renstra-tab">
                                    @foreach($renstras as $renstra)
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-md-8">
                                        {{$renstra->keterangan}}
                                    </div>
                                    <div class="col-md-4">
                                        <a data-bs-toggle="modal" data-bs-target="#modalDokumen{{$renstra->id}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                        <a href="{{url("/public/$renstra->file")}}" class="btn btn-primary" download><i class="fa fa-download"></i> Unduh Disini</a>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                            <!-- Modal -->
                            @foreach($renstras as $renstra)
                            <div class="modal fade" id="modalDokumen{{$renstra->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$renstra->keterangan}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <iframe style="width: 100%; height: 500px" src="{{url("/public/$renstra->file")}}"></iframe>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade" id="v-pills-peraturan" role="tabpanel" aria-labelledby="v-pills-peraturan-tab">
                                    @foreach($peraturans as $peraturan)
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-md-8">
                                        {{$peraturan->keterangan}}
                                    </div>
                                    <div class="col-md-4">
                                        <a data-bs-toggle="modal" data-bs-target="#modalDokumen{{$peraturan->id}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                        <a href="{{url("/public/$peraturan->file")}}" class="btn btn-primary" download><i class="fa fa-download"></i> Unduh Disini</a>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                            <!-- Modal -->
                            @foreach($peraturans as $peraturan)
                            <div class="modal fade" id="modalDokumen{{$peraturan->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$peraturan->keterangan}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <iframe style="width: 100%; height: 500px" src="{{url("/public/$peraturan->file")}}"></iframe>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach

                            <div class="tab-pane fade" id="v-pills-pedoman" role="tabpanel" aria-labelledby="v-pills-pedoman-tab">
                                    @foreach($pedomans as $pedoman)
                                <div class="row" style="margin-bottom: 10px;">
                                    <div class="col-md-8">
                                        {{$pedoman->keterangan}}
                                    </div>
                                    <div class="col-md-4">
                                        <a data-bs-toggle="modal" data-bs-target="#modalDokumen{{$pedoman->id}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                        <a href="{{url("/public/$pedoman->file")}}" class="btn btn-primary" download><i class="fa fa-download"></i> Unduh Disini</a>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                            <!-- Modal -->
                            @foreach($pedomans as $pedoman)
                            <div class="modal fade" id="modalDokumen{{$pedoman->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$pedoman->keterangan}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <iframe style="width: 100%; height: 500px" src="{{url("/public/$pedoman->file")}}"></iframe>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach

                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        

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