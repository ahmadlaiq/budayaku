<aside class="main-sidebar sidebar-default-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="https://pngimage.net/wp-content/uploads/2018/06/logo-uisi-png-2.png" alt="UISI Logo" class="brand-image elevation-2"
           style="opacity: .8; border-radius: 50%;">
      <span class="brand-text font-weight-light"><strong style="font-size: 25px; font-weight: bold; color: #1b1b1e;">UISI</strong> <b style="color: #ea3546;">Lapor</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar"> 
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="{{ (Auth::guard('admin')->check()) ? route('admin-profile') : route('mahasiswa-profile') }}" class="d-block">{{ ucwords(strtolower(Auth::guard()->user()->nama)) }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @if (Auth::guard('admin')->check())
             <li class="nav-item">
                <a href="{{ route('admin') }}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                    Dashboard
                    </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('admin-laporan') }}" class="nav-link">
                  <i class="nav-icon fas fa-comment"></i>
                  <p>
                    Laporan Mahasiswa
                  </p>
                </a>
              </li>
            @else
              <li class="nav-item">
                <a href="/" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                    Dashboard
                    </p>
                </a>
              </li>

              <li class="nav-item">
               <a href="{{ route('laporan') }}" class="nav-link">
                  <i class="nav-icon fas fa-comment"></i>
                  <p>
                    Laporan
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('riwayat') }}" class="nav-link">
                  <i class="nav-icon fas fa-history"></i>
                  <p>
                    Riwayat Laporan
                  </p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ route('tutorial') }}" class="nav-link">
                  <i class="nav-icon fas fa-info-circle"></i>
                  <p>
                    Tutorial Lapor
                  </p>
                </a>
              </li>

              
            @endif
            <li class="nav-item">
                <a href="javascript:void(0)" id="keluar" class="nav-link">
                    <i class="nav-icon fas fa-power-off"></i>
                    <p>
                    Keluar
                    </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

