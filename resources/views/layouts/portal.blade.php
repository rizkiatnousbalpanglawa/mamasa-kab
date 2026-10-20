<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#06231c">
    <title>Portal Resmi Pemerintah Kabupaten Mamasa</title>
    <meta name="description"
        content="Portal resmi Pemerintah Kabupaten Mamasa — pintu masuk layanan website OPD, berita, pengumuman, dan informasi publik Kabupaten Mamasa.">
    <link rel="canonical" href="{{ url('/') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --portal-deep: #06231c;
            --portal-deep-2: #0a3529;
            --portal-gold: #e8b94a;
            --portal-gold-soft: #f5d67b;
            --portal-glass: rgba(255, 255, 255, 0.08);
            --portal-glass-border: rgba(255, 255, 255, 0.22);
            --portal-ease: cubic-bezier(0.22, 1, 0.36, 1);
        }

        * {
            -webkit-tap-highlight-color: transparent;
        }

        ::selection {
            background: var(--portal-gold);
            color: #1a1405;
        }

        html {
            scrollbar-color: var(--portal-deep-2) #04120e;
        }

        body {
            font-family: 'Plus Jakarta Sans', 'Segoe UI', Helvetica, Arial, sans-serif;
            background: #04120e;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* ---------- Skip link (aksesibilitas) ---------- */
        .skip-link {
            position: fixed;
            top: -60px;
            left: 16px;
            z-index: 10000;
            background: var(--portal-gold);
            color: #1a1405;
            font-weight: 700;
            font-size: 0.875rem;
            padding: 0.6rem 1.1rem;
            border-radius: 999px;
            text-decoration: none;
            transition: top 0.2s ease;
        }

        .skip-link:focus {
            top: 12px;
        }

        /* ---------- Latar video + overlay ---------- */
        .video-bg {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            background: #000;
            z-index: -2;
        }

        .overlay {
            position: fixed;
            inset: 0;
            z-index: -1;
            background:
                radial-gradient(120% 90% at 50% 10%, rgba(0, 0, 0, 0) 30%, rgba(2, 12, 9, 0.55) 100%),
                linear-gradient(180deg, rgba(4, 18, 14, 0.62) 0%, rgba(4, 18, 14, 0.38) 42%, rgba(2, 10, 8, 0.78) 100%);
        }

        .overlay::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(115deg, rgba(10, 53, 41, 0.35), rgba(0, 0, 0, 0) 55%);
            pointer-events: none;
        }

        .content {
            position: relative;
            z-index: 1;
            color: #fff;
            padding-bottom: 3.5rem;
            animation: contentIn 0.9s var(--portal-ease) both;
        }

        @keyframes contentIn {
            from {
                opacity: 0;
                transform: translateY(14px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        /* ---------- Tipografi ---------- */
        .portal-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            color: var(--portal-gold-soft);
            background: rgba(232, 185, 74, 0.12);
            border: 1px solid rgba(232, 185, 74, 0.35);
            border-radius: 999px;
            padding: 0.4rem 1rem;
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
        }

        .portal-logo {
            width: clamp(96px, 18vw, 148px);
            height: auto;
            filter: drop-shadow(0 10px 28px rgba(0, 0, 0, 0.55));
            animation: logoFloat 5s ease-in-out infinite;
        }

        @keyframes logoFloat {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-7px);
            }
        }

        .text-outline {
            color: #fff;
            font-weight: 800;
            letter-spacing: 0.01em;
            text-wrap: balance;
            text-shadow:
                0 2px 14px rgba(0, 0, 0, 0.65),
                0 1px 3px rgba(0, 0, 0, 0.9);
        }

        .text-outline-1 {
            color: rgba(255, 255, 255, 0.95);
            font-weight: 600;
            text-shadow:
                0 1px 10px rgba(0, 0, 0, 0.7),
                0 1px 2px rgba(0, 0, 0, 0.9);
        }

        .custom-divider {
            width: 96px;
            height: 4px;
            border: none;
            border-radius: 999px;
            margin: 0 auto;
            background: linear-gradient(to right, var(--portal-gold-soft), var(--portal-gold));
            box-shadow: 0 0 18px rgba(232, 185, 74, 0.55);
        }

        .custom-divider-2 {
            width: 72px;
            height: 4px;
            border: none;
            border-radius: 999px;
            margin: 0 auto;
            background: linear-gradient(to right, var(--portal-deep-2), var(--portal-gold));
        }

        /* ---------- Skala tipe judul (mengikuti markup view) ---------- */
        .content h1.display-6 {
            font-size: clamp(1.55rem, 4.5vw, 2.6rem);
            line-height: 1.2;
        }

        .content p.h3 {
            font-size: clamp(1.02rem, 2.6vw, 1.5rem);
            letter-spacing: 0.02em;
        }

        /* ---------- Grid menu ---------- */
        #menu .row>div {
            opacity: 0;
            animation: tileIn 0.65s var(--portal-ease) forwards;
        }

        #menu .row>div:nth-child(1) {
            animation-delay: 0.10s;
        }

        #menu .row>div:nth-child(2) {
            animation-delay: 0.16s;
        }

        #menu .row>div:nth-child(3) {
            animation-delay: 0.22s;
        }

        #menu .row>div:nth-child(4) {
            animation-delay: 0.28s;
        }

        #menu .row>div:nth-child(5) {
            animation-delay: 0.34s;
        }

        #menu .row>div:nth-child(6) {
            animation-delay: 0.40s;
        }

        #menu .row>div:nth-child(7) {
            animation-delay: 0.46s;
        }

        #menu .row>div:nth-child(8) {
            animation-delay: 0.52s;
        }

        #menu .row>div:nth-child(9) {
            animation-delay: 0.58s;
        }

        #menu .row>div:nth-child(10) {
            animation-delay: 0.64s;
        }

        #menu .row>div:nth-child(11) {
            animation-delay: 0.70s;
        }

        #menu .row>div:nth-child(12) {
            animation-delay: 0.76s;
        }

        @keyframes tileIn {
            from {
                opacity: 0;
                transform: translateY(22px) scale(0.96);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        .menu-item {
            text-decoration: none;
            color: #fff;
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            gap: 0.15rem;
            width: 100%;
            padding: 0.6rem 0.4rem;
            border-radius: 1.25rem;
            transition: transform 0.35s var(--portal-ease), background-color 0.3s ease;
        }

        .menu-item:hover,
        .menu-item:focus-visible {
            transform: translateY(-7px);
            background: rgba(255, 255, 255, 0.06);
            outline: none;
        }

        .menu-item:focus-visible {
            box-shadow: 0 0 0 3px rgba(232, 185, 74, 0.75);
        }

        .menu-item p {
            font-size: 0.82rem;
            font-weight: 600;
            line-height: 1.35;
            max-width: 11rem;
            margin-bottom: 0;
        }

        .icon-circle {
            width: clamp(72px, 19vw, 102px);
            height: clamp(72px, 19vw, 102px);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            background: linear-gradient(160deg, rgba(255, 255, 255, 0.20), rgba(255, 255, 255, 0.05));
            border: 1px solid var(--portal-glass-border);
            box-shadow:
                0 12px 32px rgba(0, 0, 0, 0.45),
                inset 0 1px 0 rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            transition: transform 0.35s var(--portal-ease), border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .icon-circle i {
            font-size: clamp(1.5rem, 5vw, 2rem) !important;
            color: #fff;
            filter: drop-shadow(0 2px 6px rgba(0, 0, 0, 0.6));
            transition: transform 0.35s var(--portal-ease), color 0.3s ease;
        }

        .menu-item:hover .icon-circle,
        .menu-item:focus-visible .icon-circle {
            transform: scale(1.07);
            border-color: rgba(232, 185, 74, 0.8);
            box-shadow:
                0 16px 40px rgba(0, 0, 0, 0.5),
                0 0 0 6px rgba(232, 185, 74, 0.15),
                0 0 28px rgba(232, 185, 74, 0.35);
        }

        .menu-item:hover .icon-circle i,
        .menu-item:focus-visible .icon-circle i {
            transform: scale(1.08);
            color: var(--portal-gold-soft);
        }

        /* ---------- Footer portal ---------- */
        .portal-footer {
            position: fixed;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 2;
            text-align: center;
            padding: 0.65rem 1rem;
            font-size: 0.72rem;
            letter-spacing: 0.04em;
            color: rgba(255, 255, 255, 0.62);
            background: linear-gradient(180deg, rgba(2, 10, 8, 0), rgba(2, 10, 8, 0.65));
            pointer-events: none;
        }

        /* ---------- Preloader: lihat components/preloader ---------- */

        /* ---------- Modal Website OPD ---------- */
        .modal-backdrop.show {
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
        }

        #websiteOpd .modal-content {
            border: none;
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.45);
        }

        #websiteOpd .modal-body {
            max-height: 72vh;
            overflow-y: auto;
        }

        /* ---------- Pencarian OPD ---------- */
        .opd-search .input-group-text {
            background: #fff;
            border-color: rgba(6, 35, 28, 0.14);
            color: var(--portal-deep-2);
            border-radius: 0.9rem 0 0 0.9rem;
        }

        .opd-search .form-control {
            border-color: rgba(6, 35, 28, 0.14);
            border-radius: 0 0.9rem 0.9rem 0;
            padding: 0.65rem 1rem;
            font-size: 0.9rem;
        }

        .opd-search .form-control:focus {
            border-color: var(--portal-gold);
            box-shadow: 0 0 0 0.2rem rgba(232, 185, 74, 0.22);
        }

        .opd-count {
            font-size: 0.78rem;
        }

        /* ---------- Kartu OPD ---------- */
        .opd-card {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            height: 100%;
            padding: 0.85rem 0.95rem;
            background: #fff;
            border: 1px solid rgba(6, 35, 28, 0.1);
            border-radius: 1rem;
            text-decoration: none;
            transition: transform 0.25s var(--portal-ease), box-shadow 0.25s ease, border-color 0.25s ease;
        }

        .opd-card:hover,
        .opd-card:focus-visible {
            transform: translateY(-4px);
            border-color: rgba(232, 185, 74, 0.65);
            box-shadow: 0 14px 30px rgba(6, 35, 28, 0.14);
            outline: none;
        }

        .opd-card:focus-visible {
            box-shadow: 0 0 0 3px rgba(232, 185, 74, 0.5), 0 14px 30px rgba(6, 35, 28, 0.14);
        }

        .opd-logo {
            flex: none;
            width: 48px;
            height: 48px;
            border-radius: 0.85rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(150deg, rgba(10, 53, 41, 0.1), rgba(232, 185, 74, 0.22));
            border: 1px solid rgba(6, 35, 28, 0.08);
        }

        .opd-logo img {
            width: 30px;
            height: 30px;
            object-fit: contain;
        }

        .opd-text {
            flex: 1;
            min-width: 0;
        }

        .opd-name {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font-weight: 700;
            font-size: 0.8rem;
            line-height: 1.4;
            color: #15211d;
        }

        .opd-sub {
            display: block;
            margin-top: 0.15rem;
            font-size: 0.7rem;
            font-style: italic;
            color: #6c757d;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .opd-go {
            flex: none;
            font-size: 0.95rem;
            color: var(--portal-deep-2);
            opacity: 0.35;
            transition: opacity 0.25s ease, transform 0.25s var(--portal-ease);
        }

        .opd-card:hover .opd-go,
        .opd-card:focus-visible .opd-go {
            opacity: 1;
            transform: translate(2px, -2px);
            color: #9a7414;
        }

        .opd-empty {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.6rem;
            padding: 2.5rem 1rem;
            border: 1px dashed rgba(6, 35, 28, 0.25);
            border-radius: 1rem;
            color: #5b6b65;
            font-size: 0.9rem;
            text-align: center;
        }

        .opd-empty i {
            font-size: 1.8rem;
            opacity: 0.5;
        }

        .btn-close-custom {
            position: absolute;
            top: 14px;
            right: 14px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(6, 35, 28, 0.07);
            border: 1px solid rgba(6, 35, 28, 0.1);
            color: var(--portal-deep);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s var(--portal-ease);
            z-index: 1051;
        }

        .btn-close-custom:hover {
            background: #d64545;
            border-color: #d64545;
            color: #fff;
            transform: rotate(90deg) scale(1.06);
        }

        /* ---------- Responsif ---------- */
        @media (max-width: 575.98px) {
            .menu-item p {
                font-size: 0.72rem;
                max-width: 7.5rem;
            }

            .portal-footer {
                font-size: 0.64rem;
            }
        }

        /* ---------- Kurangi gerak (aksesibilitas) ---------- */
        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }

            #menu .row>div,
            .content {
                opacity: 1;
            }

            .portal-logo {
                animation: none;
            }
        }
    </style>
</head>

<body>

    <a class="skip-link" href="#menu">Lewati ke menu layanan</a>

    <x-preloader text="Memuat Portal" />

    {{ $slot }}

    <footer class="portal-footer">
        &copy; {{ date('Y') }} Pemerintah Kabupaten Mamasa &middot; Dinas Komunikasi Informatika dan Persandian
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
