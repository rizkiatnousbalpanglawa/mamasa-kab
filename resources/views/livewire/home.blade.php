<main class="main">
    <section id="hero" class="hero section">
        <div id="carouselIndicators" class="carousel slide shadow overflow-hidden" data-bs-ride="carousel"
            data-aos="fade-up">

            <div class="carousel-indicators">
                @foreach ($carousels as $index => $item)
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="{{ $index }}"
                        class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}"
                        aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>

            <!-- Carousel Items -->
            <div class="carousel-inner">
                @foreach ($carousels as $index => $item)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ asset(Storage::url($item->image)) }}" class="d-block w-100"
                            alt="Slide {{ $index + 1 }}">
                    </div>
                @endforeach
            </div>

            <!-- Tombol Navigasi -->
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <div class="feature-cards-wrapper" data-aos="fade-up" data-aos-delay="300"></div>

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
                    @foreach ($berita as $item)
                        <div class="carousel-item active">
                            <a href="{{ route('berita.detail', $item->slug) }}" class="text-decoration-none text-dark">
                                <div class="card news-card border-0 shadow-sm h-100">
                                    <img src="{{ asset(Storage::url($item->gambar)) }}" class="card-img-top"
                                        alt="Berita 1">
                                    <div class="card-body">
                                        <h6 class="card-title fw-bold">{{ $item->judul }}</h6>
                                        <div class="mb-2" style="width:50px; height:3px; background-color:black;">
                                        </div>
                                        <p class="card-text text-muted small">
                                            {{ Str::limit(strip_tags($item->konten), 100, '...') }}
                                        </p>
                                    </div>
                                    <div
                                        class="card-footer bg-white border-0 d-flex justify-content-between small text-muted">
                                        <span><i class="bi bi-calendar-event me-1"></i>
                                            {{ date('d M Y', strtotime($item->tanggal)) }} </span>
                                        <span><i class="bi bi-person-circle me-1"></i>{{ $item->penulis->nama }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

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

                        @foreach ($berita as $item)
                            <div class="col-md-3">
                                <a href="{{ route('berita.detail', $item->slug) }}"
                                    class="text-decoration-none text-dark">
                                    <div class="card news-card border-0 shadow-sm h-100">
                                        <img src="{{ asset(Storage::url($item->gambar)) }}" class="card-img-top"
                                            alt="Berita 1">
                                        <div class="card-body">
                                            <h6 class="card-title fw-bold">
                                                {{ $item->judul }}
                                            </h6>
                                            <div class="mb-2" style="width:50px; height:3px; background-color:black;">
                                            </div>
                                            <p class="card-text text-muted small">
                                                {{ Str::limit(strip_tags($item->konten), 100, '...') }}
                                            </p>
                                        </div>
                                        <div
                                            class="card-footer bg-white border-0 d-flex justify-content-between small text-muted">
                                            <span><i
                                                    class="bi bi-calendar-event me-1"></i>{{ date('d M Y', strtotime($item->tanggal)) }}</span>
                                            <span><i
                                                    class="bi bi-person-circle me-1"></i>{{ $item->penulis->nama }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>


    </section>
    <!-- /Recent News Section -->

    <!-- Gallery -->
    <section>
        <!-- Section Title -->
        <div class="container section-title my-4" data-aos="fade-up">
            <h2>Galeri Foto</h2>
        </div>
        <!-- End Section Title -->

        <div class="container">
            <div class="row g-1 mb-5">

                <!-- Foto 1 -->
                @forelse ($galeri as $item)
                    <div class="col-6 col-md-3">
                        <div class="gallery-item">
                            <img src="{{ asset(Storage::url($item->image)) }}"
                                class="img-fluid rounded shadow-sm gallery-img" alt="Foto 1" data-bs-toggle="modal"
                                data-bs-target="#photoModal" data-bs-src="{{ asset(Storage::url($item->image)) }}">
                        </div>
                    </div>
                @empty
                @endforelse

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
