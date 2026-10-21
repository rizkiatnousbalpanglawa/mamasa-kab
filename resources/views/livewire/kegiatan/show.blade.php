@section('meta-title', $kegiatan->judul . ' | Website Resmi PEMKAB Mamasa')
@section('meta-description', \Illuminate\Support\Str::limit(strip_tags($kegiatan->konten), 150))
@section('og-type', 'article')
@section('meta-image', url(\Illuminate\Support\Facades\Storage::url($kegiatan->gambar)))

<main class="main">

    <!-- Page Title -->
    <div class="page-hero">
        <div class="container page-hero__inner">
            <div class="page-hero__text">
                <p class="page-hero__title">Rincian Kegiatan</p>
            </div>
            <nav class="page-hero__crumbs" aria-label="breadcrumb">
                <ol>
                    <li><a href="{{ url('kegiatan') }}"><i class="bi bi-house"></i> Kegiatan</a></li>
                    <li class="current" aria-current="page">Rincian Kegiatan</li>
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
                        <img src="{{ asset(Storage::url($kegiatan->gambar)) }}" alt="{{ $kegiatan->judul }}"
                            class="img-fluid rounded" fetchpriority="high">
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
                        <h1>{{ $kegiatan->judul }}</h1>
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
