@section('meta-description', 'Sejarah Kabupaten Mamasa — perjalanan pembentukan dan perkembangan daerah.')

<main class="main">

    <!-- Page Title -->
    <div class="page-hero">
        <div class="container page-hero__inner">
            <div class="page-hero__text">
                <p class="page-hero__title">Sejarah</p>
            </div>
            <nav class="page-hero__crumbs" aria-label="breadcrumb">
                <ol>
                    <li><a href="#">Profil</a></li>
                    <li class="current" aria-current="page">Sejarah</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <section id="sejarah" class="privacy section">

        <div class="container" data-aos="fade-up">
            <!-- Header -->
            <div class="privacy-header mb-4 pb-2" data-aos="fade-up">
                <div class="header-content">
                    <div class="last-updated mb-2">Terahir Diperbarui: {{ $sejarah->updated_at->format('d M Y') }}</div>
                    <h1 class="mb-2">{{ $sejarah->judul }}</h1>
                    <p class="intro-text">{{ $sejarah->subjudul }}</p>
                </div>
            </div>

            <!-- Main Content -->
            <div class="privacy-content" data-aos="fade-up">

                <!-- Information Collection -->
                <div class="content-section">
                    {!! $sejarah->konten !!}
                </div>
            </div>

        </div>

    </section><!-- /Privacy Section -->


</main>
