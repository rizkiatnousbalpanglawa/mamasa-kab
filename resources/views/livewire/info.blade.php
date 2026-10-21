@section('meta-description', 'Informasi resmi Pemerintah Kabupaten Mamasa untuk masyarakat.')

<main class="main">

    <!-- Page Title -->
    <div class="page-hero">
        <div class="container page-hero__inner">
            <div class="page-hero__text">
                <h1 class="page-hero__title">Informasi</h1>
            </div>
            <nav class="page-hero__crumbs" aria-label="breadcrumb">
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
                    <h2>Informasi</h2>
                    <p class="intro-text">Halaman ini menyajikan berbagai informasi resmi dari Pemerintah Kabupaten
                        Mamasa</p>
                </div>
            </div>

            <div class="container my-4 my-lg-5">
                <div class="row custom-content-area">
                    <div class="col-lg-4 mb-4">
                        <button
                            class="btn w-100 d-lg-none mb-3 filter-mobile-toggle {{ $filterOpen ? 'is-open' : '' }}"
                            type="button"
                            wire:click="$toggle('filterOpen')"
                            aria-expanded="{{ $filterOpen ? 'true' : 'false' }}">
                            <i class="bi bi-funnel me-2"></i>Filter
                            @if ($this->hasActiveFilter)
                                <span class="filter-dot"></span>
                            @endif
                            <i class="bi bi-chevron-down ms-auto filter-mobile-toggle__chev"></i>
                        </button>

                        <div class="filter-collapse {{ $filterOpen ? 'is-open' : '' }}">
                            <aside class="filter-sidebar">
                                <div class="filter-sidebar__header">
                                    <h5 class="filter-sidebar__title"><i class="bi bi-funnel me-2"></i>Filter</h5>
                                    @if ($this->hasActiveFilter)
                                        <button type="button" wire:click="resetFilter" class="filter-sidebar__reset">
                                            Hapus
                                        </button>
                                    @endif
                                </div>

                                <div class="filter-sidebar__body">
                                    <div class="filter-group">
                                        <label for="filter-kategori" class="filter-group__label">Kategori</label>
                                        <select id="filter-kategori" class="filter-select" wire:model.live="kategoriTerpilih">
                                            <option value="">Semua</option>
                                            @foreach ($kategori as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="filter-group">
                                        <label for="filter-tahun" class="filter-group__label">Tahun</label>
                                        <select id="filter-tahun" class="filter-select" wire:model.live="tahun">
                                            <option value="">Semua</option>
                                            @foreach ($tahunInformasi->sortDesc() as $thn)
                                                <option value="{{ $thn }}">{{ $thn }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <p class="filter-sidebar__meta">{{ $info->total() }} dokumen</p>
                                </div>
                            </aside>
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

                        <!-- Pagination 2 Section -->
                        <section id="pagination-2" class="pagination-2 section">

                            <div class="container">

                                {{ $info->links() }}
                            </div>

                        </section>

                    </div>
                </div>

            </div>
        </div>

        </div>

    </section><!-- /Privacy Section -->

</main>
