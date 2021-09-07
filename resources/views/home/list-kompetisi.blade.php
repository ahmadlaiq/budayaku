@foreach($data as $d)
<div class="col-lg-3 responsive-column">
    <div class="card-item blog-card">
        <div class="card-img">
            <img src="{{ asset("poster/".$d->poster) }}" alt="blog-img">
            <div class="card-body">
                <h3 class="card-title line-height-26"><a data-toggle="modal"
                        data-target="#exampleModalCenter{{ $d->id }}" type="button">{{$d->judul_kompetisi}}</a>
                </h3>
                <p class="card-meta">
                    <span class="post__date"> Total Hadiah</span>
                    <span class="post-dot"></span>
                    <span class="post__time">Rp.{{ number_format($d->hadiah,2)}}</span>
                </p>
            </div>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <div class="author-content d-flex align-items-center">
                <div class="author-img">
                    <img src="{{ asset("poster/".$d->poster) }}" alt="testimonial image">
                </div>
                <div class="author-bio">
                    <p href="#" class="author__title">Pemkab Gresik</p>
                </div>
            </div>
        </div>
    </div><!-- end card-item -->
</div><!-- end col-lg-4 -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="exampleModalCenter{{ $d->id }}" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Detail Kompetisi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <label>Judul Kompetisi</label>
                        <h3>{{ $d->judul_kompetisi }}</h3>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Tanggal diBuka</label>
                        <input type="email" readonly value="{{ $d->tgl_mulai }}" class="form-control text-center" id="inputEmail4"
                            placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Tanggal diTutup</label>
                        <input type="text" readonly value="{{ $d->tgl_akhir }}" class="form-control text-center" id="inputPassword4"
                            placeholder="Password">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Biaya Pendaftaran</label>
                        <input type="email" readonly value="Rp. {{ number_format($d->biaya_pendaftaran,2) }}" class="form-control text-center" id="inputEmail4"
                            placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Hadiah Kompetisi</label>
                        <input type="text" readonly value="Rp. {{ number_format($d->hadiah,2) }}" class="form-control text-center" id="inputPassword4"
                            placeholder="Password">
                    </div>
                    <div class="col-sm-12">
                        <label>Deskripsi Kompetisi</label>
                        <textarea readonly class="form-control" rows="7">{{ $d->deskirpsi_kompetisi }}</textarea>
                    </div>
                    <div class="col-sm-12">
                        <label>Persyaratan Peserta</label>
                        <textarea readonly class="form-control" rows="7">{{ $d->persyaratan_peserta }}</textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4">
                        <a class="btn btn-sm btn-info" href="{{ url('download_poster/'.$d->poster) }}"><i
                                class="fa fa-download"> Download Poster</i></a>
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-sm btn-info" href="{{ url('download_panduan/'.$d->panduan) }}"><i
                                class="fa fa-download"> Download Panduan</i></a>
                    </div>
                    <div class="col-sm-4">
                        <a class="btn btn-sm btn-info"
                            href="{{ url('download_surat_pernyataan/'.$d->surat_pernyataan) }}"><i
                                class="fa fa-download">
                                Download Surat Pernyataan</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<div class="col-sm-12 text-center">
    {{ $data->links() }}
</div>