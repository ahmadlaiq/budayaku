@include('home.layouts.header')
<section class="breadcrumb-area bread-bg">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title text-white">List Pameran</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="index.html">Home</a></li>
                            <li>Pameran</li>
                            <li>List Pameran</li>
                        </ul>
                    </div><!-- end breadcrumb-list -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
    <div class="bread-svg-box">
        <svg class="bread-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
            <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
        </svg>
    </div><!-- end bread-svg -->
</section>
<section class="card-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="filter-wrap margin-bottom-30px">
                    <div class="filter-top d-flex align-items-center justify-content-between pb-4">
                        <div>
                            <h3 class="title font-size-24">{{ $total_karya }} Karya Ditemukan</h3>
                            <!-- <p class="font-size-14 line-height-20 pt-1">Book with confidence: No tour booking fees</p> -->
                        </div>
                    </div><!-- end filter-top -->
                    <div class="filter-bar d-flex align-items-center justify-content-between">
                        <div class="filter-bar-filter d-flex flex-wrap align-items-center">
                            <div class="filter-option">
                                <h3 class="title font-size-16">Filter By</h3>
                            </div>
                            <div class="filter-option">

                                <select class="form-select form-control filter" tabindex="-98">
                                    <option value="">Default</option>
                                    <option value="1">Karya Terbaru</option>
                                    <option value="2">Karya Lama</option>
                                </select>
                            </div>
                        </div><!-- end filter-bar-filter -->
                        <div class="select-contain">
                            <div class="dropdown bootstrap-select select-contain-select">
                            </div>
                        </div><!-- end select-contain -->
                    </div><!-- end filter-bar -->
                </div><!-- end filter-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row" id="item-lists">
            @include('home.list-pameran')
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@include('home.layouts.footer')
<script>
    var p;
    var d = $('.filter').val();
    $(window).on('hashchange', function () {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                console.log(page);
                return false;
            } else {
                getData(page);
            }
        }
    });


    $(document).ready(function () {
        $(document).on('click', '.pagination a', function (event) {
            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
            event.preventDefault();
            var myurl = $(this).attr('href');
            var page = $(this).attr('href').split('page=')[1];
            p = page;

            getData(page);
        });
    });

    $(document).on('change', '.filter', function () {
        d = this.value;
        getData(p)
    })

    function getData(page) {
        var one_page;
        if (page === undefined) {
            one_page = 1;
        } else {
            one_page = page;
        }
        $.ajax({
                url: '?page=' + one_page + '&order=' + d,
                type: "get",
                datatype: "html",
            })
            .done(function (data) {
                $("#item-lists").empty().html(data);
                location.hash = page;
            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
                location.hash = page;
                // alert('No response from server');
            });
    }
</script>