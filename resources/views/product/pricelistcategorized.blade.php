@extends('layout.main')
@section('content')
<section class="section">
    <div class="r-container">
        <div class="d-flex flex-column text-center gap-3">
            <h5 class="accent-color lh-1 ls-2 fw-bold font-1 mb-1">PRODUK YANG KAMI TAWARKAN</h5>
            <p>
                Kami menyediakan Sound System, Lighting, Multimedia, LED Videotron, Genset, Stage, Rigging, dan lain-lain.
            </p>
            <div class="row row-cols-1 row-cols-lg-3 text-start">
                @foreach ($product as $p)
                <div class="col mb-3">
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="{{ asset("upload/product/$p->id/".$p->image) }}" alt="pic" class="img-fluid" width="300" height="400">
                        </div>
                        <div class="d-flex flex-column gap-2">
                            <h5 class="font-1 fw-bold fs-4 m-0">{{ $p->name }}</h5>
                            <span class="accent-color font-1 fw-bold">Harga Sewa</span>
                            <p>
                                @currency($p->price)
                            </p>
                            <div>
                                <a href="#"
                                    class="px-4 py-2 btn button accent-color button-outline rounded-0 fw-bold font-1">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
