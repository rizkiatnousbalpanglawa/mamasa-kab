@props(['text' => 'Memuat'])

{{-- Loading screen global: dipakai layouts portal & app. Dihilangkan oleh main.js + script di bawah. --}}
<style>
    #preloader {
        position: fixed;
        inset: 0;
        background: radial-gradient(100% 100% at 50% 20%, #0a3529 0%, #04120e 70%);
        display: flex;
        flex-direction: column;
        gap: 1.1rem;
        align-items: center;
        justify-content: center;
        z-index: 999999;
        transition: opacity 0.5s ease, visibility 0.5s ease;
    }

    #preloader::before {
        content: none;
    }

    #preloader.fade-out {
        opacity: 0;
        visibility: hidden;
    }

    #preloader img {
        width: 76px;
        height: auto;
        animation: preloader-pulse 1.6s ease-in-out infinite;
    }

    @keyframes preloader-pulse {

        0%,
        100% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.08);
            opacity: 0.85;
        }
    }

    #preloader .load-bar {
        width: 168px;
        height: 3px;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.14);
        overflow: hidden;
    }

    #preloader .load-bar span {
        display: block;
        height: 100%;
        width: 40%;
        border-radius: 999px;
        background: linear-gradient(to right, #f5d67b, #e8b94a);
        animation: preloader-slide 1.1s ease-in-out infinite;
    }

    @keyframes preloader-slide {
        0% {
            transform: translateX(-110%);
        }

        100% {
            transform: translateX(430%);
        }
    }

    #preloader small {
        color: rgba(255, 255, 255, 0.6);
        letter-spacing: 0.28em;
        font-size: 0.68rem;
        font-weight: 600;
        text-transform: uppercase;
    }

    @media (prefers-reduced-motion: reduce) {
        #preloader img,
        #preloader .load-bar span {
            animation: none;
        }
    }
</style>
<div id="preloader" role="status" aria-label="{{ $text }}">
    <img src="{{ asset('front-assets/img/logo-mamasa.png') }}" alt="">
    <div class="load-bar" aria-hidden="true"><span></span></div>
    <small>{{ $text }}</small>
</div>
<script>
    (function() {
        function hidePreloader() {
            var el = document.getElementById("preloader");
            if (!el || el.dataset.done) return;
            el.dataset.done = "1";
            el.classList.add("fade-out");
            setTimeout(function() {
                el.remove();
            }, 600);
        }

        if (document.readyState === "complete") hidePreloader();
        else window.addEventListener("load", hidePreloader, {
            once: true
        });

        document.addEventListener("livewire:navigated", hidePreloader);
        // Pengaman: jangan biarkan preloader menggantung lebih dari 5 detik
        setTimeout(hidePreloader, 5000);

        // Hormati preferensi kurangi gerak: jeda video latar
        if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            document.querySelectorAll("video.video-bg").forEach(function(v) {
                v.pause();
            });
        }
    })();
</script>
