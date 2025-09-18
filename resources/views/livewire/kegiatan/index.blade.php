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

            <div class="row">
                <div class="col-lg-8">
                    <!-- Events List -->
                    <div class="events-list">

                        @forelse ($kegiatan as $item)
                            <div class="event-item" data-aos="fade-up">
                                <div class="event-date">
                                    <span class="day">{{ date('d', strtotime($item->waktu_mulai)) }}</span>
                                    <span class="month">{{ date('M', strtotime($item->waktu_mulai)) }}</span>
                                    @if ($item->waktu_selesai)
                                        <div class=""><i class="bi bi-arrow-down"></i></div>
                                        <span class="day">{{ date('d', strtotime($item->waktu_selesai)) }}</span>
                                        <span class="month">{{ date('M', strtotime($item->waktu_selesai)) }}</span>
                                    @endif
                                </div>
                                <div class="event-content">
                                    <h3 class="event-title">{{ Str::limit($item->judul, 110, '...') }}</h3>
                                    <div class="event-meta">
                                        <span><i class="bi bi-clock"></i>
                                            {{ date('h:i A', strtotime($item->waktu_mulai)) }}
                                            @if ($item->waktu_selesai)
                                                - {{ date('h:i A', strtotime($item->waktu_selesai)) }}
                                            @endif
                                        </span>
                                        <span><i class="bi bi-geo-alt"></i> {{ $item->tempat_kegiatan }}</span>
                                    </div>
                                    <p class="event-description">
                                        {!! Str::limit($item->konten, '250', '...') !!}
                                    </p>
                                    <a href="{{ url('kegiatan/show') }}" class="btn-event-details">Selengkapnya <i
                                            class="bi bi-arrow-right"></i></a>
                                </div>
                            </div><!-- End Event Item -->
                        @empty
                        @endforelse

                        <!-- Pagination -->
                        <div class="events-pagination" data-aos="fade-up" data-aos-delay="100">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled"><a class="page-link" href="#"><i
                                            class="bi bi-arrow-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="bi bi-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- End Events List -->
                </div>

                <div class="col-lg-4">
                    <!-- Sidebar -->
                    <div class="events-sidebar">
                        <!-- Search Form -->
                        <div class="sidebar-item search-form" data-aos="fade-up">
                            <h4>Pencarian</h4>
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Cari kegiatan...">
                                    <button class="btn" type="submit"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div><!-- End Search Form -->

                        <!-- Categories -->
                        <div class="sidebar-item categories" data-aos="fade-up" data-aos-delay="100">
                            <h4>Kategori Kegiatan</h4>
                            <ul class="list-unstyled">
                                @foreach ($kategori as $item)
                                    <li><a href="#">{{ $item->nama_kategori }}
                                            <span>({{ $item->kegiatan->count() }})</span></a></li>
                                @endforeach
                            </ul>
                        </div><!-- End Categories -->

                    </div><!-- End Sidebar -->
                </div>
            </div>

        </div>

    </section><!-- /Events Extended Section -->

</main>
