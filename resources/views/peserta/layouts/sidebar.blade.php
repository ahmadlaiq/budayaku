<div class="sidebar-nav sidebar--nav">
    <div class="sidebar-nav-body">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="author-content">
            <div class="d-flex align-items-center">
                <div class="author-img avatar-sm">
                    <img src="/images/avatar.jpeg" alt="testimonial image">
                </div>
                <div class="author-bio">
                    <h4 class="author__title">Peserta </h4>
                    <span class="author__meta">Welcome to Budayaku</span>
                </div>
            </div>
        </div>
        <div class="sidebar-menu-wrap">
            <ul class="sidebar-menu toggle-menu list-items">
                <li class="{{ Route::is('peserta.dashboard') ? 'page-active' : '' }}"><a href="{{ route('peserta.dashboard') }}"><i class="la la-dashboard mr-2"></i>Dashboard</a></li>
                <li class="{{ Route::is('peserta.carikompetisi') ? 'page-active' : '' }}"><a href="{{ route('peserta.carikompetisi') }}"><i class="la la-pencil mr-2 text-color-10"></i>Cari Kompetisi</a></li>
                <li class="{{ Route::is('peserta.kompetisisaya') ? 'page-active' : '' }}"><a href="{{ route('peserta.kompetisisaya') }}"><i class="la la-list mr-2 text-color-4"></i>Kompetisi Saya</a></li>
                <li class="{{ Route::is('peserta.pengumuman') ? 'page-active' : '' }}"><a href="{{ route('peserta.pengumuman') }}"><i class="la la-star mr-2 text-color-5"></i>Pengumuman</a></li>
                <li class="{{ Route::is('peserta.bantuan') ? 'page-active' : '' }}"><a href="{{ route('peserta.bantuan') }}"><i class="la la-heart mr-2 text-color-6"></i>Bantuan</a></li>
                <li class="{{ Route::is('peserta.pengaturan') ? 'page-active' : '' }}"><a href="{{ route('peserta.pengaturan') }}"><i class="la la-cog mr-2 text-color-10"></i>Pengaturan</a></li>
                <li><a href="{{ route('peserta.logout') }}"><i class="la la-power-off mr-2 text-color-11"></i>Keluar</a></li>
            </ul>
        </div><!-- end sidebar-menu-wrap -->
    </div>
</div>