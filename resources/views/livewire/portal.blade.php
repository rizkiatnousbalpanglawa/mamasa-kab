<div class="">
    <!-- Background Video -->
    <video autoplay muted loop class="video-bg">
        <source
            src="{{ !empty($portals->background) ? Storage::url($portals->background) : asset('front-assets/mamasa-bg.mp4') }}"
            type="video/mp4">
        Browser anda tidak mendukung video background.
    </video>
    <div class="overlay"></div>


    <div class="content d-flex flex-column justify-content-center align-items-center text-center min-vh-100">
        <div class="">
            <img src="{{ !empty($portals->logo) ? Storage::url($portals->logo) : asset('front-assets/img/logo-mamasa.png') }}"
                alt="Logo Kabupaten Mamasa" class="my-3" style="width:150px; height:auto;">

            <h1 class="display-6 fw-bold">{{ $portals->judul ?? 'Pemerintah Kab Mamasa' }}</h1>
            <p class="lead">{{ $portals->subjudul ?? '' }}</p>

            <hr class="custom-divider my-4">


            <section id="menu" class="container  text-center">
                <div class="row justify-content-center">

                    <div class="col-4 col-md-2 mb-4">
                        <a href="{{ url('/beranda') }}" class="menu-item">
                            <div class="icon-circle">
                                <i class="bi bi-house-door" style="font-size: 2rem; color: white;"></i>
                            </div>
                            <p class="mt-2">Beranda</p>
                        </a>
                    </div>

                    <div class="col-4 col-md-2 mb-4">
                        <a href="#" class="menu-item" data-bs-toggle="modal" data-bs-target="#websiteOpd">
                            <div class="icon-circle">
                                <i class="bi bi-globe" style="font-size: 2rem; color: white;"></i>
                            </div>
                            <p class="mt-2">Website</p>
                        </a>

                    </div>

                    @foreach ($menu as $item)
                        <div class="col-4 col-md-2 mb-4">
                            <a href="{{ $item->link }}" class="menu-item">
                                <div class="icon-circle">
                                    <i class="bi bi-{{ $item->icon }}" style="font-size: 2rem; color: white;"></i>
                                </div>
                                <p class="mt-2">{{ $item->judul }}</p>
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
                        <h2 class="h3 fw-semibold text-center mb-3">Website Organisasi Perangkat Daerah</h2>
                    </div>
                    <hr class="custom-divider-2 my-4">
                    {{-- <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="bi bi-search"></i>
                        </span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="opdSearchInput" wire:model.defer="pencarian"
                                placeholder="Cari">
                            <label for="opdSearchInput">Cari</label>
                        </div>
                    </div> --}}
                    <div class="row g-3">
                        @forelse ($webOpd as $item)
                            <div class="col-lg-4 mb-1">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-2 d-flex justify-content-center">
                                                <img src="{{ $item && $item->image ? asset(Storage::url($item->image)) : asset('front-assets/img/logo-mamasa.png') }}"
                                                    alt="Logo OPD" width="25">
                                            </div>
                                            <div class="col small">
                                                <a href="{{ $item->url }}"
                                                    class="link-dark fw-bold text-decoration-none">
                                                    {{ $item->nama }}
                                                    <div class="small fw-normal text-black-50 fst-italic">
                                                        {{ $item->subnama }}
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
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
