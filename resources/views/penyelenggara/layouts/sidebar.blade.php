<div class="sidebar-nav sidebar--nav">
    <div class="sidebar-nav-body">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="author-content">
            <div class="d-flex align-items-center">
                <div class="logo ml-5">
                    <a href="/"><img src={{ asset("/images/logo-horizontal.png")}} alt="logo" height="30"></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu-wrap">
            <ul class="sidebar-menu toggle-menu list-items">
                <li class="{{ Route::is('penyelenggara.dashboard') ? 'page-active' : '' }}"><a href="{{ route('penyelenggara.dashboard') }}"><i class="la la-dashboard mr-2"></i>Dashboard</a></li>
                <li class="{{ Route::is('penyelenggara.buatkompetisi') ? 'page-active' : '' }}"><a href="{{ route('penyelenggara.buatkompetisi') }}"><i class="la la-pencil mr-2 text-color-10"></i>Buat Kompetisi</a></li>
                <li class="{{ Route::is('penyelenggara.aturkompetisi', 'list_karya.show') ? 'page-active' : '' }}"><a href="{{ route('penyelenggara.aturkompetisi') }}"><i class="la la-certificate mr-2 text-color-4"></i>Atur Kompetisi</a></li>
                <li class="{{ Route::is('penyelenggara.pengumuman') ? 'page-active' : '' }}"><a href="{{ route('penyelenggara.pengumuman') }}"><i class="la la-trophy mr-2 text-color-5"></i>Pengumuman</a></li>
                <li class="{{ Route::is('penyelenggara.pengaturan') ? 'page-active' : '' }}"><a href="{{ route('penyelenggara.pengaturan') }}"><i class="la la-cog mr-2 text-color-10"></i>Pengaturan</a></li>
                <li class="{{ Route::is('penyelenggara.pengaturan') ? 'page-active' : '' }}"><a href="{{ url('penyelenggara.profile') }}"><i class="la la-user mr-2 text-color-10"></i>Profile</a></li>
                <li><a href="{{ route('penyelenggara.logout')}}"><i class="la la-power-off mr-2 text-color-11"></i>Keluar</a></li>
            </ul>
        </div><!-- end sidebar-menu-wrap -->
    </div>
</div>