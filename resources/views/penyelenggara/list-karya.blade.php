@extends('penyelenggara.layouts.master')
@section('content')
<div class="dashboard-content-wrap">
    <div class="dashboard-bread dashboard--bread dashboard-bread-2">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div class="section-heading">
                            <h2 class="sec__title font-size-30 text-white">Daftar</h2>
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
                                                        <th scope="col">Email Peserta</th>
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
                            &copy; Copyright Budayaku 2021. Made with
                            <span class="la la-heart"></span> by <a href="https://instagram.com/budayaku_net">Tim Budayaku</a>
                        </p>
                    </div><!-- end copy-right -->
                </div><!-- end col-lg-7 -->
                
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end dashboard-main-content -->
</div>
<div class="modal fade bd-example-modal-lg" id="detail-karya-modal" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5><b>Detail Karya</b></h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul Karya</label>
                    <input disabled type="email" class="form-control judul_karya" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Embeded</label><BR>
                    <div id="test" class="text-center"></div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi Karya</label>
                    <textarea class="form-control deskripsi" readonly rows="3"></textarea>
                </div>
                <div class="row text-center">
                    <div class="col download-gambar">

                    </div>
                    <div class="col download-berkas-daftar">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
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
                    data: 'email_peserta',
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
                        var option = row.status_juara == null ?
                            '<option value="">Pilih Peringkat</option>' : '<option value="' +
                            row.status_juara + '">Juara ' + row.status_juara + '</option>';
                        option +=
                            '<option value="">Tidak Juara</option> <option value="1">Juara 1</option> <option value="2">Juara 2</option> <option value="3">Juara 3</option> <option value="Lolos Semi Final">Lolos Semi Final</option> <option value="Lolos Final">Lolos Final</option> <option value="Penyisihan">Penyisihan</option> </select>';
                        var select = '<select class="form-control select_peringkat">' + option +
                            '</option>';
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
                method: "POST",
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
        $(document).on('click', '.detail-karya-modal', function () {
            var data = table.row($(this).parents('tr')).data();
            $("#test").empty();
            $('.download-gambar').empty();
            $('.download-berkas-daftar').empty();
            $('.judul_karya').val(data.judul_karya);
            $('.deskripsi').val(data.deskripsi);
            var obj = {
                "video": {
                    "value": data.embeded
                }
            };
            $("#test").html(obj.video.value);
            $('#detail-karya-modal').modal('show');
            $('.download-gambar').append(
                '<a class="btn btn-sm btn-info" href="download/gambar_karya/'+data.gambar_karya+'"><i class="fa fa-download"></i> Download Gambar Karya</a>'
                );
            $('.download-berkas-daftar').append(
                '<a class="btn btn-sm btn-info" href="download/berkas_daftar/'+data.berkas_pendaftaran+'"><i class="fa fa-download"></i> Download Berkas Pendaftara</a>'
                );

        })
    });
</script>
@endsection