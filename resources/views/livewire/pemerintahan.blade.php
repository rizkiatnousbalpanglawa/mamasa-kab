<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Pemerintahan</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="#">Profil</a></li>
                    <li class="current">Pemerintahan</li>
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
