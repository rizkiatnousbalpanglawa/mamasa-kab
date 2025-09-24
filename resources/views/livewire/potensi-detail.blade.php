<main class="main">

    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Potensi Daerah</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li class="">Potensi</li>
                    <li class="current">asdasdsa</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class="section">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 justify-content-center">
                    <div class="">
                        <img src="{{ asset(Storage::url($potensi->image)) }}" class="card-img-top"
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
