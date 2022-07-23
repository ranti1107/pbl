<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row" style="background-color: #1F618D">
      <div class="navbar-brand-wrapper d-flex justify-content-center" style="background-color: #1F618D">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="{{url('admin/dashboard')}}">
            <img src="{{url('public')}}/user/img/Untitled-1.png" alt="profile" style="width: 100%" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="{{url('admin/dashboard')}}">
            <img src="{{url('public')}}/user/img/Untitled-1.png" alt="profile" style="width: 100%" />
          </a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" style="background-color: #1F618D; color: #fff;">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name">ADMIN PAGE</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="typcn typcn-cog-outline text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="typcn typcn-eject text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-date dropdown">
            <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;">
              <h6 class="date mb-0">
                <?php 
                  $hari=array("Sun","Mon","Tues","Wed","Thur","Fri","Sat");
                  $bulan=array(1=>"Jan","Feb","Mar","Apr","May","Jun","Jul","Aug",
                            "Sep","Oct","Nov","Dec");
                  $tgl=date("d");
                  $bln=date("n");
                  $hr=date("w");
                  $thn=date("Y");
                  echo("Today : ");
                  echo("<b>$hari[$hr], $tgl $bulan[$bln] $thn</b>");
              ?>
              </h6>
              <i class="typcn typcn-calendar"></i>
            </a>
          </li>
          <li class="nav-item dropdown mr-0">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" href="{{url('admin/setting')}}">
              <i class="typcn typcn-cog-outline mx-0"></i>
            </a>
          </li>
          <li class="nav-item dropdown mr-0">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" href="{{url('P4MP/logout')}}" onclick="return confirm('Anda Yakin Ingin Keluar?')">
              <i class="typcn typcn-export mx-0"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="typcn typcn-th-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
