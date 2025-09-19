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
                    <div class="last-updated">Terahir diperbarui:
                        {{ date('d M Y H:i A', strtotime($info->last()->updated_at)) }}</div>
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
                                        @foreach ($kategori as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Pilihan Tahun -->
                                <div class="mb-3">
                                    <label for="tahun" class="form-label fw-semibold">Tahun</label>
                                    <select id="tahun" class="form-select shadow-sm border-0">
                                        <option value="">Semua</option>
                                        @foreach ($info->unique(fn($item) => date('Y', strtotime($item->waktu_informasi))) as $item)
                                            @php
                                                $tahun = date('Y', strtotime($item->waktu_informasi));
                                            @endphp
                                            <option value="{{ $tahun }}">{{ $tahun }}</option>
                                        @endforeach
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

                            {{-- Looping through the information items --}}
                            @forelse ($info as $item)
                                <div class="col">

                                    <div
                                        class="card info-card info-card-hover shadow-sm border-0 rounded-4 h-100 position-relative">
                                        <div class="card-body d-flex flex-column">

                                            <div class="mb-2 d-flex align-items-center justify-content-between">
                                                <span
                                                    class="badge bg-accent">{{ $item->kategori->nama_kategori }}</span>
                                                <small class="text-muted">
                                                    <i class="bi bi-calendar-event me-1"></i>

                                                    {{ $item->waktu_informasi->format('d M Y') }}
                                                </small>
                                            </div>

                                            <a href="{{ route('informasi.view', $item->id) }}" target="_blank"
                                                rel="noopener noreferrer" class="stretched-link">
                                                <h5 class="fw-bold mb-1 text-dark">
                                                    {{ Str::limit($item->judul, 50, '...') }}</h5>
                                            </a>

                                            @if (!empty($item->deskripsi))
                                                <p class="text-muted small mb-2">
                                                    {{ Str::limit($item->deskripsi, 100, '...') }}
                                                </p>
                                            @endif


                                            <div class="d-flex align-items-center justify-content-between mt-auto">
                                                <span class="text-dark-blue fw-semibold small">
                                                    <i class="bi bi-file-earmark-text me-1"></i> Lihat Dokumen
                                                </span>
                                                <small class="text-muted">
                                                    <i class="bi bi-eye me-1"></i>{{ $item->views }}
                                                </small>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <div class="alert alert-secondary text-center" role="alert">
                                        Belum ada informasi yang tersedia saat ini.
                                    </div>
                                </div>
                            @endforelse

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Privacy Section -->


</main>
