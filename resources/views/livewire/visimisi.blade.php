<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Visi & Misi</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="#">Profil</a></li>
                    <li class="current">Visi & Misi</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <section id="" class="privacy section">

        <div class="container" data-aos="fade-up">
            <!-- Header -->
            <div class="privacy-header mb-4 pb-0" data-aos="fade-up">
                <div class="header-content">
                    <div class="text-secondary"> <span class="me-3">
                            <i class="bi bi-calendar"></i> {{ $visiMisi->updated_at->format('d M Y') }}
                        </span>
                        <span>
                            <i class="bi bi-eye"></i> {{ $visiMisi->views }} kali dibaca
                        </span>
                    </div>
                    <h1>Visi & Misi</h1>
                </div>
            </div>

            <!-- Main Content -->
            <div class="privacy-content" data-aos="fade-up">

                <!-- Information Collection -->
                <div class="content-section">
                    <img src="{{ Storage::url($visiMisi->image) }}" class="img-fluid rounded" alt="visi misi">
                </div>
            </div>

        </div>

    </section><!-- /Privacy Section -->

</main>
