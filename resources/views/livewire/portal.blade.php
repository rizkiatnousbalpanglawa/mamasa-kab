<div class="">
    <!-- Background Video -->
    <video muted autoplay loop playsinline webkit-playsinline preload="auto" class="video-bg">
        <source
            src="{{ !empty($portals->background) ? Storage::url($portals->background) : asset('front-assets/bg-bupati.mp4') }}"
            type="video/mp4">
        Browser anda tidak mendukung video background.
    </video>
    <div class="overlay"></div>


    <div class="content d-flex flex-column justify-content-center align-items-center text-center min-vh-100">
        <div class="">
            <span class="portal-eyebrow">Kabupaten Mamasa &middot; Sulawesi Barat</span>
            <div>
                <img src="{{ !empty($portals->logo) ? Storage::url($portals->logo) : asset('front-assets/img/logo-mamasa.png') }}"
                    alt="Logo Kabupaten Mamasa" class="portal-logo my-3">
            </div>

            <h1 class="display-6 fw-bold text-outline">{{ $portals->judul ?? 'Pemerintah Kab Mamasa' }}</h1>
            <p class="fw-bold h3 text-outline">{{ $portals->subjudul ?? '' }}</p>

            <hr class="custom-divider my-4">


            <section id="menu" class="container text-center">
                <div class="row justify-content-center">

                    <div class="col-4 col-md-2 mb-4">
                        <a href="{{ url('/beranda') }}" class="menu-item">
                            <div class="icon-circle">
                                <i class="bi bi-house-door" style="font-size: 2rem; color: white;"></i>
                            </div>
                            <p class="mt-2 text-outline-1">Beranda</p>
                        </a>
                    </div>

                    <div class="col-4 col-md-2 mb-4">
                        <a href="#" class="menu-item" data-bs-toggle="modal" data-bs-target="#websiteOpd">
                            <div class="icon-circle">
                                <i class="bi bi-globe" style="font-size: 2rem; color: white;"></i>
                            </div>
                            <p class="mt-2 text-outline-1">Website</p>
                        </a>

                    </div>

                    @foreach ($menu as $item)
                        <div class="col-4 col-md-2 mb-4">
                            <a href="{{ $item->link }}" class="menu-item">
                                <div class="icon-circle">
                                    <i class="bi bi-{{ $item->icon }}" style="font-size: 2rem; color: white;"></i>
                                </div>
                                <p class="mt-2 text-outline-1">{{ $item->judul }}</p>
                            </a>
                        </div>
                    @endforeach

                </div>
            </section>
        </div>
    </div>

    <div class="modal modal-xl fade" id="websiteOpd" tabindex="-1" aria-labelledby="websiteOpdLabel" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Tombol Close -->
                <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>

                <div class="modal-body p-4">
                    <div class="">
                        <h2 class="h3 fw-semibold text-center mb-1" id="websiteOpdLabel">Website Organisasi Perangkat
                            Daerah</h2>
                        <p class="text-center text-muted small mb-0">Pilih instansi untuk membuka website resminya di tab
                            baru</p>
                    </div>
                    <hr class="custom-divider-2 my-4">
                    <div class="input-group opd-search mb-2">
                        <span class="input-group-text" id="opdSearchIcon"><i class="bi bi-search"></i></span>
                        <input type="search" class="form-control" id="opdSearchInput"
                            placeholder="Cari dinas, badan, kecamatan, kelurahan…" aria-label="Cari perangkat daerah"
                            aria-describedby="opdSearchIcon" autocomplete="off"
                            wire:model.live.debounce.300ms="pencarian">
                    </div>
                    <p class="opd-count small text-muted mb-3" aria-live="polite">
                        Menampilkan {{ $webOpd->count() }} instansi
                    </p>
                    <div class="row g-3">
                        @forelse ($webOpd as $item)
                            <div class="col-12 col-sm-6 col-lg-4">
                                <a href="{{ $item->url }}" target="_blank" rel="noopener" class="opd-card">
                                    <span class="opd-logo" aria-hidden="true">
                                        @if (!empty($item->image))
                                            <img src="{{ asset(Storage::url($item->image)) }}"
                                                alt="Logo {{ $item->nama }}" loading="lazy">
                                        @else
                                            <img src="{{ asset('front-assets/img/logo-mamasa.png') }}"
                                                alt="Logo {{ $item->nama }}" loading="lazy">
                                        @endif
                                    </span>
                                    <span class="opd-text">
                                        <span class="opd-name">{{ $item->nama }}</span>
                                        <span class="opd-sub">{{ $item->subnama }}</span>
                                    </span>
                                    <i class="bi bi-box-arrow-up-right opd-go" aria-hidden="true"></i>
                                </a>
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="opd-empty">
                                    <i class="bi bi-search" aria-hidden="true"></i>
                                    <p class="mb-0">Tidak ada instansi yang cocok dengan &ldquo;{{ $pencarian }}&rdquo;.
                                    </p>
                                </div>
                            </div>
                        @endforelse
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        // Autofocus input saat modal dibuka
        document.addEventListener('shown.bs.modal', function(e) {
            if (e.target.id === 'websiteOpd') {
                document.getElementById('opdSearchInput')?.focus();
            }
        });
    </script>
</div>
