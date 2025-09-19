<main class="main">

    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Potensi Daerah</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li class="current">Potensi</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="section">
        <div class="container">

            {{-- Filter kategori --}}
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <ul class="potential-filters d-flex flex-wrap justify-content-center gap-2 list-unstyled">
                        {{-- Tombol "Semua" --}}
                        <li wire:click="setFilter(null)"
                            class="cursor-pointer {{ $filterAktif === null ? 'filter-active' : '' }}">
                            Semua
                        </li>

                        {{-- Tombol kategori --}}
                        @foreach ($kategoriPotensi as $kategori)
                            <li wire:click="setFilter({{ $kategori->id }})"
                                class="cursor-pointer {{ $filterAktif === $kategori->id ? 'filter-active' : '' }}">
                                {{ $kategori->nama }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- Grid potensi --}}
            <div class="row gy-4 potential-grid">
                @forelse ($semuaPotensi as $potensi)
                    <div class="col-lg-4 col-md-6 potential-item">
                        <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                            <div class="card-img-container">
                                <img src="{{ asset(Storage::url($potensi->image)) }}" class="card-img-top"
                                    alt="{{ $potensi->nama }}">
                            </div>
                            <div class="card-body">
                                <span class="badge bg-accent mb-2">{{ $potensi->kategori->nama }}</span>
                                <h5 class="card-title fw-bold">{{ $potensi->nama }}</h5>
                                <p class="card-text">{{ Str::limit(strip_tags($potensi->deskripsi), 100, '...') }}
                                </p>
                                <a href="#" class="read-more stretched-link">
                                    Lihat Detail <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-secondary text-center">
                            Data potensi daerah tidak ditemukan.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
</main>
