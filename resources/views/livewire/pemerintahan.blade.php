@section('meta-description', 'Struktur pemerintahan Kabupaten Mamasa — perangkat daerah dan profil penyelenggaraan pemerintahan.')

<main class="main">

    <!-- Page Title -->
    <div class="page-hero">
        <div class="container page-hero__inner">
            <div class="page-hero__text">
                <p class="page-hero__title">Pemerintahan</p>
            </div>
            <nav class="page-hero__crumbs" aria-label="breadcrumb">
                <ol>
                    <li><a href="#">Profil</a></li>
                    <li class="current" aria-current="page">Pemerintahan</li>
                </ol>
            </nav>
        </div>
    </div>

    <section id="pemerintahan" class="privacy section">

        <div class="container" data-aos="fade-up">

            @if ($pemerintahan)
                <!-- Header -->
                <div class="privacy-header" data-aos="fade-up">
                    <div class="header-content">
                        <div class="last-updated">Terahir Diperbarui: {{ $pemerintahan->updated_at->format('d M Y') }}
                        </div>
                        <h1>{{ $pemerintahan->judul }}</h1>
                        <p class="intro-text">{{ $pemerintahan->subjudul }}</p>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="privacy-content" data-aos="fade-up">

                    <!-- Information Collection -->
                    <div class="konten-pemerintahan">
                        {!! $pemerintahan->konten !!}
                    </div>
                </div>
            @else
                <div class="text-center">
                    Data Kosong !!!
                </div>
            @endif
        </div>

    </section><!-- /Privacy Section -->

</main>
