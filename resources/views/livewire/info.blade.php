<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Informasi</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li class="current">Informasi</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <section id="sejarah" class="privacy section">

        <div class="container" data-aos="fade-up">
            <!-- Header -->
            <div class="privacy-header" data-aos="fade-up">
                <div class="header-content">
                    <div class="last-updated">Terahir diperbarui: February 27, 2025</div>
                    <h1>Informasi</h1>
                    <p class="intro-text">Halaman ini menyajikan berbagai informasi resmi dari Pemerintah Kabupaten
                        Mamasa</p>
                </div>
            </div>

            <div class="container my-4">
                <div class="row">
                    <!-- Filter Sidebar -->
                    <div class="col-lg-4 mb-3">
                        <div class="card shadow-sm border-0 rounded-4">
                            <div class="card-body">
                                <h5 class="card-title fw-bold mb-4">⚙️ Filter</h5>

                                <!-- Pilihan Kategori -->
                                <div class="mb-3">
                                    <label for="kategori" class="form-label fw-semibold">Kategori</label>
                                    <select id="kategori" class="form-select shadow-sm border-0">
                                        <option value="">Semua</option>
                                        <option value="pengumuman">Pengumuman</option>
                                        <option value="laporan">Realisasi Anggaran</option>
                                        <option value="kegiatan">Peraturan Daerah</option>
                                        <option value="kegiatan">Peraturan Bupati</option>
                                        <option value="kegiatan">Instruksi Bupati</option>
                                        <option value="kegiatan">Surat Edaran</option>
                                    </select>
                                </div>

                                <!-- Pilihan Tahun -->
                                <div class="mb-3">
                                    <label for="tahun" class="form-label fw-semibold">Tahun</label>
                                    <select id="tahun" class="form-select shadow-sm border-0">
                                        <option value="">Semua</option>
                                        <option value="2025">2025</option>
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                    </select>
                                </div>

                                <button class="btn btn-accent w-100 rounded-pill shadow-sm">Terapkan Filter</button>
                            </div>
                        </div>
                    </div>

                    <!-- Daftar Informasi -->
                    <div class="col-lg-8">
                        <!-- Search Bar -->
                        <div class="mb-4">
                            <div class="input-group shadow-sm rounded-pill overflow-hidden">
                                <span class="input-group-text bg-light border-0"><i class="bi bi-search"></i></span>
                                <input type="text" id="search" class="form-control border-0"
                                    placeholder="Cari judul dokumen...">
                            </div>
                        </div>

                        <div class="row row-cols-1 g-3" id="pdfList">

                            <!-- Card PDF -->
                            <div class="col">
                                <div class="card info-card shadow-sm border-0 rounded-4">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <p class="text-muted small mb-2 d-flex align-items-center ">

                                                <span class="badge bg-accent me-2">Pengumuman</span>
                                                |
                                                <i class="ms-2 me-1 bi bi-calendar-event"></i> 20 Maret 2024

                                            </p>
                                            <h5 class="fw-bold mb-0">Pengumuman hasil tes PPPK</h5>
                                        </div>

                                        <a href="/storage/pdf/infrastruktur.pdf" target="_blank" class="text-dark-blue">
                                            Lihat <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card PDF -->
                            <div class="col">
                                <div class="card info-card shadow-sm border-0 rounded-4">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <p class="text-muted small mb-2 d-flex align-items-center ">

                                                <span class="badge bg-accent me-2">Realisasi
                                                    Anggaran</span>
                                                |
                                                <i class="ms-2 me-1 bi bi-calendar-event"></i> 20 Maret 2024

                                            </p>
                                            <h5 class="fw-bold mb-0">Laporan Realisasi Anggaran 2024</h5>
                                        </div>

                                        <a href="/storage/pdf/infrastruktur.pdf" target="_blank" class="text-dark-blue">
                                            Lihat <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Card PDF -->
                            <div class="col">
                                <div class="card info-card shadow-sm border-0 rounded-4">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <p class="text-muted small mb-2 d-flex align-items-center ">

                                                <span class="badge bg-accent me-2">Kegiatan</span> |
                                                <i class="ms-2 me-1 bi bi-calendar-event"></i> 10 Maret 2024

                                            </p>
                                            <h5 class="fw-bold mb-0">Update Infrastruktur Jalan</h5>
                                        </div>

                                        <a href="/storage/pdf/infrastruktur.pdf" target="_blank" class="text-dark-blue">
                                            Lihat <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Privacy Section -->


</main>
