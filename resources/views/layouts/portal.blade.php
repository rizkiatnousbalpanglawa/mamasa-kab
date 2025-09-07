<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Kabupaten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <style>
        .video-bg {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 0;
        }

        .content {
            position: relative;
            z-index: 1;
            color: #fff;
        }

        .navbar {
            background: rgba(0, 0, 0, 0.7) !important;
        }

        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .custom-divider {
            width: 80px;
            height: 4px;
            border: none;
            background: linear-gradient(to right, #fff, #E5E6E4);
            margin: 0 auto;
            border-radius: 2px;
        }

        .custom-divider-2 {
            width: 80px;
            height: 4px;
            border: none;
            background: linear-gradient(to right, #0f0c29, #302b63);
            margin: 0 auto;
            border-radius: 2px;
        }

        .menu-item {
            text-decoration: none;
            color: #fff;
            display: inline-block;
            transition: transform 0.3s ease;
        }

        .menu-item:hover {
            transform: scale(1.1);
        }

        .icon-circle {
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }

        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }

        #preloader.fade-out {
            opacity: 0;
            visibility: hidden;
        }

        .device-item {
            border-radius: 15px;
            background-color: #f8f9fa;
            padding: 15px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            transition: transform 0.5s cubic-bezier(0.25, 0.1, 0.25, 1),
                box-shadow 0.5s cubic-bezier(0.25, 0.1, 0.25, 1);
        }

        .device-icon {
            font-size: 24px;
            background: #fff;
            border-radius: 10px;
            padding: 10px;
            margin-right: 15px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .device-info {
            flex-grow: 1;
        }

        .device-info h6 {
            margin: 0;
            font-weight: 600;
        }

        .device-info small {
            color: #6c757d;
        }

        .device-item:hover {
            transform: translateY(-6px) scale(1.02);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        /* Tombol close custom */
        .btn-close-custom {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.85);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            z-index: 1051;
        }

        .btn-close-custom:hover {
            background: #ff4d4d;
            color: #fff;
            transform: rotate(90deg) scale(1.1);
        }

        /* Card device */
        .device-item {
            background: #fff;
            border-radius: 12px;
            padding: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .device-item:hover {
            transform: translateY(-6px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        /* Ikon */
        .device-icon {
            font-size: 2rem;
            margin-right: 15px;
            color: #0d6efd;
        }
    </style>
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner-border text-light" style="width: 3rem; height: 3rem;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>


    {{ $slot }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener("load", function() {
            const preloader = document.getElementById("preloader");
            preloader.classList.add("fade-out");
        });
    </script>
</body>

</html>
