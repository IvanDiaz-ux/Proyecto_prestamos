<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préstamos Miranda - Crear Cuenta</title>
    <link rel="stylesheet" href="styleRegistro.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
     <div class="logo">
         <img src="imagenes-miranda/prestamos_miranda__2.1.png" alt="Logo">
         <span class="logo-icon">Préstamos Miranda</span>
     </div>
    </div>

    <div class="register-container">
        <div class="register-card">
            <h2>CREAR CUENTA</h2>
            <p class="subtitle">Gestiona tus préstamos de manera eficiente</p>

            <form action="#" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>
                </div>

                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Tu apellido" required>
                </div>

                <div class="form-group">
                    <label for="cedula">Cédula</label>
                    <input type="text" id="cedula" name="cedula" placeholder="Número de cédula" required>
                </div>

                <div class="form-group">
                    <label for="celular">Número Celular</label>
                    <input type="tel" id="celular" name="celular" placeholder="Ej: 3001234567" required>
                </div>

                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" id="direccion" name="direccion" placeholder="Tu dirección" required>
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="confirm-password">Confirmar Contraseña</label>
                    <input type="password" id="confirm-password" name="confirm-password" required>
                </div>

                <div class="terms-checkbox">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">Acepto los <a href="#" class="link-terms">Términos y Condiciones</a> y las <a href="#" class="link-terms">Políticas de Privacidad</a></label>
                </div>

                <button type="submit" class="btn-create-account">CREAR CUENTA</button>
            </form>

            <p class="login-link">¿Ya tienes una cuenta? <a href="login.html">Iniciar Sesión</a></p>
        </div>
    </div>
</body>
</html>