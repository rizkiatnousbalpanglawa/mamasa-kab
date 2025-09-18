<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Berita</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li class="current">Berita</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- News Hero Section -->
    <section id="news-hero" class="news-hero section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-4">
                <!-- Main Content Area -->
                <div class="col-lg-8">
                    <div class="row g-4">
                        @forelse ($berita as $item)
                            <div class="col-md-6">
                                <article class="secondary-post" data-aos="fade-up">
                                    <div class="post-image">
                                        <img src="{{ asset(Storage::url($item->gambar)) }}" alt="Post"
                                            class="img-fluid">
                                    </div>
                                    <div class="post-content">
                                        <div class="post-meta">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="small text-secondary">
                                                        <i class="bi bi-calendar"></i>
                                                        {{ date('d M Y', strtotime($item->tanggal)) }}
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="small text-secondary">
                                                        <i class="bi bi-eye"></i>
                                                        {{ $item->views }} kali dilihat
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="post-title">
                                            <a href="{{ route('berita.detail', $item->slug) }}">
                                                {{ Str::limit($item->judul, 100, '...') }}
                                            </a>
                                        </h3>
                                        <div class="post-author">
                                            <span>by</span>
                                            <a href="#">{{ $item->penulis->nama }}</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div><!-- End Main Content Area -->

                <!-- Sidebar with Tabs -->
                <div class="col-lg-4">
                    <div class="news-tabs" data-aos="fade-up" data-aos-delay="200">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#trending"
                                    type="button">Terpopuler</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#latest"
                                    type="button">Terbaru</button>
                            </li>
                        </ul>

                        <div class="tab-content">

                            <!-- Trending News Tab -->
                            <div class="tab-pane fade show active" id="trending">
                                @forelse ($terpopuler as $item)
                                    <article class="tab-post">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4">
                                                <img src="{{ asset(Storage::url($item->gambar)) }}" alt="Post"
                                                    class="img-fluid">
                                            </div>
                                            <div class="col-8">
                                                <div class="post-content">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="small text-secondary">
                                                                <i class="bi bi-calendar"></i>
                                                                {{ date('d-m-Y', strtotime($item->tanggal)) }}
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="small text-secondary">
                                                                <i class="bi bi-eye"></i>
                                                                {{ $item->views }} kali
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4 class="post-title">
                                                        <a
                                                            href="{{ route('berita.detail', $item->slug) }}">{{ Str::limit($item->judul, 100, '...') }}</a>
                                                    </h4>
                                                    <div class="post-author">by <a
                                                            href="#">{{ $item->penulis->nama }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                @empty
                                @endforelse
                            </div>

                            <!-- Latest News Tab -->
                            <div class="tab-pane fade" id="latest">
                                @forelse ($terbaru as $item)
                                    <article class="tab-post">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-4">
                                                <img src="{{ asset(Storage::url($item->gambar)) }}" alt="Post"
                                                    class="img-fluid">
                                            </div>
                                            <div class="col-8">
                                                <div class="post-content">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="small text-secondary">
                                                                <i class="bi bi-calendar"></i>
                                                                {{ date('d-m-Y', strtotime($item->tanggal)) }}
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="small text-secondary">
                                                                <i class="bi bi-eye"></i>
                                                                {{ $item->views }} kali
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4 class="post-title">
                                                        <a href="{{ route('berita.detail', $item->slug) }}">
                                                            {{ Str::limit($item->judul, 100, '...') }}
                                                        </a>
                                                    </h4>
                                                    <div class="post-author">by <a
                                                            href="#">{{ $item->penulis->nama }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /News Hero Section -->

    <!-- Pagination 2 Section -->
    <section id="pagination-2" class="pagination-2 section">

        <div class="container">
            <nav class="d-flex justify-content-center" aria-label="Page navigation">
                <ul>
                    <li>
                        <a href="#" aria-label="Previous page">
                            <i class="bi bi-arrow-left"></i>
                            <span class="d-none d-sm-inline">Previous</span>
                        </a>
                    </li>

                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="ellipsis">...</li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>

                    <li>
                        <a href="#" aria-label="Next page">
                            <span class="d-none d-sm-inline">Next</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </section><!-- /Pagination 2 Section -->

</main>
