@extends('penyelenggara.layouts.master')
@section('content')
<div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard--bread dashboard-bread-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-30 text-white">Buat Kompetisi</h2>
                        </div>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="breadcrumb-list text-right">
                        <ul class="list-items">
                            <li><a href="index.html" class="text-white">Home</a></li>
                            <li>Dashboard</li>
                            <li>Daftar Karya</li>
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
                            <h3 class="title">Daftar Karya {{ $kompetisi->judul_kompetisi }}</h3>
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
                                                        <th scope="col">Nama Peserta</th>
                                                        <th scope="col">Judul Karya</th>
                                                        <th scope="col">Pilih Sebagai Juara</th>
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
<input type="hidden" value="{{ $kompetisi->id }}" class="id_komp" />
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
                url: "{{ route('list_karya.dataDT') }}",
                data: function (d) {
                    d.id = $('.id_komp').val();
                }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    className: 'text-center'
                },
                {
                    data: 'nama_lengkap',
                    className: 'text-center'
                },
                {
                    data: 'judul_karya',
                    className: 'text-center'
                },
                {
                    data: 'judul_karya',
                    className: 'text-center',
                    render: function (meta, data, row) {
                        var option = row.status_juara == null ? '<option value="">Pilih Peringkat</option>' : '<option value="'+ row.status_juara +'">Juara '+row.status_juara+'</option>';
                        option +=  '<option value="1">Juara 1</option> <option value="2">Juara 2</option> <option value="3">Juara 3</option> </select>';
                        var select = '<select class="form-control select_peringkat">'+option+'</option>';
                        return select
                    }
                },
                {
                    data: 'action',
                    className: 'text-center'
                },
            ]
        });
        $(document).on('change', '.select_peringkat', function () {
            var data = table.row($(this).parents('tr')).data();
            $.ajax({
                url: "{{ route('set_juara') }}",
                method:"POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    id_karya: data.id_karya,
                    kompetisi_id: data.kompetisi_id,
                    peringkat: this.value,
                },
                success: function (dataResult) {
                    dataResult = JSON.parse(dataResult);
                    if (dataResult.statusCode == '200') {
                        alert("Peringkat berhasil disetting");
                        table.ajax.reload(null, false);
                    } else {
                        alert("Peringkat Sudah Terpakai");
                        table.ajax.reload(null, false);
                    }

                }
            });
        })
    });
</script>
@endsection