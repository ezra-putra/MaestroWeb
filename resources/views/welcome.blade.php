@extends('layout.main')
@section('content')
<!-- BANNER -->
<section class="section position-relative"
style="background-image: url({{ asset('/image/welcome-bg.jpg') }}); height: 90vh;">
<div class="image-overlay"></div>
<div class="r-container position-relative w-100 h-100" style="z-index: 2;">
    <div class="d-flex flex-column justify-content-center align-items-center text-center h-100">
        <h1 class="font-2 lh-1 fw-bold">
            MAESTRO <br>
            <span class="accent-color">
                PRODUCTION
            </span>
        </h1>
        <h5 class=" mx-auto accent-color" style="max-width: 768px;">
            SOUND SYSTEM, LIGHTING, MULTIMEDIA, LED VIDEOTRON, GENSET, STAGE DAN RIGGING
        </h5>
    </div>
</div>
</section>

<!-- CINESTER STUDIO -->
<section class="section">
<div class="r-container">
    <div class="d-flex flex-column gap-5">
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="shadow d-flex justify-content-center align-items-center video-container"
                data-title="Video Embedded">
                <iframe width="900" height="500" src="https://www.youtube.com/embed/_nsFVCBGJ8Q?autoplay=1&loop=1&playlist=_nsFVCBGJ8Q&mute=1"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col col-lg-5 mb-3">
                <div class="d-flex flex-column ps-lg-4">
                    <h5 class="lh-1 ls-2 fw-bold font-1"><span class="accent-color">MAESTRO</span> PRODUCTION</h5>
                    <p>
                        Melayani Acara Seperti Corporate, Concert, Wedding, Orchestra, Gatherings, Religious, Educational, Sports,
                        Sound, Led Lighting, Genset, Stage Effect, Kain, Ac, Rigging, Multimedia, Streaming, Backdrop, Internet, Bodyguard, Animation.
                    </p>
                   <div class="row row-cols-1 row-cols-lg-2 mt-1">
                        <div class="col mb-3">
                            <div class="d-flex flex-column text-center">
                                <h3 class="accent-color font-1 fw-bold m-0">380+</h3>
                                <p class="font-1">TOTAL EVENT</p>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-column text-center">
                                <h3 class="accent-color font-1 fw-bold m-0">29+</h3>
                                <p class="font-1">TAHUN PENGALAMAN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- SERVICES -->
<section class="section position-relative bg-secondary-dark">
<div class="texture-overlay"></div>
<div class="r-container position-relative" style="z-index: 2;">
    <div class="d-flex flex-column text-center gap-3">
        <h5 class="accent-color lh-1 ls-2 fw-bold font-1">Layanan Kami</h5>
        <h3 class="font-1 lh-1 fw-bold">Apa Saja Layanan yang Kami Tawarkan?</h3>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 text-start w-100 mt-3">
            <div class="col mb-3">
                <div class="d-flex flex-row gap-3">
                    <span class="accent-color" style="font-size:3rem;"><i
                            class="fa-solid fa-microphone"></i></span>
                    <div>
                        <h5 class="font-1 fw-bold">SOUND SYSTEM</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                            nec ullamcorper mattis
                        </p>
                        <div class="ms-4">
                            <a href="/price-list/soundsystem" class="btn btn-outline-warning">
                                <span style="color: white">Cek Harga&nbsp;&nbsp;</span>
                                <i class="fa fa-arrow-right" style="color: white" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="d-flex flex-row gap-3">
                    <span class="accent-color" style="font-size:3rem;"><i
                            class="fa-solid fa-lightbulb"></i></i></span>
                    <div>
                        <h5 class="font-1 fw-bold">LIGHTING</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                            nec ullamcorper mattis
                        </p>
                        <div class="ms-4">
                            <a href="/price-list/lighting" class="btn btn-outline-warning">
                                <span style="color: white">Cek Harga&nbsp;&nbsp;</span>
                                <i class="fa fa-arrow-right" style="color: white" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="d-flex flex-row gap-3">
                    <span class="accent-color" style="font-size:3rem;"><i
                            class="fa-solid fa-film"></i></span>
                    <div>
                        <h5 class="font-1 fw-bold">MULTIMEDIA</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                            nec ullamcorper mattis
                        </p>
                        <div class="ms-4">
                            <a href="#" class="btn btn-outline-warning">
                                <span style="color: white">Cek Harga&nbsp;&nbsp;</span>
                                <i class="fa fa-arrow-right" style="color: white" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="d-flex flex-row gap-3">
                    <span class="accent-color" style="font-size:3rem;"><i
                            class="fa-solid fa-object-group"></i></span>
                    <div>
                        <h5 class="font-1 fw-bold">LED VIDEOTRON</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                            nec ullamcorper mattis
                        </p>
                        <div class="ms-4">
                            <a href="#" class="btn btn-outline-warning">
                                <span style="color: white">Cek Harga&nbsp;&nbsp;</span>
                                <i class="fa fa-arrow-right" style="color: white" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 text-start w-100 justify-content-center">
            <div class="col mb-3">
                <div class="d-flex flex-row gap-3">
                    <span class="accent-color" style="font-size:3rem;"><i
                            class="fa-solid fa-bolt"></i></span>
                    <div>
                        <h5 class="font-1 fw-bold">GENSET</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                            nec ullamcorper mattis
                        </p>
                        <div class="ms-4">
                            <a href="#" class="btn btn-outline-warning">
                                <span style="color: white">Cek Harga&nbsp;&nbsp;</span>
                                <i class="fa fa-arrow-right" style="color: white" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="d-flex flex-row gap-3">
                    <span class="accent-color" style="font-size:3rem;"><i
                            class="fa-solid fa-window-minimize"></i></i></span>
                    <div>
                        <h5 class="font-1 fw-bold">STAGE</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                            nec ullamcorper mattis
                        </p>
                        <div class="ms-4">
                            <a href="#" class="btn btn-outline-warning">
                                <span style="color: white">Cek Harga&nbsp;&nbsp;</span>
                                <i class="fa fa-arrow-right" style="color: white" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="d-flex flex-row gap-3">
                    <span class="accent-color" style="font-size:3rem;"><i
                            class="fa-solid fa-reorder"></i></span>
                    <div>
                        <h5 class="font-1 fw-bold">RIGING</h5>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                            nec ullamcorper mattis
                        </p>
                        <div class="ms-4">
                            <a href="#" class="btn btn-outline-warning">
                                <span style="color: white">Cek Harga&nbsp;&nbsp;</span>
                                <i class="fa fa-arrow-right" style="color: white" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- PORTFOLIO -->
<section class="section bg-secondary-dark">
<div class="r-container">
    <div class="d-flex flex-column ">
        <h5 class="accent-color lh-1 ls-2 fw-bold font-1">PORTFOLIO</h5>
        <h3 class="font-2 lh-1 fw-bold">FEATURED EVENT</h3>
        <div class="my-5">
            <div class="swiper-video">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="shadow d-flex justify-content-center align-items-center video-container"
                            data-url="https://youtube.com/embed/H2ae_UfY9fg"
                            data-title="Video Embedded">
                            <div>
                                <button class="bg-transparent shadow accent-color video-btn video-btn-small" onclick="playVideo()">
                                    <i class="fa-solid fa-play" style="margin-left: 5px;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shadow d-flex justify-content-center align-items-center video-container"
                            style="background-image: url(image/dummy-img-900x600.jpg);"
                            data-url="https://youtube.com/embed/wDbOKuHmLrY"
                            data-title="Video Embedded">
                            <div class="img-overlay"></div>
                            <div>
                                <button class="bg-transparent shadow accent-color video-btn video-btn-small" onclick="playVideo()">
                                    <i class="fa-solid fa-play" style="margin-left: 5px;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shadow d-flex justify-content-center align-items-center video-container"
                            style="background-image: url(image/dummy-img-900x600.jpg);"
                            data-url="https://www.youtube.com/embed/FK2RaJ1EfA8?autoplay=1"
                            data-title="Video Embedded">
                            <div class="img-overlay"></div>
                            <div>
                                <button
                                    class="bg-transparent shadow accent-color video-btn video-btn-small">
                                    <i class="fa-solid fa-play" style="margin-left: 5px;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STORY -->
<section class="section">
<div class="r-container">
    <div class="row row-cols-1 row-cols-lg-2">
        <div class="col col-lg-5">
            <div class="d-flex flex-column gap-3">
                <h5 class="accent-color lh-1 ls-2 fw-bold font-1">STORY</h5>
                <h3 class="font-2 lh-1 fw-bold">STORY BEHIND CINESTAR</h3>
                <p>
                    Aliquam ex lacus, venenatis id finibus ut, scelerisque at felis. Nulla facilisi. Sed
                    fringilla enim consectetur cursus euismod. Sed vel magna in ex malesuada rhoncus ac a
                    turpis.
                </p>
                <p>
                    ” Vivamus quam lectus, facilisis a massa facilisis, imperdiet maximus nunc. Integer ut
                    metus eget lectus imperdiet pulvinar in ac urna “
                </p>
                <div>
                    <h5 class="accent-color font-2 m-0">DYAS KARDINAL</h5>
                    <span>CEO OF CINESTAR</span>
                </div>
            </div>
        </div>
        <div class="col col-lg-7">
            <img src="image/dummy-img-900x600.jpg" alt="" class="img-fluid">
        </div>
    </div>
</div>
</section>
@endsection

