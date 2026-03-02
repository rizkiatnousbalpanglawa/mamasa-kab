<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>{{ $title ?? config('app.name') }}</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicons -->
    <link href="{{ asset('front-assets/img/logo.png') }}" rel="icon" />
    <link href="{{ asset('front-assets/img/logo.png') }}" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('front-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front-assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('front-assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('front-assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front-assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{ asset('front-assets/css/main.css') }}" rel="stylesheet" />

    {{-- Open Graph --}}
    <meta property="og:type" content="article">
    <meta property="og:title" content="@yield('meta-title', config('app.name'))">
    <meta property="og:description" content="@yield('meta-description', 'Website Resmi PEMKAB Mamasa')">
    <meta property="og:image" content="@yield('meta-image', asset('default.jpg'))">
    <meta property="og:url" content="@yield('meta-url', url()->current())">
    <meta property="og:site_name" content="Website Resmi PEMKAB Mamasa">

</head>

<body class="index-page">
    <x-navigation-menu />

    {{ $slot }}

    @php
        $today = \Carbon\Carbon::today();
        $statToday = \App\Models\StatistikHarian::where('tanggal', $today)->first();

        $pengunjungHariIni = $statToday->pengunjung ?? 0;
        $hitsHariIni = $statToday->hits ?? 0;

        $totalPengunjung = \App\Models\StatistikHarian::sum('pengunjung');
        $totalHits = \App\Models\StatistikHarian::sum('hits');

        $pengunjungOnline = \App\Models\StatistikOnline::where(
            'last_activity',
            '>=',
            \Carbon\Carbon::now()->subMinutes(5),
        )->count();

        $opd = \App\Models\Identitas::first();

    @endphp

    <footer id="footer" class="footer position-relative light-background">
        <div class="container footer-top">
            <div class="row gy-4 text-center">
                <div class="col-lg-5 footer-about">
                    <a href="{{ url('/') }}" class="logo">
                        <img src="{{ $opd ? asset(Storage::url($opd->image)) : '' }}" class="img-fluid"
                            alt="Logo Website" />

                    </a>
                    <h5 class="mt-3">{{ $opd->nama ?? '' }}</h5>
                    <hr>
                    <div class="footer-contact">
                        {!! $opd->alamat ?? '' !!}
                    </div>
                    <div class="social-links d-flex justify-content-center mt-4">
                        <a href="{{ $opd->twitter ?? '' }}"><i class="bi bi-twitter-x"></i></a>
                        <a href="{{ $opd->facebook ?? '' }}"><i class="bi bi-facebook"></i></a>
                        <a href="{{ $opd->instagram ?? '' }}"><i class="bi bi-instagram"></i></a>
                        <a href="{{ $opd->youtube ?? '' }}"><i class="bi bi-youtube"></i></a>
                        <a href="{{ $opd->tiktok ?? '' }}"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 align-self-center">
                    <div class="statistik">
                        <h5>Statistik</h5>
                        <h1 class="fw-bold"> {{ number_format($totalHits) }}</h1>
                        <div class="">Pengunjung Hari ini: <span class="fw-bold">{{ $pengunjungHariIni }}</span>
                        </div>
                        <div class="">Total Pengunjung: <span class="fw-bold">{{ $totalPengunjung }}</span></div>
                        <div class="">Hits Hari ini: <span class="fw-bold">{{ $hitsHariIni }}</span></div>
                        <div class="">Pengunjung Online: <span class="fw-bold">{{ $pengunjungOnline }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 align-self-center">
                    <iframe class="w-full h-70 border-0 rounded"
                        src="https://www.google.com/maps?q={{ $opd->latitude ?? '' }},{{ $opd->longitude ?? '' }}&hl=id&z=18&output=embed"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>2025</span> <strong class="px-1 sitename">Diskominfosandi</strong> <span>All Rights
                    Reserved</span></p>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('front-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('front-assets/js/main.js') }}"></script>
</body>

</html>
