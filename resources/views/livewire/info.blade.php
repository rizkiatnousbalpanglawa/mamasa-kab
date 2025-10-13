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

        <div class="container">
            <!-- Header -->
            <div class="privacy-header">
                <div class="header-content">
                    <h1>Informasi</h1>
                    <p class="intro-text">Halaman ini menyajikan berbagai informasi resmi dari Pemerintah Kabupaten
                        Mamasa</p>
                </div>
            </div>

            <div class="container my-4 my-lg-5">
                <div class="row custom-content-area">
                    <div class="col-lg-4 mb-4">
                        <div class="card shadow-sm border-0 rounded-4">
                            <div class="card-body p-4">
                                <h5 class="fw-bold mb-4 d-flex align-items-center"><i class="bi bi-gear fs-5 me-2"></i>
                                    Filter</h5>

                                <div class="mb-3">
                                    <label for="filter-kategori" class="form-label fw-semibold">Kategori</label>
                                    <select id="filter-kategori" class="form-select" wire:model.live='kategoriTerpilih'>
                                        <option value="">Semua</option>
                                        @foreach ($kategori as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label for="filter-tahun" class="form-label fw-semibold">Tahun</label>
                                    <select id="filter-tahun" class="form-select">
                                        <option value="semua">Semua</option>
                                        {{-- Praktik terbaik adalah menyiapkan daftar tahun ini di Controller --}}
                                        @php
                                            $uniqueYears = $info
                                                ->map(function ($item) {
                                                    return $item->waktu_informasi->format('Y');
                                                })
                                                ->unique()
                                                ->sortDesc();
                                        @endphp
                                        @foreach ($uniqueYears as $tahun)
                                            <option value="{{ $tahun }}">{{ $tahun }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- <button id="apply-filter-btn" class="btn btn-dark w-100 py-2 filter-btn">Terapkan
                                    Filter</button> --}}
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="mb-4">
                            <div class="input-group shadow-sm overflow-hidden search-bar">
                                <span class="input-group-text bg-white border-0 ps-3"><i
                                        class="bi bi-search"></i></span>
                                <input type="text" id="search-input"
                                    class="form-control bg-white border-0 shadow-none"
                                    placeholder="Cari judul dokumen..." wire:model.live.debounce.300ms="pencarian">
                            </div>
                        </div>

                        <div class="list-wrapper">
                            @forelse ($info as $item)
                                <a href="{{ route('informasi.view', $item->id) }}" target="_blank"
                                    rel="noopener noreferrer" class="info-list-item text-decoration-none"
                                    data-kategori="{{ $item->kategori->id }}"
                                    data-tahun="{{ $item->waktu_informasi->format('Y') }}">

                                    <div class="info-icon-wrapper flex-shrink-0">
                                        <i class="bi bi-file-earmark-text"></i>
                                    </div>

                                    <div class="info-details-wrapper flex-grow-1 mx-3">
                                        <div class="d-flex align-items-center mb-1">
                                            <h6 class="info-title mb-0 me-3">{{ $item->judul }}</h6>
                                            <span class="info-badge">{{ $item->kategori->nama_kategori }}</span>
                                        </div>
                                        <p class="info-subtitle mb-0">
                                            {{ Str::limit($item->deskripsi ?? 'Klik untuk detail selengkapnya', 70, '...') }}
                                        </p>
                                        <div class="d-block d-sm-none">
                                            <span class="info-views"><i class="bi bi-eye me-1"></i>{{ $item->views }}
                                            </span> |
                                            <span class="info-date">
                                                {{ $item->waktu_informasi->format('d M Y') }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="info-meta-wrapper flex-shrink-0 text-end d-none d-sm-block">
                                        <div class="info-views"><i class="bi bi-eye me-1"></i>{{ $item->views }}</div>
                                        <div class="info-date">
                                            {{ $item->waktu_informasi->format('d M Y') }}
                                        </div>
                                    </div>

                                </a>
                            @empty
                                <div class="alert alert-secondary text-center">
                                    Tidak ada informasi yang ditemukan!.
                                </div>
                            @endforelse

                            {{-- Pesan ini akan muncul jika filter/pencarian tidak menemukan hasil --}}
                            <div id="no-results-message" class="alert alert-warning text-center" style="display: none;">
                                Dokumen yang Anda cari tidak ditemukan.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Privacy Section -->

</main>
