@section('meta-description', 'Lambang daerah Kabupaten Mamasa — makna dan filosofi setiap unsur lambang.')

<main class="main">

    <!-- Page Title -->
    <div class="page-hero">
        <div class="container page-hero__inner">
            <div class="page-hero__text">
                <p class="page-hero__title">Lambang Daerah</p>
            </div>
            <nav class="page-hero__crumbs" aria-label="breadcrumb">
                <ol>
                    <li><a href="#">Profil</a></li>
                    <li class="current" aria-current="page">Lambang Daerah</li>
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
                        <img src="{{ asset(Storage::url($lambang->image)) }}" class="img-fluid rounded" alt="{{ $lambang->judul ?? 'Lambang Daerah Kabupaten Mamasa' }}"
                            style="max-width: 250px">
                    </div>
                    {!! $lambang->konten !!}
                </div>
            </div>

        </div>

    </section><!-- /Privacy Section -->

</main>
