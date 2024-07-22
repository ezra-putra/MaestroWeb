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
                                <a class="nav-link" aria-current="page" href="/">HOME</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    LAYANAN KAMI
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="portfolio.html">PRICE LIST</a></li>
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
        @yield('content')
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
                        <img src="{{ asset('/image/logo.png') }}" width="120" height="60" class="img-fluid">
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
