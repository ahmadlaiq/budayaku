@extends('layout.master')
@section('title', 'laporan Mahasiswa')
@section('page', 'Laporan Mahasiswa')
@section('content')
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-body box-outline">
            <form action="" method="POST">
                <div class="form-group row">
                    <div class="col-md-4">
                        <label for="">Jenis Laporan</label>
                    </div>
                    <div class="col-md-8">
                        <select name="category" id="category" class="form-control">
                            <option value="LKB">Laporan Kehilangan Barang</option>
                            <option value="LFK">Laporan Fasilitas Kampus</option>
                            <option value="LPB">Laporan Penemuan Barang</option>
                        </select>
                    </div>
                </div>
                <fieldset class="border p-2">
                    <legend style="width: inherit; padding:0 10px;border-bottom:none;">Daftar Pelapor</legend>
                    <div class="table-responsive">
                        <table class="table tabel-striped tabel-bordered table-hover" width="100%" id="tbl">
                          <thead style="background-color: rgba(61, 126, 248, 0.87); color: #ffff;">
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Nama pelapor</th>
                                    <th>Nama Barang</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <script>
                                      $(document).ready(function() {
                                        createTable($('#category').val());
                                      })
                                  </script>
                              </tr>
                          </tbody>
                        </table>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal-detail" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header" style="background-color:rgba(61, 126, 248, 0.87); color: #ffff;">
          <h5 class="modal-title">DETAIL LAPORAN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
           <div class="row">
                <div class="col-md-3">
                    <label for="">No Hp</label>
                </div>
                <div class="col-md-9">
                    <span id="hp"></span>
                </div>
           </div>
           <div class="row">
               <div class="col-md-3">
                   <label for="">Tanggal</label>
               </div>
               <div class="col-md-9">
                   <span id="tgl"></span>
               </div>
           </div>
           <div class="row">
               <div class="col-md-3">
                   <label for="">Keterangan</label>
               </div>
               <div class="col-md-9">
                   <span id="desc"></span>
               </div>
           </div>
        </div>
        <div class="modal-footer float-right">
          <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="fa fa-check-circle"></span> OK</button>
        </div>
      </div>
    </div>
  </div> <!-- ./ End Modal -->
  

<script>
    function createTable(cat) {
        $('#tbl').DataTable({
            "ajax" : "/admin/laporan/table/"+ cat,
            "processing" : true,
            "destroy": true,
            "columns": [
                { "data": "no" },
                { "data": "img" },
                { "data": "pelapor" },
                { "data": "barang"},
                { "data": "status" },
                { "data": "aksi" }
            ]
        })
    }

    $('#category').on('change', function()  {
        createTable($('#category').val());
    })

    function onView(id) {
        $('#modal-detail').modal('show');
        $.ajax({
            type:  "get",
            url: "/admin/laporan/view/" + id,
            dataType: "json",
            success: function(data) {
                $('#hp').text(data.no_hp);
                $('#tgl').text(data.tgl);
                $('#desc').text(data.deskripsi);
            }
        })
    }

    function onApproved(id) {
        $.ajax({
            type: "post",
            url: "/admin/laporan/approved",
            data: {
                 "id" : id, 
                 "_token" : "{{ csrf_token() }}"
                 },
            dataType: "json",
            success: function (resp) {
                alert(resp.msg);
                createTable($('#category').val());
            }, error: function(err) {
                console.log(err)
            }
        })
    }
    
    function onDeclined(id) {
        $.ajax({
            type: "post",
            url: "/admin/laporan/declined",
            data: {
                 "id" : id, 
                 "_token" : "{{ csrf_token() }}"
                 },
            dataType: "json",
            success: function (resp) {
                alert(resp.msg);
                createTable($('#category').val());
            }, error: function(err) {
                console.log(err)
            }
        })
    }
</script>
@endsection
