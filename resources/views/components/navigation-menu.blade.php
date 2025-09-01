<header id="header" class="header d-flex align-items-center sticky-top">
    <div
        class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-end">
        <a href="{{ url('/') }}" class="d-flex align-items-center me-auto">
            <img src="{{ asset('front-assets/img/logo-website.png') }}" class="img-fluid" style="width: 300px"
                alt="Logo Website Pemkab Mamasa" />
            {{-- <h3 class="ms-2 fw-bold my-auto" style="color: #04415f">KAB. MAMASA</h3> --}}
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <x-nav-link :active="request()->is('/')" href="/">Beranda</x-nav-link>
                <x-nav-link :active="request()->is(['berita/*', 'berita'])" href="/berita">Berita</x-nav-link>
                <x-nav-link :active="request()->is(['kegiatan/*', 'kegiatan'])" href="/kegiatan">Kegiatan</x-nav-link>
                <li class="dropdown">
                    <a href="#"><span>Profil</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a href="{{ url('visi-misi') }}">Visi & Misi</a></li>
                        <li><a href="{{ url('sejarah') }}">Sejarah</a></li>
                        <li><a href="{{ url('lambang') }}">Lambang Daerah</a></li>
                        <li><a href="">Profil Pimpinan Daerah</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#"><span>Potensi</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a href="">Pariwisata</a></li>
                        <li><a href="">Pertanian</a></li>
                        <li><a href="">Tambang</a></li>
                    </ul>
                </li>
                <x-nav-link :active="request()->is('info')" href="/info">Informasi</x-nav-link>
                {{-- <x-nav-link :active="request()->is('opd')" href="/web-opd">Web OPD</x-nav-link> --}}

            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>
