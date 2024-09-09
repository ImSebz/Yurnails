<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <h1>Form</h1>
    <form action="/form" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Correo:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="age">Edad:</label>
        <input type="number" id="age" name="age" required><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>