<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <img class="img-fluid animated zoomIn" src="{{url('public')}}/img/p4mp-logo5 (1).png" alt="">
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{url('beranda')}}" class="nav-item nav-link {{request()->is('beranda') ? 'active' : ''}}">Beranda</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{request()->is('profil/latar-belakang', 'profil/visi-misi', 'profil/struktur-organisasi', 'profil/tim-p4mp') ? 'active' : ''}}" data-bs-toggle="dropdown">Profil P4MP</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{url('profil/latar-belakang')}}" class="dropdown-item {{request()->is('profil/latar-belakang') ? 'active' : ''}}">Latar Belakang P4MP</a>
                                <a href="{{url('profil/visi-misi')}}" class="dropdown-item {{request()->is('profil/visi-misi') ? 'active' : ''}}">Visi Misi P4MP</a>
                                <a href="{{url('profil/struktur-organisasi')}}" class="dropdown-item {{request()->is('profil/struktur-organisasi') ? 'active' : ''}}">Struktur Organisasi</a>
                                <a href="{{url('profil/tim-p4mp')}}" class="dropdown-item {{request()->is('profil/tim-p4mp') ? 'active' : ''}}">Profil Tim P4MP POLITAP</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{request()->is('buku-SPMI/kebijakan-SPMI', 'buku-SPMI/manual-PPEPP', 'buku-SPMI/standar-pendidikan', 'buku-SPMI/standar-penelitian', 'buku-SPMI/standar-PKM', 'buku-SPMI/SN-Dikti', 'buku-SPMI/SOP') ? 'active' : ''}}" data-bs-toggle="dropdown">Buku SPMI</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{url('buku-SPMI/kebijakan-SPMI')}}" class="dropdown-item {{request()->is('buku-SPMI/kebijakan-SPMI') ? 'active' : ''}}">Kebijakan Mutu</a>
                                <a href="{{url('buku-SPMI/manual-PPEPP')}}" class="dropdown-item {{request()->is('buku-SPMI/manual-PPEPP') ? 'active' : ''}}">Manual Standar PPEPP</a>
                                <a href="{{url('buku-SPMI/standar-pendidikan')}}" class="dropdown-item {{request()->is('buku-SPMI/standar-pendidikan') ? 'active' : ''}}">Standar Pendidikan</a>
                                <a href="{{url('buku-SPMI/standar-penelitian')}}" class="dropdown-item {{request()->is('buku-SPMI/standar-penelitian') ? 'active' : ''}}">Standar Penelitian</a>
                                <a href="{{url('buku-SPMI/standar-PKM')}}" class="dropdown-item {{request()->is('buku-SPMI/standar-PKM') ? 'active' : ''}}">Standar PKM</a>
                                <a href="{{url('buku-SPMI/SN-Dikti')}}" class="dropdown-item {{request()->is('buku-SPMI/SN-Dikti') ? 'active' : ''}}">Standar Melampaui SN-Dikti</a>
                                <a href="{{url('buku-SPMI/SOP')}}" class="dropdown-item {{request()->is('buku-SPMI/SOP') ? 'active' : ''}}">Standar Operasional Prosedur (SOP)</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{request()->is('SIAMI/Informasi-SIAMI', 'SIAMI/Laporan-SIAMI', 'SIAMI/Pelaksanaan-SIAMI') ? 'active' : ''}}" data-bs-toggle="dropdown">SIAMI</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{url('SIAMI/Informasi-SIAMI')}}" class="dropdown-item {{request()->is('SIAMI/Informasi-SIAMI') ? 'active' : ''}}">Informasi SIAMI</a>
                                <a href="{{url('SIAMI/Pedoman-AMI')}}" class="dropdown-item {{request()->is('SIAMI/Pedoman-AMI') ? 'active' : ''}}">Pedoman Audit Mutu Internal</a>
                                <a href="{{url('SIAMI/Pelaksanaan-SIAMI')}}" class="dropdown-item {{request()->is('SIAMI/Pelaksanaan-SIAMI') ? 'active' : ''}}">Pelaksanaan SIAMI</a>
                                <a href="{{url('SIAMI/Laporan-SIAMI')}}" class="dropdown-item {{request()->is('SIAMI/Laporan-SIAMI') ? 'active' : ''}}">Laporan SIAMI</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{request()->is('Akreditasi/Akreditasi-Jurusan') ? 'active' : ''}}" data-bs-toggle="dropdown">Akreditasi</a>
                            <div class="dropdown-menu m-0">
                                <a href="https://www.banpt.or.id/direktori/institusi/pencarian_institusi.php" class="dropdown-item" target="_blank">Akreditasi Perguruan Tinggi</a>
                                <a href="https://www.banpt.or.id/direktori/prodi/pencarian_prodi.php" class="dropdown-item" target="_blank">Peraturan BAN-PT/LAM</a>
                                <a href="{{url('Akreditasi/Akreditasi-Jurusan')}}" class="dropdown-item {{request()->is('Akreditasi/Akreditasi-Jurusan') ? 'active' : ''}}">Akreditasi Jurusan</a>
                            </div>
                        </div>
                            <a href="{{url('dokumen-p4mp')}}" class="nav-item nav-link {{request()->is('dokumen-p4mp') ? 'active' : ''}}">Akademik</a>

                        <div class="nav-item dropdown">
                            <a href="{{url('Kegiatan')}}" class="nav-item nav-link dropdown-toggle {{request()->is('Kegiatan*', 'Berita*') ? 'active' : ''}}">Serba Serbi P4MP</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{url('Kegiatan')}}" class="dropdown-item {{request()->is('Kegiatan*') ? 'active' : ''}}">Kegiatan P4MP</a>
                                <a href="{{url('Berita')}}" class="dropdown-item {{request()->is('Berita*') ? 'active' : ''}}">Berita P4MP</a>
                            </div>
                        </div>

                        
                </div>
            </nav>