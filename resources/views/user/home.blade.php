<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Correo electrónico" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Contraseña" required>
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
