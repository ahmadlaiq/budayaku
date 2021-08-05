@foreach($data as $d)
<div class="col-lg-4 responsive-column">
    <div class="card-item">
        <div class="card-img">
            <a class="d-block">
                <img src="{{ asset("gambar_karya/".$d->gambar_karya) }}" alt="Destination-img">
            </a>
            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title=""
                data-original-title="Save for Later">
                <i class="la la-heart-o"></i>
            </div>
        </div>
        <div class="card-body">
            <h3 class="card-title"><a data-toggle="modal" data-target="#exampleModalCenter{{ $d->id_karya }}"
                    type="button">{{ $d->judul_karya }}</a></h3>
            <p class="card-meta">Kompetisi : {{ $d->judul_kompetisi }}</p>
            <p class="card-rating"> <span class="badge text-white">Pengirim Karya : {{ $d->nama_lengkap }}</span></p>

        </div>
    </div><!-- end card-item -->
</div>
<div class="modal fade" id="exampleModalCenter{{ $d->id_karya }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Detail Karya</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        {!! str_replace('width="560"','width="100%"',$d->link_youtube) !!}
                    </div>
                    <div class="col-sm-12">
                    <label>Judul</label>
                        <h3>{{ $d->judul_karya }}</h3>
                    </div>
                    <div class="col-sm-12">
                    <label>Deskripsi</label>
                       <textarea readonly class="form-control" rows="7">{{ $d->deskripsi }}</textarea>
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