<main class="main">

    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Potensi Daerah</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li class="">Potensi</li>
                    <li class="current">{{ $potensi->nama }}</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class=" text-center text-muted mb-4">Ditambahkan:
                        {{ $potensi->created_at->format('d M Y H:i') }} WITA</div>
                    <div class=" text-center h3 mb-3">{{ $potensi->nama }}</div>
                    <div class=" text-center mb-4">
                        <img src="{{ asset(Storage::url($potensi->image)) }}" class="rounded-2 img-responsive"
                            alt="{{ $potensi->nama }}">

                    </div>
                    <div class="">
                        {!! $potensi->deskripsi !!}
                    </div>

                </div>
            </div>

        </div>
    </section>
</main>
