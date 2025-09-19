<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Kegiatan</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li class="current">Kegiatan</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Events Extended Section -->
    <section id="events-extended" class="events-extended section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            {{-- 👇 Tambahkan class pembungkus di sini --}}
            <div class="custom-content-area">
                <div class="row">
                    {{-- Kolom Utama untuk Daftar Kegiatan --}}
                    <div class="col-lg-8">
                        @forelse ($kegiatan as $item)
                            <div class="card event-card shadow-sm mb-4" data-aos="fade-up">
                                <div class="card-body p-0 d-flex">

                                    {{-- Bagian Tanggal (Sebelah Kiri) --}}
                                    <div class="event-date">
                                        <span class="day">{{ $item->waktu_mulai->format('d') }}</span>
                                        <span class="month">{{ $item->waktu_mulai->format('M') }}</span>
                                        @if ($item->waktu_selesai && !$item->waktu_mulai->isSameDay($item->waktu_selesai))
                                            <div class="date-separator"><i class="bi bi-arrow-down"></i></div>
                                            <span class="day">{{ $item->waktu_selesai->format('d') }}</span>
                                            <span class="month">{{ $item->waktu_selesai->format('M') }}</span>
                                        @endif
                                    </div>

                                    {{-- Bagian Konten (Sebelah Kanan) --}}
                                    <div class="event-content">
                                        <h3 class="event-title">
                                            <a
                                                href="{{ route('kegiatan.detail', $item->slug) }}">{{ Str::limit($item->judul, 100, '...') }}</a>
                                        </h3>
                                        <div class="event-meta">
                                            <span>
                                                <i class="bi bi-clock"></i>
                                                {{ $item->waktu_mulai->format('H:i') }}
                                                @if ($item->waktu_selesai && !$item->waktu_mulai->isSameDay($item->waktu_selesai))
                                                    {{ $item->waktu_selesai->format('H:i') }}
                                                @endif
                                                WITA
                                            </span>
                                            <span><i class="bi bi-geo-alt"></i> {{ $item->tempat_kegiatan }}</span>
                                        </div>
                                        <p class="event-description">
                                            {{ Str::limit(strip_tags($item->konten ?? ''), 100, '...') }}
                                        </p>
                                        <a href="{{ route('kegiatan.detail', $item->slug) }}"
                                            class="read-more">Selengkapnya
                                            <i class="bi bi-arrow-right"></i></a>
                                    </div>

                                </div>
                            </div>
                        @empty
                            <div class="alert alert-secondary text-center">Belum ada kegiatan yang dijadwalkan.</div>
                        @endforelse

                        {{-- Pagination --}}
                        <nav class="events-pagination mt-4" data-aos="fade-up">
                            {{ $kegiatan->links() }}
                        </nav>
                    </div>

                    {{-- Kolom Sidebar --}}
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-card card shadow-sm mb-4" data-aos="fade-up">
                                <div class="card-body">
                                    <h4 class="sidebar-title">Pencarian</h4>
                                    <form action="" method="GET">
                                        <div class="input-group">
                                            <input type="text" name="search" class="form-control"
                                                placeholder="Cari kegiatan..." value="{{ request('search') }}">
                                            <button class="btn btn-dark-blue" type="submit"><i
                                                    class="bi bi-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-card card shadow-sm" data-aos="fade-up" data-aos-delay="100">
                                <div class="card-body">
                                    <h4 class="sidebar-title">Kategori Kegiatan</h4>
                                    <ul class="list-unstyled category-list">
                                        @foreach ($kategori as $item)
                                            <li>
                                                <a href=""
                                                    class="d-flex justify-content-between align-items-center">
                                                    <span>{{ $item->nama_kategori }}</span>
                                                    <span
                                                        class="badge bg-light text-dark rounded-pill">{{ $item->kegiatan_count ?? $item->kegiatan->count() }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /Events Extended Section -->

</main>
