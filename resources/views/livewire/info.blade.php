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

                                <button class="btn btn-primary w-100 rounded-pill shadow-sm">Terapkan Filter</button>
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
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h5 class="fw-bold mb-0">Pengumuman Beasiswa Daerah</h5>
                                            <span class="badge bg-info text-dark">Pengumuman</span>
                                        </div>
                                        <p class="text-muted small mb-2"><i class="bi bi-calendar-event"></i> 15 Januari
                                            2025</p>
                                        <div class="text-end">
                                            <a href="/storage/pdf/beasiswa.pdf" target="_blank"
                                                class="btn btn-outline-primary btn-sm rounded-pill">
                                                📄 Lihat PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card PDF -->
                            <div class="col">
                                <div class="card info-card shadow-sm border-0 rounded-4">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h5 class="fw-bold mb-0">Laporan Kegiatan Gotong Royong</h5>
                                            <span class="badge bg-success">Laporan</span>
                                        </div>
                                        <p class="text-muted small mb-2"><i class="bi bi-calendar-event"></i> 20
                                            Februari 2025</p>
                                        <div class="text-end">
                                            <a href="/storage/pdf/gotong_royong.pdf" target="_blank"
                                                class="btn btn-outline-success btn-sm rounded-pill">
                                                📄 Lihat PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card PDF -->
                            <div class="col">
                                <div class="card info-card shadow-sm border-0 rounded-4">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h5 class="fw-bold mb-0">Update Infrastruktur Jalan</h5>
                                            <span class="badge bg-warning text-dark">Kegiatan</span>
                                        </div>
                                        <p class="text-muted small mb-2"><i class="bi bi-calendar-event"></i> 10 Maret
                                            2024</p>
                                        <div class="text-end">
                                            <a href="/storage/pdf/infrastruktur.pdf" target="_blank"
                                                class="btn btn-outline-warning btn-sm rounded-pill">
                                                📄 Lihat PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- CSS tambahan -->
            <style>
                .info-card {
                    transition: all 0.3s ease;
                    border-left: 4px solid transparent;
                }

                .info-card:hover {
                    transform: translateY(-5px) scale(1.02);
                    border-left: 4px solid #0d6efd;
                    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
                }
            </style>

            <!-- Bootstrap Icons -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

        </div>

    </section><!-- /Privacy Section -->


</main>
