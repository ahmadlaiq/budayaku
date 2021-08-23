@extends('penyelenggara.layouts.master')
@section('content')
<div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard--bread dashboard-bread-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-30 text-white">Pengumuman Pemenang Kompetisi</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="index.html" class="text-white">Home</a></li>
                            <li>Dashboard</li>
                            <li>Pengumuman Pemenang Kompetisi</li>
                        </ul>
                    </div><!-- end breadcrumb-list -->
                </div><!-- end col-lg-6 -->
            </div><!-- end row -->
        </div>
    </div><!-- end dashboard-bread -->
    <div class="dashboard-main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-box">
                        <div class="form-title-wrap">
                            <h3 class="title">Pengumuman Pemenang Kompetisi</h3>
                        </div>
                        <div class="form-content">
                            <div class="contact-form-action">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table class="yajra-datatable table table-bordered table-sm">
                                                <thead>
                                                    <tr class="text-center">
                                                        <th scope="col">No</th>
                                                        <th scope="col">Nama Kompetisi</th>
                                                        <th scope="col">Peserta Juara</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->

            <div class="border-top mt-5"></div>
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="copy-right padding-top-30px">
                        <p class="copy__desc">
                            &copy; Copyright Budayaku 2021. Made with
                            <span class="la la-heart"></span> by <a href="https://instagram.com/budayaku_net">Tim Budayaku</a>
                        </p>
                    </div><!-- end copy-right -->
                </div><!-- end col-lg-7 -->
                
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-main-content -->
</div>
@endsection
@section('datatabel')
<script type="text/javascript">
    var table;
    $(document).ready(function () {
    table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        sort: false,
        ajax: {
            url: "{{ route('penyelenggara.pengumuman') }}",
            data: function (d) {
                d.id = $('.id_komp').val();
            }
        },
        columns: [{
                data: 'DT_RowIndex',
                className: 'text-center'
            },
            {
                data: 'judul_kompetisi',
                className: 'text-center'
            },
            {
                data: 'detail_juara',
                className: 'text-center',
                render: function (meta, data, row) {
                    var table = '';
                    var body = '';
                    for (let i = 0; i < row.detail_juara.length; i++) {
                        body = body + '<tr><td>' + row.detail_juara[i]['judul_karya'] + '</td><td>' + row.detail_juara[i]['nama_lengkap'] + '</td><td>' + row.detail_juara[i]['status_juara'] + '</td></tr>';
                    }
                    table ='<table class="table table-bordered table-sm"><thead class="tablw-info"><tr><th>Judul Karya</th><th>Nama Peserta</th><th>Juara</th></tr></thead><tbody>' +body + '</tbody></table>';
                    return table;
                }
            },
            {
                data: 'action',
                className: 'text-center'
            },

        ]
    });
    });
</script>
@endsection