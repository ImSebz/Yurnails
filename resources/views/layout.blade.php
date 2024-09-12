<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'Yurnails')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('assets/gold-version-isotype.ico') }}" type="image/x-icon">
</head>

<body>
    <div class="header">
        <a href="/"><img class="logo-header" src="{{ asset('assets/main-gold-yurnails.png') }}" alt="Yurnails Logo"></a>
        <nav>
            <ul>
                <li><a href="/form">Formulario</a></li>
                <li><a href="/admin/login">Login Administrador</a></li>
                {{-- <li><a href="/admin/register">Registro Administrador</a></li> --}}
            </ul>
        </nav>
    </div>

    <div class="main-content">
        @yield('content')
    </div>

    <div class="footer">
        <div class="footer-content">
            <img class="logo-footer" src="{{ asset('assets/main-gold-yurnails.png') }}" alt="Yurnails Logo">
            <p>&copy; 2024 Yurnails | All Rights Reserved.</p>
            <div class="social-icons">
                <a href="https://www.tiktok.com/@yurnails" target="_blank"><i class="fab fa-tiktok"></i></a>
                <a href="https://www.instagram.com/yurnails" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/yurnailssupport" target="_blank"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </div>
</body>

</html>
