<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'Yurnails')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon">
</head>

<body>
    <div class="header">
        <a href="/"><img class="logo-header" src="{{ asset('assets/yurnails-white.png') }}" alt="Yurnails Logo"></a>
        <nav>
            <ul>
                <li><a href="/form">Sign up</a></li>
                {{-- <li><a href="/admin/login">Admin Login</a></li> --}}
                <li><a href="">Location</a></li>
                {{-- <li><a href="/admin/register">Registro Administrador</a></li> --}}
            </ul>
        </nav>
        <div class="hamburger-menu" id="hamburger-menu">
            <i class="fas fa-bars"></i>
        </div>
    </div>
    <div class="header-line"></div>

    <div class="side-menu" id="side-menu">
        <button class="close-btn" id="close-btn">&times;</button>
        <ul>
            <li><a href="/form">Sign up</a></li>
            {{-- <li><a href="/admin/login">Admin Login</a></li> --}}
            <li><a href="">Location</a></li>
            {{-- <li><a href="/admin/register">Registro Administrador</a></li> --}}
        </ul>
        
    </div>

    <div class="main-content">
        @yield('content')
    </div>

    <div class="footer">
        <div class="footer-content">
            <img class="logo-footer" src="{{ asset('assets/yurnails-white-full.png') }}" alt="Yurnails Logo">
            <div class="footer-line-white"></div>
            <div class="social-icons">
                <a href="https://www.tiktok.com/@yurnails" target="_blank"><i class="fab fa-tiktok"></i></a>
                <a href="https://www.instagram.com/yurnails" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/yurnailssupport" target="_blank"><i
                        class="fa-brands fa-facebook"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-line"></div>
</body>

<script>
    document.getElementById('hamburger-menu').addEventListener('click', function() {
        const sideMenu = document.getElementById('side-menu');
        sideMenu.classList.add('open');
    });

    document.getElementById('close-btn').addEventListener('click', function() {
        const sideMenu = document.getElementById('side-menu');
        sideMenu.classList.remove('open');
    });
</script>

</html>
