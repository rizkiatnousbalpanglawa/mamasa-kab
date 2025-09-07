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
                        <p class="mt-2">Beranda</p>
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
                    <a href="#" class="menu-item" data-bs-toggle="modal" data-bs-target="#websiteOpd">
                        <div class="icon-circle">
                            <i class="bi bi-globe" style="font-size: 2rem; color: white;"></i>
                        </div>
                        <p class="mt-2">Website</p>
                    </a>

                </div>

            </div>
        </section>
    </div>

    <div class="modal modal-xl fade" id="websiteOpd" tabindex="-1" aria-labelledby="websiteOpdLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Tombol Close -->
                <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>

                <div class="modal-body pt-4">
                    <div class="text-center">
                        <h5 class="fw-bold">Website Organisasi Perangkat Daerah</h5>
                    </div>
                    <hr class="custom-divider-2 my-4">

                    <div class="row my-2">
                        <div class="col-12 col-md-4 mb-3">
                            <a href="#" class="text-decoration-none text-dark">
                                <div class="device-item">
                                    <div class="d-flex align-items-center">
                                        <div class="device-icon">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}" class="img-fluid"
                                                width="50px" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Sekretariat Daerah</h6>
                                            <small>https://setda.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-4 mb-3">
                            <a href="#" class="text-decoration-none text-dark">
                                <div class="device-item">
                                    <div class="d-flex align-items-center">
                                        <div class="device-icon">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}" class="img-fluid"
                                                width="50px" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Sekretariat Dewan</h6>
                                            <small>https://setwan.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-4 mb-3">
                            <a href="#" class="text-decoration-none text-dark">
                                <div class="device-item">
                                    <div class="d-flex align-items-center">
                                        <div class="device-icon">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}" class="img-fluid"
                                                width="50px" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Inspektorat Daerah</h6>
                                            <small>https://inspektorat.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-4 mb-3">
                            <a href="#" class="text-decoration-none text-dark">
                                <div class="device-item">
                                    <div class="d-flex align-items-center">
                                        <div class="device-icon">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}" class="img-fluid"
                                                width="50px" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Pendidikan dan Kebudayaan</h6>
                                            <small>https://disdikbud.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-4 mb-3">
                            <a href="#" class="text-decoration-none text-dark">
                                <div class="device-item">
                                    <div class="d-flex align-items-center">
                                        <div class="device-icon">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50px" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Kesehatan</h6>
                                            <small>https://dinkes.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-12 col-md-4 mb-3">
                            <a href="#" class="text-decoration-none text-dark">
                                <div class="device-item">
                                    <div class="d-flex align-items-center">
                                        <div class="device-icon">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50px" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Pekerjaan Umum dan Penataan Ruang</h6>
                                            <small>https://dinaspupr.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
