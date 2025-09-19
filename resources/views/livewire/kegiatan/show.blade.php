<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Rincian Kegiatan</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('kegiatan') }}">Kegiatan</a></li>
                    <li class="current">Rincian Kegiatan</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Event Section -->
    <section id="event" class="event section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row justify-content-between">
                <div class="col-lg-7">
                    <div class="event-image mb-4" data-aos="fade-up">
                        <img src="{{ asset('front-assets/img/education/events-9.webp') }}" alt="Event"
                            class="img-fluid rounded">
                    </div>

                    <div class="event-meta mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="meta-item">
                                    <i class="bi bi-calendar-date"></i>
                                    <span>{{ $kegiatan->waktu_mulai->format('d-M-Y') }}</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="meta-item">
                                    <i class="bi bi-clock"></i>
                                    <span>{{ $kegiatan->waktu_mulai->format('H:i') }} WITA</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="meta-item">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>{{ $kegiatan->tempat_kegiatan }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="event-content" data-aos="fade-up" data-aos-delay="200">
                        <h2>{{ $kegiatan->judul }}</h2>
                        {!! $kegiatan->konten !!}


                    </div>


                </div>
                <div class="col-lg-5">
                    <div class="event-sidebar">

                        <div class="sidebar-widget related-events" data-aos="fade-left" data-aos-delay="400">
                            <h3>Kegiatan Lainnya</h3>
                            @foreach ($kegiatanLain as $item)
                                <a href="{{ route('kegiatan.detail', $item->slug) }}">
                                    <div class="related-event-item">
                                        <div class="related-event-date">
                                            <span class="day">{{ $item->waktu_mulai->format('d') }}</span>
                                            <span class="month">{{ $item->waktu_mulai->format('M') }}</span>
                                        </div>
                                        <div class="related-event-info">
                                            <h4>{{ Str::limit($item->judul, 40, '...') }}</h4>
                                            <p><i class="bi bi-geo-alt"></i> {{ $item->tempat_kegiatan }}</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


        </div>

        </div>

    </section><!-- /Event Section -->

</main>
