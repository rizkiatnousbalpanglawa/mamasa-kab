@section('meta-title', $berita->judul)

@section('meta-description',
    \Illuminate\Support\Str::limit(strip_tags($berita->konten), 150)
)

@section('meta-image',
    url(\Illuminate\Support\Facades\Storage::url($berita->gambar))
)

@section('meta-url', url()->current())

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Berita Lengkap</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('berita') }}">Berita</a></li>
                    <li class="current">Detail</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Blog Details Section -->
    <section id="blog-details" class="blog-details section">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <article class="article">
                        <div class="article-header">
                            <div class="meta-categories" data-aos="fade-up">
                                <a href="{{ url('berita/kategori/' . $berita->kategori->slug) }}" class="category">{{ $berita->kategori->nama_kategori }}</a>
                            </div>

                            <h2 data-aos="fade-up" data-aos-delay="100">
                                {{ $berita->judul }}
                            </h2>

                            <div class="article-meta" data-aos="fade-up" data-aos-delay="200">
                                <div class="author">
                                    <img src="{{ !empty($berita->penulis->foto) ? asset(Storage::url($berita->penulis->foto)) : asset('front-assets/img/person/person-m-6.webp') }}"
                                        alt="Author" class="author-img">
                                    <div class="author-info">
                                        <h4>{{ $berita->penulis->nama }}</h4>
                                        {{-- <span>UI/UX Design Lead</span> --}}
                                    </div>
                                </div>
                                <div class="post-info">
                                    <span><i
                                            class="bi bi-calendar4-week"></i>{{ date('d M Y', strtotime($berita->tanggal)) }}</span>
                                    <span><i class="bi bi-eye"></i> {{ $berita->views }} kali dibaca</span>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4" data-aos="zoom-in">
                            <img src="{{ asset(Storage::url($berita->gambar)) }}" alt="{{ $berita->judul }}"
                                class="img-fluid rounded">
                        </div>


                        <div class="article-content">
                            <div class="content-section" id="introduction" data-aos="fade-up">
                                {!! $berita->konten !!}
                            </div>
                        </div>

                        <div class="article-footer" data-aos="fade-up">
                            <div class="share-article">
                                <h4>Bagikan artikel ini</h4>
                                <div class="share-buttons">
                             
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                        onclick="window.open(this.href,'facebook-share','width=600,height=400'); return false;"
                                        class="share-button facebook">
                                        <i class="bi bi-facebook"></i>
                                        <span>Bagikan di Facebook</span>
                                    </a>
                                 
                                </div>
                            </div>

                        </div>

                    </article>
                </div>
            </div>

        </div>
    </section><!-- /Blog Details Section -->

</main>
