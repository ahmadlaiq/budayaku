
<!-- end cssload-loader -->

@include('home.layouts.header')

<section class="listing-form section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="listing-header pb-4">
                    <h3 class="title font-size-28 pb-2">Daftar</h3>
                </div>
                <div class="form-box">
                    <div class="form-title-wrap">
                        <h3 class="title"><i class="la la-user mr-2 text-gray"></i>Pilih Peran Kamu</h3>
                    </div><!-- form-title-wrap -->
                    <div class="form-content">
                        <div class="section-tab check-mark-tab text-center pb-4">
                            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false">
                                        <i class="la la-check icon-element"></i>
                                        <img src={{ asset("images/penyelenggara.png") }} alt="" width="150" height="100">
                                        <span class="d-block pt-2">Sebagai Panyelenggara</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" id="payoneer-tab" data-toggle="tab" href="#payoneer" role="tab" aria-controls="payoneer" aria-selected="true">
                                        <i class="la la-check icon-element"></i>
                                        <img src={{ asset("images/peserta.png")}} alt="" width="150" height="100">
                                        <span class="d-block pt-2">Sebagai Peserta</span>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- end section-tab -->
                        <div class="tab-content">
                            <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">
                                <div class="form-group">
                                    <a href="{{ route('penyelenggara.register')}}"><button type="button" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                      Selanjutnya <i class="la la-arrow-right ml-1"></i>
                                    </button></a>
                                  </div>
                            </div><!-- end tab-pane-->
                            <div class="tab-pane fade active show" id="payoneer" role="tabpanel" aria-labelledby="payoneer-tab">
                                <div class="row">
                                <div class="col-lg-12">
                                <div class="form-group">
                                    <a href="{{ route('peserta.register')}}"><button type="button" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                      Selanjutnya <i class="la la-arrow-right ml-1"></i>
                                    </button></a>
                                  </div>
                                </div>
                            </div>
                            </div><!-- end tab-pane-->
                        </div><!-- end tab-content -->
                    </div>
                </div><!-- end form-box -->
            </div><!-- end col-lg-9 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

@include('home.layouts.footer')
