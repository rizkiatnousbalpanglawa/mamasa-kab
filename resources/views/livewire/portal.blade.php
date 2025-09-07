<div class="">
    <!-- Background Video -->
    <video autoplay muted loop class="video-bg">
        <source src="{{ asset('front-assets/mamasa-bg.mp4') }}" type="video/mp4">
        Browser anda tidak mendukung video background.
    </video>
    <div class="overlay"></div>

    <!-- Hero Section -->
    <div class="content hero">
        <img src="{{ asset('front-assets/img/logo-mamasa.png') }}" alt="Logo Kabupaten Mamasa" class="mb-3"
            style="width:150px; height:auto;">

        <h1 class="display-6 fw-bold">PEMERINTAH KABUPATEN MAMASA</h1>
        <p class="lead">Informasi | Layanan Publik | Pariwisata | Pengaduan</p>

        <hr class="custom-divider my-4">


        <section id="menu" class="container py-5 text-center">
            <div class="row justify-content-center">

                <div class="col-4 col-md-2 mb-4">
                    <a href="{{ url('/beranda') }}" class="menu-item">
                        <div class="icon-circle">
                            <i class="bi bi-house-door" style="font-size: 2rem; color: white;"></i>
                        </div>
                        <p class="mt-2">Berita</p>
                    </a>
                </div>

                <div class="col-4 col-md-2 mb-4">
                    <a href="#" class="menu-item">
                        <div class="icon-circle">
                            <i class="bi bi-megaphone" style="font-size: 2rem; color: white;"></i>
                        </div>
                        <p class="mt-2">Pengumuman</p>
                    </a>
                </div>

                <div class="col-4 col-md-2 mb-4">
                    <a href="#" class="menu-item">
                        <div class="icon-circle">
                            <i class="bi bi-globe" style="font-size: 2rem; color: white;"></i>
                        </div>
                        <p class="mt-2">Website</p>
                    </a>
                </div>

            </div>
        </section>
    </div>
</div>
