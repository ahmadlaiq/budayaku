@foreach($data as $d)
<div class="col-lg-4 responsive-column">
    <div class="card-item">
        <div class="card-img">
            <a href="tour-details.html" class="d-block">
                <img src="{{ asset("gambar_karya/".$d->gambar_karya) }}" alt="Destination-img">
            </a>
            <div class="add-to-wishlist icon-element" data-toggle="tooltip" data-placement="top" title=""
                data-original-title="Save for Later">
                <i class="la la-heart-o"></i>
            </div>
        </div>
        <div class="card-body">
            <h3 class="card-title"><a href="tour-details.html">{{ $d->judul_karya }}</a></h3>
            <p class="card-meta">Kompetisi : {{ $d->judul_kompetisi }}</p>
            <p class="card-rating"> <span class="badge text-white">Pengirim Karya : {{ $d->nama_lengkap }}</span></p>
           
        </div>
    </div><!-- end card-item -->
</div>
@endforeach
<div class="col-sm-12 text-center">
    {{ $data->links() }}
</div>