<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Lambang Daerah</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="#">Profil</a></li>
                    <li class="current">Lambang Daerah</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <section id="lambang" class="privacy section">

        <div class="container" data-aos="fade-up">
            <!-- Header -->
            <div class="privacy-header" data-aos="fade-up">
                <div class="header-content">
                    <div class="last-updated">Terahir Diperbarui: {{ $lambang->updated_at->format('d M Y') }}</div>
                    <h1>{{ $lambang->judul }}</h1>
                    <p class="intro-text">{{ $lambang->subjudul }}</p>
                </div>
            </div>

            <!-- Main Content -->
            <div class="privacy-content" data-aos="fade-up">

                <!-- Information Collection -->
                <div class="content-section ">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset(Storage::url($lambang->image)) }}" class="img-fluid rounded" alt="Lambang"
                            style="max-width: 250px">
                    </div>
                    {!! $lambang->konten !!}
                </div>
            </div>

        </div>

    </section><!-- /Privacy Section -->

</main>
