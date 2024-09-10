<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="header">
        <a href="/"><img src="{{ asset('img/logo.png') }}" alt="Yurnails"></a>
        <nav>
            <ul>
                <li><a href="/form">Formulario</a></li>
                <li><a href="/admin/login">Login Administrador</a></li>
                <li><a href="/admin/register">Registro Administrador</a></li>
            </ul>
        </nav>
    </div>
    <h1>Bienvenido a Yurnails</h1>
    <p>Información sobre Yurnails...</p>
    <div class="footer"></div>
</body>
</html>