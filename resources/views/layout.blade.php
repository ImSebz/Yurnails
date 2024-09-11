<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Yurnails')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="header">
        <a href="/"><img class="logo-header" src="{{ asset('assets/main-gold-yurnails.png') }}" alt="Yurnails"></a>
        <nav>
            <ul>
                <li><a href="/form">Formulario</a></li>
                <li><a href="/admin/login">Login Administrador</a></li>
                {{-- <li><a href="/admin/register">Registro Administrador</a></li> --}}
            </ul>
        </nav>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <div class="footer">
        <p>&copy; 2024 Yurnails. </p>
    </div>
</body>
</html>