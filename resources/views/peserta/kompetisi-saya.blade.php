@extends('peserta.layouts.master')
@section('content')
<div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard--bread dashboard-bread-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-30 text-white">Kompetisi Saya</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="index.html" class="text-white">Home</a></li>
                            <li>Dashboard</li>
                            <li>Kompetisi Saya</li>
                        </ul>
                    </div><!-- end breadcrumb-list -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div>
    </div><!-- end dashboard-bread -->
    <div class="dashboard-main-content">
    
        <div class="container-fluid">
            <table class="yajra-datatable" style="border:none; background:transparant;">
                <thead style="border:none"></thead>
                <tbody>
                </tbody>
            </table>

            <div class="border-top mt-5"></div>
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="copy-right padding-top-30px">
                        <p class="copy__desc">
                            © Copyright Trizen 2020. Made with
                            <span class="la la-heart"></span> by <a
                                href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                        </p>
                    </div><!-- end copy-right -->
                </div><!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div class="copy-right-content text-right padding-top-30px">
                        <ul class="social-profile">
                            <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-github"></i></a></li>
                            <li><a href="#"><i class="lab la-instagram"></i></a></li>
                            <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div><!-- end copy-right-content -->
                </div><!-- end col-lg-5 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-main-content -->
</div>
<div class="modal fade bd-example-modal-lg" id="modal-detail-kompetisi" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Detail Kompetisi</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="formGroupExampleInput">Judul Kompetisi</label>
                    <input disabled type="text" class="form-control judul-kompetisi" id="formGroupExampleInput"
                        placeholder="Example input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Deskripsi Kompetisi</label>
                    <textarea readonly class="form-control deskripsi-kompetisi" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Persyaratan Peserta</label>
                    <textarea readonly class="form-control persyaratan-peserta" rows="4"></textarea>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="formGroupExampleInput">Hadiah</label>
                        <input readonly type="text" class="form-control hadiah" placeholder="First name">
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput">Biaya Pendaftaran</label>
                        <input readonly type="text" class="form-control biaya-pendaftaran" placeholder="Last name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="formGroupExampleInput">Tanggal Mulai</label>
                        <input readonly type="text" class="form-control tanggal-mulai" placeholder="First name">
                    </div>
                    <div class="col">
                        <label for="formGroupExampleInput">Tanggal Selesai</label>
                        <input readonly type="text" class="form-control tanggal-selesai" placeholder="Last name">
                    </div>
                </div>
                <div class="form-row" style="margin-top:17px;">
                    <div class="col download-poster">

                    </div>
                    <div class="col download-panduan">

                    </div>
                    <div class="col download-surat">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<input hidden type="text" value="{{ Auth::guard('peserta')->user()->id }}" class="auth" />
@endsection
@section('datatabel')
<script type="text/javascript">
    var table;
    $(document).ready(function () {
        $(document).on('change', '.ord', function () {
            console.log(this.value);
            table.ajax.reload(null, false);
        });
        table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            sort: false,
            "pageLength": 5,
            "lengthChange": false,
            "searching": false,
            ajax: {
                url: "{{ route('peserta.aturkompetisi') }}",
                data: function (d) {
                    d.id_auth = $('.auth').val();
                }
            },
            columns: [{
                data: 'id',
                render: function (meta, data, row) {
                    var div = `<div class="col-lg-12 template">
                        <div class="card-item card-item-list" style="margin-top:15px;">
                            <div class="card-img">
                                <a href="hotel-single.html" class="d-block">
                                    <img src={{ asset("poster/` + row.poster + `") }} alt="hotel-img">
                                </a>

                            </div>
                            <div class="card-body">
                                <h3 class="card-title"><a href="hotel-single.html">` + row.judul_kompetisi + `</a>
                                </h3>
                                <div class="card-rating">
                                    <span class="">Deadline kompetisi:</span>
                                    <span class="" style="color: crimson">` + row.tgl_akhir + `</span>
                                </div>
                                <div class="row">
                                <div class="col-sm-6">
                                    <p>
                                        <span class="price__text">Total Hadiah </span><br>
                                        <span class="price__num">Rp.` + row.hadiah + `</span>

                                    </p>
                                </div>
                                <div class="col-sm-6 text-right"> 
                                        <a href="detail/karya/` + row.karya_id + `" class="btn-text">Lihat Karya</a>
                                    
                                </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>`;
                    return div;
                }
            }, ]
        });
        $(document).on('click', '.detail-kompetiri', function () {
            $('.download-poster').empty();
            $('.download-panduan').empty();
            $('.download-surat').empty();
            var data = table.row($(this).parents('tr')).data();
            $('.judul-kompetisi').val(data.judul_kompetisi);
            $('.deskripsi-kompetisi').val(data.deskirpsi_kompetisi);
            $('.persyaratan-peserta').val(data.persyaratan_peserta);
            $('.hadiah').val(data.hadiah);
            $('.biaya-pendaftaran').val(data.biaya_pendaftaran);
            $('.tanggal-mulai').val(data.tgl_mulai);
            $('.tanggal-selesai').val(data.tgl_akhir);
            $('.download-poster').append('<a class="btn btn-sm btn-info" href="/download_poster/' +
                data.poster + '"><i class="fa fa-download"> Download Poster</i></a>');
            $('.download-panduan').append(
                '<a class="btn btn-sm btn-info" href="/download_panduan/' + data.panduan +
                '"><i class="fa fa-download"> Download Panduan</i></a>');
            $('.download-surat').append(
                '<a class="btn btn-sm btn-info" href="/download_surat_pernyataan/' + data
                .surat_pernyataan +
                '"><i class="fa fa-download"> Download Surat Pernyataan</i></a>');
            $('#modal-detail-kompetisi').modal('show');
        })
    });
</script>@endsection


<!--
                
            -->