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
                            <!-- 1 -->
                            {{-- <div class="col-12 col-md-4 mb-3">
                                <a href="https://setda.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}" class="img-fluid"
                                                width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Sekretariat Daerah</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://setda.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 2 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://setwan.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}" class="img-fluid"
                                                width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Sekretariat Dewan</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://setwan.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 3 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://inspektorat.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}" class="img-fluid"
                                                width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Inspektorat Daerah</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://inspektorat.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 4 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://disdikbud.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Pendidikan dan Kebudayaan</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://disdikbud.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 5 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://dinkes.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Kesehatan</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://dinkes.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 6 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://dinaspupr.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Pekerjaan Umum dan Penataan Ruang</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://dinaspupr.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 7 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://disperkim.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Perumahan, Kawasan Pemukiman dan Pertanahan</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://disperkim.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 8 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.dinsos.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Sosial</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://www.dinsos.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 9 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://www.disnakertrans.mamasakab.go.id"
                                    class="text-decoration-none text-dark" target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Transmigrasi dan Tenaga Kerja</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://www.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 10 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://disdukcapil.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Kependudukan dan Pencatatan Sipil</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://disdukcapil.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 11 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://dpmptsp.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://dpmptsp.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 12 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://disperindag.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Perindustrian, Perdagangan, Koperasi dan UKM</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://disperindag.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 13 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://dispar.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Pariwisata, Kepemudaan dan Olahraga</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://dispar.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 14 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://dlh.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Lingkungan Hidup</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://dlh.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 15 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://dppkb.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Pengendalian Penduduk dan KB</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://dppkb.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 16 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://dpkp.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Pertanian dan Ketahanan Pangan</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://dpkp.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 17 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://disnak.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Peternakan dan Perikanan</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://disnak.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 18 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://dpk.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Perpustakaan dan Kearsipan</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://dpk.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 19 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://satpolpp.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Satuan Polisi Pamong Praja</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://satpolpp.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 20 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://bpbd.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Badan Penanggulangan Bencana Daerah</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://bpbd.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 21 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://bappeda.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Badan Perencanaan Pembangunan Daerah</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://bappeda.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 22 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://bkd.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Badan Kepegawaian dan Pengembangan SDM</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://bkd.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 23 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://bpkad.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Badan Pengelola Keuangan dan Aset Daerah</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://bpkad.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 24 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://kesbangpol.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Badan Kesatuan Bangsa dan Politik</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://kesbangpol.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 25 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://sekretariat-korpri.mamasakab.go.id"
                                    class="text-decoration-none text-dark" target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Sekretariat Korpri</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://sekretariat-korpri.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- 26 -->
                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://ppid.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Pejabat Pengelola Informasi dan Dokumentasi</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://ppid.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div> --}}

                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://mamasa-opd.usbal.xyz" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}" class="img-fluid"
                                                width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Dinas Komunikasi dan Informatika</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://diskominfo.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            {{-- <div class="col-12 col-md-4 mb-3">
                                <a href="https://rsud-mamasa.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>RSUD Kondosapata’ Mamasa</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://rsud-mamasa.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-md-4 mb-3">
                                <a href="https://baznas.mamasakab.go.id" class="text-decoration-none text-dark"
                                    target="_blank">
                                    <div class="device-item shadow-sm rounded p-3 d-flex align-items-center">
                                        <div class="device-icon me-3">
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                class="img-fluid" width="50" alt="">
                                        </div>
                                        <div class="device-info">
                                            <h6>Badan Amil Zakat Nasional</h6>
                                            <small
                                                class="text-muted">{{ Str::limit('https://baznas.mamasakab.go.id', 100) }}</small>
                                        </div>
                                    </div>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
