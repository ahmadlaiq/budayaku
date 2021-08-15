<div class="dashboard-nav dashboard--nav">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="menu-wrapper">
                    <div class="logo mr-5">
                        
                        <div class="menu-toggler">
                            <i class="la la-bars"></i>
                            <i class="la la-times"></i>
                        </div><!-- end menu-toggler -->
                        <div class="user-menu-open">
                            <i class="la la-user"></i>
                        </div><!-- end user-menu-open -->
                    </div>
                    {{-- <div class="dashboard-search-box">
                        <div class="contact-form-action">
                            <form action="#">
                                <div class="form-group mb-0">
                                    <input class="form-control" type="text" name="text" placeholder="Search">
                                    <button class="search-btn"><i class="la la-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div> --}}
                    <div class="nav-btn ml-auto">
                        <div class="notification-wrap d-flex align-items-center">
                            <div class="notification-item mr-3">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle drop-reveal-toggle-icon" id="notificationDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="la la-bell"></i>
                                        <span class="noti-count">{{ get_notif() }}</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-reveal dropdown-menu-xl dropdown-menu-right">
                                        <div class="dropdown-header drop-reveal-header">
                                            <h6 class="title">You have <strong class="text-black">{{ get_notif() }}</strong> notifications</h6>
                                        </div>
                                        <div class="list-group drop-reveal-list">
                                        <?php if(get_notif() != 0) :  ?>
                                            @foreach(get_data_notif() as $d)
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="msg-body d-flex align-items-center">
                                                    <div class="icon-element bg-2 flex-shrink-0 mr-3 ml-0"><i class="la la-check"></i></div>
                                                    <div class="msg-content w-100">
                                                        <h3 class="title pb-1">Karya {{ $d->judul_karya }} Terkirim!!!</h3>
                                                        <p class="msg-text">{{ get_selisih($d->created_at) }}</p>
                                                    </div>
                                                </div><!-- end msg-body -->
                                            </a>
                                            @endforeach
                                        <?php endif ?>
                                        </div>
                                        <a href="{{ route('read_notif') }}" class="dropdown-item drop-reveal-btn text-center">Tandai Sudah Terbaca Semua</a>
                                    </div><!-- end dropdown-menu -->
                                </div>
                            </div><!-- end notification-item -->
                            
                            <div class="notification-item">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" id="userDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-sm flex-shrink-0 mr-2"><img src={{asset("/images/avatar.jpeg")}} alt="team-img" width="111" height="100"></div>
                                            <span class="font-size-14 font-weight-bold">Ahmad Nurul Laiq</span>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-reveal dropdown-menu-md dropdown-menu-right">
                                        <div class="dropdown-item drop-reveal-header user-reveal-header">
                                            <h6 class="title text-uppercase">Welcome!</h6>
                                        </div>
                                        <div class="list-group drop-reveal-list user-drop-reveal-list">
                                            <a href="admin-dashboard-settings.html" class="list-group-item list-group-item-action">
                                                <div class="msg-body">
                                                    <div class="msg-content">
                                                        <h3 class="title"><i class="la la-user mr-2"></i>Profil</h3>
                                                    </div>
                                                </div><!-- end msg-body -->
                                            </a>
                                            <a href="admin-dashboard-settings.html" class="list-group-item list-group-item-action">
                                                <div class="msg-body">
                                                    <div class="msg-content">
                                                        <h3 class="title"><i class="la la-gear mr-2"></i>Pengaturan</h3>
                                                    </div>
                                                </div><!-- end msg-body -->
                                            </a>
                                            <div class="section-block"></div>
                                            <a href="{{ route('peserta.logout')}}" class="list-group-item list-group-item-action">
                                                <div class="msg-body">
                                                    <div class="msg-content">
                                                        <h3 class="title"><i class="la la-power-off mr-2"></i>Keluar</h3>
                                                    </div>
                                                </div><!-- end msg-body -->
                                            </a>
                                        </div>
                                    </div><!-- end dropdown-menu -->
                                </div>
                            </div><!-- end notification-item -->
                        </div>
                    </div><!-- end nav-btn -->
                </div><!-- end menu-wrapper -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container-fluid -->
</div>