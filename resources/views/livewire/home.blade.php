<main class="main">
    <section id="hero" class="hero section">
        <div id="carouselExampleIndicators" class="carousel slide shadow overflow-hidden" data-bs-ride="carousel"
            data-aos="fade-up">

            <!-- Indicator (titik navigasi) -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <!-- Isi Carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('front-assets/img/blog/blog-hero-1.webp') }}" class="d-block w-100"
                        alt="Slide 1">
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('front-assets/img/blog/blog-hero-2.webp') }}" class="d-block w-100"
                        alt="Slide 2">
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('front-assets/img/blog/blog-hero-9.webp') }}" class="d-block w-100"
                        alt="Slide 3">
                </div>
            </div>

            <!-- Tombol Navigasi -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Berikutnya</span>
            </button>
        </div>


        <div class="feature-cards-wrapper" data-aos="fade-up" data-aos-delay="300"></div>

        {{-- <div class="upcoming-event" data-aos="fade-up" data-aos-delay="400">
            <div class="container">
                <div class="event-content">
                    <div class="event-date">
                        <span class="day">15</span>
                        <span class="month">NOV</span>
                    </div>
                    <div class="event-info">
                        <h3>Upacara Adat</h3>
                        <p>
                            Ikuti kemeriahan Upacara Adat Mamasa, nikmati tarian, musik
                            tradisional, dan keramahan warga setempat.
                        </p>
                    </div>
                    <div class="event-action">
                        <a href="#" class="btn-event">
                            <i class="bi bi-geo-alt"></i> Lihat Peta
                        </a>
                        <span class="countdown">Mulai dalam 3 Minggu Lagi</span>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>

    <!-- Recent News Section -->
    <section id="recent-news" class="recent-news section">
        <!-- Section Title -->
        <div class="container section-title my-4" data-aos="fade-up">
            <h2>Berita Terbaru</h2>
        </div>
        <!-- End Section Title -->

        <div class="container">
            <!-- Carousel untuk mobile -->
            <div id="newsCarousel" class="carousel slide d-md-none" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <a href="/berita/banjir-luwu-utara" class="text-decoration-none text-dark">
                            <div class="card news-card border-0 shadow-sm h-100">
                                <img src="https://picsum.photos/id/1011/600/400" class="card-img-top" alt="Berita 1">
                                <div class="card-body">
                                    <h6 class="card-title fw-bold">Atasi Banjir, Bupati Luwu Utara Usulkan 5 Program
                                        Prioritas</h6>
                                    <div class="mb-2" style="width:50px; height:3px; background-color:black;"></div>
                                    <p class="card-text text-muted small">
                                        MAKASSAR — Bupati Luwu Utara, Andi Abdullah Rahim menunjukkan keseriusan dalam
                                        menangani banjir…
                                    </p>
                                </div>
                                <div
                                    class="card-footer bg-white border-0 d-flex justify-content-between small text-muted">
                                    <span><i class="bi bi-calendar-event me-1"></i>26 Agu 2025</span>
                                    <span><i class="bi bi-person-circle me-1"></i>Admin</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <a href="/berita/pariwisata-toraja" class="text-decoration-none text-dark">
                            <div class="card news-card border-0 shadow-sm h-100">
                                <img src="https://picsum.photos/id/1015/600/400" class="card-img-top" alt="Berita 2">
                                <div class="card-body">
                                    <h6 class="card-title fw-bold">Toraja Promosikan Wisata Budaya ke Tingkat
                                        Internasional</h6>
                                    <div class="mb-2" style="width:50px; height:3px; background-color:black;"></div>
                                    <p class="card-text text-muted small">
                                        TORAJA — Pemerintah daerah gencar mempromosikan budaya Tongkonan dan upacara
                                        adat ke mancanegara…
                                    </p>
                                </div>
                                <div
                                    class="card-footer bg-white border-0 d-flex justify-content-between small text-muted">
                                    <span><i class="bi bi-calendar-event me-1"></i>28 Agu 2025</span>
                                    <span><i class="bi bi-person-circle me-1"></i>Admin</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <a href="/berita/ekonomi-sulsel" class="text-decoration-none text-dark">
                            <div class="card news-card border-0 shadow-sm h-100">
                                <img src="https://picsum.photos/id/1021/600/400" class="card-img-top" alt="Berita 3">
                                <div class="card-body">
                                    <h6 class="card-title fw-bold">Pertumbuhan Ekonomi Sulsel Naik 5,3% di Kuartal II
                                    </h6>
                                    <div class="mb-2" style="width:50px; height:3px; background-color:black;"></div>
                                    <p class="card-text text-muted small">
                                        MAKASSAR — Badan Pusat Statistik mencatat pertumbuhan ekonomi Sulawesi Selatan
                                        mencapai 5,3%…
                                    </p>
                                </div>
                                <div
                                    class="card-footer bg-white border-0 d-flex justify-content-between small text-muted">
                                    <span><i class="bi bi-calendar-event me-1"></i>30 Agu 2025</span>
                                    <span><i class="bi bi-person-circle me-1"></i>Admin</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Slide 4 -->
                    <div class="carousel-item">
                        <a href="/berita/pendidikan-sulbar" class="text-decoration-none text-dark">
                            <div class="card news-card border-0 shadow-sm h-100">
                                <img src="https://picsum.photos/id/1025/600/400" class="card-img-top" alt="Berita 4">
                                <div class="card-body">
                                    <h6 class="card-title fw-bold">Program Beasiswa Sulbar Jangkau 1.000 Mahasiswa</h6>
                                    <div class="mb-2" style="width:50px; height:3px; background-color:black;"></div>
                                    <p class="card-text text-muted small">
                                        MAMUJU — Pemerintah Sulawesi Barat meluncurkan program beasiswa untuk
                                        meningkatkan akses pendidikan tinggi…
                                    </p>
                                </div>
                                <div
                                    class="card-footer bg-white border-0 d-flex justify-content-between small text-muted">
                                    <span><i class="bi bi-calendar-event me-1"></i>01 Sep 2025</span>
                                    <span><i class="bi bi-person-circle me-1"></i>Admin</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Navigasi carousel -->
                <button class="carousel-control-prev" type="button" data-bs-target="#newsCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#newsCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>

            <!-- Grid untuk desktop -->
            <div class="row d-none d-md-flex g-3">
                <div class="container" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">

                        <div class="col-md-3">
                            <a href="/berita/banjir-luwu-utara" class="text-decoration-none text-dark">
                                <div class="card news-card border-0 shadow-sm h-100">
                                    <img src="https://picsum.photos/id/1011/600/400" class="card-img-top"
                                        alt="Berita 1">
                                    <div class="card-body">
                                        <h6 class="card-title fw-bold">
                                            Atasi Banjir, Bupati Luwu Utara Usulkan 5 Program Prioritas
                                        </h6>
                                        <div class="mb-2" style="width:50px; height:3px; background-color:black;">
                                        </div>
                                        <p class="card-text text-muted small">
                                            MAKASSAR — Bupati Luwu Utara, Andi Abdullah Rahim menunjukkan keseriusan
                                            dalam
                                            menangani
                                            permasalahan banjir dan irigasi…
                                        </p>
                                    </div>
                                    <div
                                        class="card-footer bg-white border-0 d-flex justify-content-between small text-muted">
                                        <span><i class="bi bi-calendar-event me-1"></i>26 Agu 2025</span>
                                        <span><i class="bi bi-person-circle me-1"></i>Admin</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-md-3">
                            <div class="card news-card border-0 shadow-sm h-100">
                                <img src="https://picsum.photos/id/1005/600/400" class="card-img-top" alt="Berita 2">
                                <div class="card-body">
                                    <h6 class="card-title fw-bold">
                                        DPR Bahas RUU Baru Terkait Perlindungan Data Pribadi
                                    </h6>
                                    <div class="mb-2" style="width:50px; height:3px; background-color:black;"></div>
                                    <p class="card-text text-muted small">
                                        JAKARTA — Rancangan Undang-Undang Perlindungan Data Pribadi resmi dibahas dalam
                                        rapat
                                        paripurna DPR hari ini…
                                    </p>
                                </div>
                                <div
                                    class="card-footer bg-white border-0 d-flex justify-content-between small text-muted">
                                    <span><i class="bi bi-calendar-event me-1"></i>25 Agu 2025</span>
                                    <span><i class="bi bi-person-circle me-1"></i>Redaksi</span>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-md-3">
                            <div class="card news-card border-0 shadow-sm h-100">
                                <img src="https://picsum.photos/id/1020/600/400" class="card-img-top" alt="Berita 3">
                                <div class="card-body">
                                    <h6 class="card-title fw-bold">
                                        Startup Lokal Rilis Aplikasi AI untuk UMKM
                                    </h6>
                                    <div class="mb-2" style="width:50px; height:3px; background-color:black;"></div>
                                    <p class="card-text text-muted small">
                                        BANDUNG — Sebuah startup teknologi lokal meluncurkan aplikasi berbasis AI untuk
                                        mendukung pertumbuhan UMKM…
                                    </p>
                                </div>
                                <div
                                    class="card-footer bg-white border-0 d-flex justify-content-between small text-muted">
                                    <span><i class="bi bi-calendar-event me-1"></i>24 Agu 2025</span>
                                    <span><i class="bi bi-person-circle me-1"></i>Reporter</span>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="col-md-3">
                            <div class="card news-card border-0 shadow-sm h-100">
                                <img src="https://picsum.photos/id/1035/600/400" class="card-img-top" alt="Berita 4">
                                <div class="card-body">
                                    <h6 class="card-title fw-bold">
                                        Timnas U-23 Lolos ke Final Piala Asia
                                    </h6>
                                    <div class="mb-2" style="width:50px; height:3px; background-color:black;"></div>
                                    <p class="card-text text-muted small">
                                        DOHA — Timnas Indonesia U-23 berhasil menaklukkan lawan berat di semifinal dan
                                        melaju ke
                                        final Piala Asia…
                                    </p>
                                </div>
                                <div
                                    class="card-footer bg-white border-0 d-flex justify-content-between small text-muted">
                                    <span><i class="bi bi-calendar-event me-1"></i>23 Agu 2025</span>
                                    <span><i class="bi bi-person-circle me-1"></i>Sport</span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </section>
    <!-- /Recent News Section -->

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container my-4" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="about-content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Agenda & Kegiatan</h3>
                        <h2>Jangan Lewatkan Momen Spesial dan Festival Budaya</h2>
                        <p>
                            Temukan jadwal lengkap kegiatan wisata, festival budaya, dan
                            acara lokal yang memeriahkan Mamasa sepanjang tahun.
                        </p>

                        <div class="timeline">
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <h4>15 Nov 2025 - Upacara Adat Mamasa</h4>
                                    <p>
                                        Prosesi budaya dengan tarian tradisional dan musik khas
                                        pegunungan.
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <h4>20 Des 2025 - Festival Kopi Mamasa</h4>
                                    <p>Pameran kopi lokal, demo barista, dan bazar UMKM.</p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <h4>1 Jan 2026 - Pentas Musik Tahun Baru</h4>
                                    <p>
                                        Hiburan musik dan pesta kembang api di alun-alun kota.
                                    </p>
                                </div>
                            </div>

                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-content">
                                    <h4>5 Des 2026 - Festival Tenun & UMKM Mamasa</h4>
                                    <p>
                                        Rayakan karya perajin lokal: demo menenun, bazar produk
                                        UMKM, kopi pegunungan, dan pertunjukan musik tradisi.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 d-none d-md-flex">
                    <div class="about-image" data-aos="zoom-in" data-aos-delay="300">
                        <img src="{{ asset('front-assets/img/tari-mamasa.jpg') }}" alt="Campus"
                            class="img-fluid rounded" />

                        <div class="mission-vision" data-aos="fade-up" data-aos-delay="400"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Section -->

    <!-- Gallery -->
    <section>
        <!-- Section Title -->
        <div class="container section-title my-4" data-aos="fade-up">
            <h2>Galeri Foto</h2>
        </div>
        <!-- End Section Title -->

        <div class="container">
            <div class="row g-1">

                <!-- Foto 1 -->
                <div class="col-6 col-md-3">
                    <div class="gallery-item">
                        <img src="https://picsum.photos/id/1015/400/300"
                            class="img-fluid rounded shadow-sm gallery-img" alt="Foto 1" data-bs-toggle="modal"
                            data-bs-target="#photoModal" data-bs-src="https://picsum.photos/id/1015/1200/800">
                    </div>
                </div>

                <!-- Foto 2 -->
                <div class="col-6 col-md-3">
                    <div class="gallery-item">
                        <img src="https://picsum.photos/id/1025/400/300"
                            class="img-fluid rounded shadow-sm gallery-img" alt="Foto 2" data-bs-toggle="modal"
                            data-bs-target="#photoModal" data-bs-src="https://picsum.photos/id/1025/1200/800">
                    </div>
                </div>

                <!-- Foto 3 -->
                <div class="col-6 col-md-3">
                    <div class="gallery-item">
                        <img src="https://picsum.photos/id/1035/400/300"
                            class="img-fluid rounded shadow-sm gallery-img" alt="Foto 3" data-bs-toggle="modal"
                            data-bs-target="#photoModal" data-bs-src="https://picsum.photos/id/1035/1200/800">
                    </div>
                </div>

                <!-- Foto 4 -->
                <div class="col-6 col-md-3">
                    <div class="gallery-item">
                        <img src="https://picsum.photos/id/1045/400/300"
                            class="img-fluid rounded shadow-sm gallery-img" alt="Foto 4" data-bs-toggle="modal"
                            data-bs-target="#photoModal" data-bs-src="https://picsum.photos/id/1045/1200/800">
                    </div>
                </div>

                <!-- Foto 5 -->
                <div class="col-6 col-md-3">
                    <div class="gallery-item">
                        <img src="https://picsum.photos/id/1055/400/300"
                            class="img-fluid rounded shadow-sm gallery-img" alt="Foto 5" data-bs-toggle="modal"
                            data-bs-target="#photoModal" data-bs-src="https://picsum.photos/id/1055/1200/800">
                    </div>
                </div>

                <!-- Foto 6 -->
                <div class="col-6 col-md-3">
                    <div class="gallery-item">
                        <img src="https://picsum.photos/id/1065/400/300"
                            class="img-fluid rounded shadow-sm gallery-img" alt="Foto 6" data-bs-toggle="modal"
                            data-bs-target="#photoModal" data-bs-src="https://picsum.photos/id/1065/1200/800">
                    </div>
                </div>

                <!-- Foto 7 -->
                <div class="col-6 col-md-3">
                    <div class="gallery-item">
                        <img src="https://picsum.photos/id/1075/400/300"
                            class="img-fluid rounded shadow-sm gallery-img" alt="Foto 7" data-bs-toggle="modal"
                            data-bs-target="#photoModal" data-bs-src="https://picsum.photos/id/1075/1200/800">
                    </div>
                </div>

                <!-- Foto 8 -->
                <div class="col-6 col-md-3">
                    <div class="gallery-item">
                        <img src="https://picsum.photos/400/300?random=8"
                            class="img-fluid rounded shadow-sm gallery-img" alt="Foto 8" data-bs-toggle="modal"
                            data-bs-target="#photoModal" data-bs-src="https://picsum.photos/1200/800?random=8">
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal Foto -->
        <div class="modal fade" id="photoModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-transparent border-0">
                    <div class="modal-body text-center p-0">
                        <img src="" id="modalImage" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
