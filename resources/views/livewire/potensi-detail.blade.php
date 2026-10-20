@section('meta-title', $potensi->nama . ' | Website Resmi PEMKAB Mamasa')
@section('meta-description', \Illuminate\Support\Str::limit(strip_tags($potensi->deskripsi), 150))
@section('meta-image', url(\Illuminate\Support\Facades\Storage::url($potensi->image)))

<main class="main">

    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <p class="h1 mb-2 mb-lg-0">Potensi Daerah</p>
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
                    <h1 class=" text-center h3 mb-3">{{ $potensi->nama }}</h1>
                    <div class=" text-center mb-4">
                        <img src="{{ asset(Storage::url($potensi->image)) }}" class="rounded-2 img-fluid"
                            alt="{{ $potensi->nama }}">
                    </div>
                    <hr>
                    <div class="mt-2">
                        {!! $potensi->deskripsi !!}
                    </div>

                </div>
            </div>

        </div>
    </section>
</main>
