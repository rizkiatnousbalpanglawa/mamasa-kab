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

                    <div class="container">
                        <div class="row">

                            <!-- 1. Sekretariat Daerah -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://setda.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}" alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Sekretariat Daerah</h6>
                                            <small class="text-muted">https://setda.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 2. Sekretariat Dewan -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://setwan.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}" alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Sekretariat Dewan</h6>
                                            <small class="text-muted">https://setwan.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 3. Inspektorat Daerah -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://inspektorat.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}" alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Inspektorat Daerah</h6>
                                            <small class="text-muted">https://inspektorat.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 4. Dinas Pendidikan dan Kebudayaan -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://disdikbud.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}" alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Pendidikan dan Kebudayaan</h6>
                                            <small class="text-muted">https://disdikbud.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 5. Dinas Kesehatan -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://dinkes.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}" alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Kesehatan</h6>
                                            <small class="text-muted">https://dinkes.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 6. Dinas Pekerjaan Umum dan Penataan Ruang -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://dinaspupr.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}" alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Pekerjaan Umum dan Penataan Ruang</h6>
                                            <small class="text-muted">https://dinaspupr.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 7. Dinas Perumahan, Kawasan Pemukiman dan Pertanahan -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://disperkim.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}" alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Perumahan, Kawasan Pemukiman dan Pertanahan
                                            </h6>
                                            <small class="text-muted">https://disperkim.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 8. Dinas Sosial -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.dinsos.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Sosial</h6>
                                            <small class="text-muted">https://www.dinsos.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 9. Dinas Transmigrasi dan Tenaga Kerja -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.disnakertrans.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">DISNAKER</h6>
                                            <small class="text-muted">https://www.disnakertrans.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 10. Dinas Pertanian -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.distan.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Pertanian</h6>
                                            <small class="text-muted">https://www.distan.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 11. Dinas Perikanan -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.disper.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Perikanan</h6>
                                            <small class="text-muted">https://www.disper.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 12. Dinas Pangan -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.dispan.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Pangan</h6>
                                            <small class="text-muted">https://www.dispan.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 13. Dinas Pengendalian Penduduk, KB, Pemberdayaan Perempuan dan Perlindungan Anak -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.dppkbp3a.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Pengendalian Penduduk, KB, Pemberdayaan
                                                Perempuan dan Perlindungan Anak</h6>
                                            <small class="text-muted">https://www.dppkbp3a.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 14. Dinas Lingkungan Hidup dan Kehutanan -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.dlhk.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Lingkungan Hidup dan Kehutanan</h6>
                                            <small class="text-muted">https://www.dlhk.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 15. Dinas Kependudukan dan Catatan Sipil -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.disdukcapil.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Kependudukan dan Catatan Sipil</h6>
                                            <small class="text-muted">https://www.disdukcapil.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 16. Dinas Pemberdayaan Masyarakat dan Pemerintah Desa -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.dispemdes.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Pemberdayaan Masyarakat dan Pemerintah Desa
                                            </h6>
                                            <small class="text-muted">https://www.dispemdes.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 17. Dinas Perhubungan -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.dishub.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Perhubungan</h6>
                                            <small class="text-muted">https://www.dishub.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 18. Dinas Komunikasi, Informatika dan Persandian -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.diskominfosandi.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Komunikasi, Informatika dan Persandian</h6>
                                            <small
                                                class="text-muted">https://www.diskominfosandi.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 19. Dinas Koperasi, UMKM, Perindustrian dan Perdagangan -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.diskuperindag.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Koperasi, UMKM, Perindustrian dan
                                                Perdagangan</h6>
                                            <small class="text-muted">https://www.diskuperindag.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 20. Dinas Penanaman Modal dan PTSP -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.dpmtsp.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Penanaman Modal dan PTSP</h6>
                                            <small class="text-muted">https://www.dpmtsp.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 21. Dinas Pariwisata, Kepemudaan dan Olahraga -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.disparpora.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Pariwisata, Kepemudaan dan Olahraga</h6>
                                            <small class="text-muted">https://www.disparpora.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 22. Dinas Kearsipan dan Perpustakaan Daerah -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.dkapd.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Dinas Kearsipan dan Perpustakaan Daerah</h6>
                                            <small class="text-muted">https://www.dkapd.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 23. Bappeda (Badan Perencanaan Pembangunan Daerah) -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.bapelitbangda.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Bappeda</h6>
                                            <small class="text-muted">https://www.bapelitbangda.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 24. Badan Pengelolaan Keuangan Daerah -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.bpkd.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Badan Pengelolaan Keuangan Daerah</h6>
                                            <small class="text-muted">https://www.bpkd.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 25. Badan Pendapatan Daerah -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.bapenda.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Badan Pendapatan Daerah</h6>
                                            <small class="text-muted">https://www.bapenda.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 26. Badan Kepegawaian, Pendidikan dan Pelatihan -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.bkpp.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Badan Kepegawaian, Pendidikan dan Pelatihan</h6>
                                            <small class="text-muted">https://www.bkpp.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 27. Badan Penanggulangan Bencana -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.bpbd.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Badan Penanggulangan Bencana</h6>
                                            <small class="text-muted">https://www.bpbd.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 28. Badan Kesbangpol -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.kesbangpol.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Badan Kesbangpol</h6>
                                            <small class="text-muted">https://www.kesbangpol.mamasakab.go.id</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 29. Satuan Polisi Pamong Praja -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.satpolpp.mamasakab.go.id" target="_blank"
                                    class="text-decoration-none text-dark">
                                    <div class="device-item shadow-sm p-3 rounded-4 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo OPD">
                                        </div>
                                        <div class="device-info">
                                            <h6 class="fw-bold mb-1">Satuan Polisi Pamong Praja</h6>
                                            <small class="text-muted">https://www.satpolpp.mamasakab.go.id</small>
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
</div>
