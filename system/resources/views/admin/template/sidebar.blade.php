<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item {{request()->is('admin/dashboard*') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('admin/dashboard')}}">
              <i class="typcn typcn-home-outline menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
           <li class="nav-item {{request()->is('admin/profil*') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('admin/profil')}}">
              <i class="typcn typcn-business-card menu-icon"></i>
              <span class="menu-title">Profile Politap</span>
            </a>
          </li>
          <li class="nav-item {{request()->is('admin/klinik-spmi*') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('admin/klinik-spmi')}}">
              <i class="typcn typcn-book menu-icon"></i>
              <span class="menu-title">Buku SPMI</span>
            </a>
          </li>
          <li class="nav-item {{request()->is('admin/tim*') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('admin/tim')}}">
              <i class="typcn typcn-group-outline menu-icon"></i>
              <span class="menu-title">Tim P4MP POLITAP</span>
            </a>
          </li>
          <li class="nav-item {{request()->is('admin/siami*') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('admin/siami')}}">
              <i class="typcn typcn-folder-open menu-icon"></i>
              <span class="menu-title"> SIAMI</span>
            </a>
          </li>
          <li class="nav-item {{request()->is('admin/Akreditasi*') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('admin/Akreditasi')}}">
              <i class="typcn typcn-tick-outline menu-icon"></i>
              <span class="menu-title">Akreditasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#p4mp" aria-expanded="false" aria-controls="p4mp">
              <i class="typcn typcn-user-add-outline menu-icon"></i>
              <span class="menu-title">Serba Serbi P4MP</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="p4mp">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item {{request()->is('admin/kegiatan*') ? 'active' : ''}}"> <a class="nav-link" href="{{url('admin/kegiatan')}}">Kegiatan P4MP</a></li>
                <li class="nav-item {{request()->is('admin/berita*') ? 'active' : ''}}"> <a class="nav-link" href="{{url('admin/berita')}}">Berita P4MP</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item {{request()->is('admin/Unduhan*') ? 'active' : ''}}">
            <a class="nav-link" href="{{url('admin/Unduhan')}}">
              <i class="typcn typcn-download-outline menu-icon"></i>
              <span class="menu-title">Dok. Akademik</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="user">
              <i class="typcn typcn-user-add-outline menu-icon"></i>
              <span class="menu-title">User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="user">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item {{request()->is('admin/User*') ? 'active' : ''}}"> <a class="nav-link" href="{{url('admin/User')}}">Admin</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>