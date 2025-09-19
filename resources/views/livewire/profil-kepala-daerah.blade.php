<main class="main">

    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Profil Pimpinan Daerah</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li class="current">Profil Pimpinan Daerah</li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="section">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="section-title">Pimpinan Daerah</h2>
                <p>Mengenal Lebih Dekat Pimpinan Daerah Kabupaten Mamasa</p>
            </div>

            @if ($pejabat && !$pejabat->isEmpty())

                <div class="row">
                    <div class="col-md-4 col-lg-3">
                        <div class="nav nav-pills flex-column nav-pimpinan" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            @foreach ($pejabat as $index => $item)
                                <button class="nav-link {{ $index == 0 ? 'active' : '' }}"
                                    id="v-pills-{{ $item->slug }}-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-{{ $item->slug }}" type="button" role="tab"
                                    aria-controls="v-pills-{{ $item->slug }}"
                                    aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                                    <img src="{{ asset(Storage::url($item->image)) }}" alt="Foto {{ $item->jabatan }}"
                                        class="nav-thumbnail">
                                    <div class="nav-text">
                                        <span class="jabatan">{{ $item->jabatan }}</span>
                                        <span class="nama">{{ $item->nama }}</span>
                                    </div>
                                </button>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-8 col-lg-9">
                        <div class="tab-content tab-content-pimpinan" id="v-pills-tabContent">
                            @foreach ($pejabat as $index => $item)
                                <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}"
                                    id="v-pills-{{ $item->slug }}" role="tabpanel"
                                    aria-labelledby="v-pills-{{ $item->slug }}-tab">
                                    <div class="profil-content">
                                        <img src="{{ asset(Storage::url($item->image)) }}"
                                            alt="Foto {{ $item->jabatan }}" class="profil-image">
                                        <div class="profil-details">
                                            <h3 class="nama-pejabat">{{ $item->nama }}</h3>
                                            <h4 class="jabatan-pejabat">{{ $item->jabatan }}</h4>
                                            <p class="deskripsi">{!! $item->deskripsi !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @else
                <div class="alert alert-secondary text-center" role="alert">
                    <i class="bi bi-info-circle-fill me-2"></i>
                    Profil pimpinan daerah belum diisi.
                </div>
            @endif
        </div>
    </section>
</main>
