<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->
        <link rel="stylesheet" href="{{ asset('welcome-assets/css/style.css') }}">
    <title>Maestro - Homepage</title>
</head>

<body>
    <!-- Scripts -->
    <script src="{{ asset('welcome-assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('welcome-assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('welcome-assets/js/vendor/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('welcome-assets/js/script.js') }}"></script>
    <script src="{{ asset('welcome-assets/js/swiper-script.js') }}"></script>
    <script src="{{ asset('welcome-assets/js/submit-form.js') }}"></script>
    <script src="{{ asset('welcome-assets/js/vendor/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('welcome-assets/js/video_embedded.js') }}"></script>

    <!-- Header -->
    <section class="sticky-top py-2 bg-dark-color">
        <div class="r-container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="logo-container">
                        <img src="{{ asset('/image/logo.png') }}" class="img-fluid">
                    </div>


                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <div class="collapse navbar-collapse pt-lg-0 pt-3" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3 ">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">HOME</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    LAYANAN KAMI
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item accent-color" href="portfolio.html">PRICE LIST</a></li>
                                    <li><a class="dropdown-item" href="project_detail.html">CARA PEMESANAN</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">HUBUNGI KAMI</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <!-- End Of Header -->

    <main class="text-white">
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
                    <h5 class="accent-color lh-1 ls-2 fw-bold font-1">SERVICES</h5>
                    <h3 class="font-2 lh-1 fw-bold">WHAT SERVICE WE OFFER ?</h3>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 text-start w-100">
                        <div class="col mb-3">
                            <div class="d-flex flex-row gap-3">
                                <span class="accent-color" style="font-size:3rem;"><i
                                        class="fa-solid fa-microphone"></i></span>
                                <div>
                                    <h5 class="font-2 fw-bold">SOUND SYSTEM</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                        nec ullamcorper mattis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-row gap-3">
                                <span class="accent-color" style="font-size:3rem;"><i
                                        class="fa-solid fa-lightbulb"></i></i></span>
                                <div>
                                    <h5 class="font-2 fw-bold">LIGHTING</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                        nec ullamcorper mattis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-row gap-3">
                                <span class="accent-color" style="font-size:3rem;"><i
                                        class="fa-solid fa-film"></i></span>
                                <div>
                                    <h5 class="font-2 fw-bold">MULTIMEDIA</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                        nec ullamcorper mattis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-row gap-3">
                                <span class="accent-color" style="font-size:3rem;"><i
                                        class="fa-solid fa-object-group"></i></span>
                                <div>
                                    <h5 class="font-2 fw-bold">LED VIDEOTRON</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                        nec ullamcorper mattis</p>
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
                                    <h5 class="font-2 fw-bold">GENSET</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                        nec ullamcorper mattis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-row gap-3">
                                <span class="accent-color" style="font-size:3rem;"><i
                                        class="fa-solid fa-window-minimize"></i></i></span>
                                <div>
                                    <h5 class="font-2 fw-bold">STAGE</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                        nec ullamcorper mattis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-row gap-3">
                                <span class="accent-color" style="font-size:3rem;"><i
                                        class="fa-solid fa-reorder"></i></span>
                                <div>
                                    <h5 class="font-2 fw-bold">RIGING</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus
                                        nec ullamcorper mattis</p>
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
    </main>

    <footer class="text-white">
        <section class="section py-5 border-top border-2">
            <div class="r-container">
                <div class="d-flex flex-column justify-content-center align-items-center text-center">
                    <h3 class="font-2 mb-3">SUDAH SIAP MEMBUAT EVENT ? AYO MEMBUAT EVENT BERSAMA KAMI!</h3>
                    <div class="col">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="fa-solid fa-phone accent-color"></i>
                                    +62 878-8482-9063
                                    <br>
                                    +62 838-4914-3559
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="fa-solid fa-location-dot accent-color"></i>
                                    BARATA JAYA III/77 SURABAYA, JAWA TIMUR
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="d-flex align-items-center gap-3">
                                    <i class="fa-solid fa-envelope accent-color"></i>
                                    productionmaestro726@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row flex-wrap gap-4 justify-content-center">
                        <a href="https://www.instagram.com/maestroproduction?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="blank" class="font-2 link-social">INSTAGRAM</a>
                        <a href="https://www.youtube.com" class="font-2 link-social" target="blank">YOUTUBE</a>
                        <a href="https://wa.me/6287884829063/?text=Hai%20Maestro,%20aku%20mau%20bikin%20event%20nih!" class="font-2 link-social" target="blank">WHATSAPP ADMIN 1</a>
                        <a href="https://wa.me/6283849143559/?text=Hai%20Maestro,%20aku%20mau%20bikin%20event%20nih!" class="font-2 link-social" target="blank">WHATSAPP ADMIN 2</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="py-3 position-relative bg-secondary-dark">
            <div class="texture-overlay"></div>
            <div class="r-container position-relative" style="z-index: 2;">
                <div
                    class="d-flex flex-lg-row flex-column text-center gap-3 justify-content-between align-items-center">
                    <div class="logo-container">
                        <img src="{{ asset('/image/logo.png') }}" alt="" class="img-fluid">
                    </div>
                    <span>
                       MAESTRO PRODUCTION
                    </span>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('welcome-assets/js/vendor/fslightbox.js') }}"></script>
    <script src="{{ asset('welcome-assets/js/masonry.js') }}"></script>
    <script>
        function playVideo() {
            const videoContainer = document.querySelector('.video-container');
            const videoUrl = videoContainer.getAttribute('data-url');

            videoContainer.innerHTML = `
                <iframe width="900" height="500" src="${videoUrl}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            `;
        }
    </script>
</body>

</html>
