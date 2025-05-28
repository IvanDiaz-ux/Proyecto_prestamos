<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préstamos Miranda - Iniciar Sesión</title>
    <link rel="stylesheet" href="styleLogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> </head>
<body>
    <div class="login-container">
        <div class="left-panel">
            <header id="logo-login">
             <img src="imagenes-miranda/prestamos_miranda__2.1.png" alt="Logo"> 
              <span>Préstamos Miranda</span>

             </header>
            <h1>Sistema de Gestión de Préstamos</h1>
            <p class="tagline">Controle su negocio de manera eficiente y segura. Mantenga un registro detallado de sus operaciones financieras.</p>

            <div class="features">
                <div class="feature-item">
                    <i class="fas fa-chart-line"></i>
                    <span>Seguimiento en tiempo real</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-money-bill-wave"></i>
                    <span>Control flujo de efectivo</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-shield-alt"></i>
                    <span>Gestión segura de datos</span>
                </div>
            </div>
        </div>

        <div class="right-panel">
            <div class="login-form-card">
                <h2>Bienvenido</h2>
                <p class="subtitle">Ingrese sus credenciales para continuar</p>

                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <div class="form-options">
                        <div class="remember-me">
                            <input type="checkbox" id="rememberMe" name="rememberMe">
                            <label for="rememberMe">Recordarme</label>
                        </div>
                        <a href="#" class="forgot-password">¿Olvidó su contraseña?</a>
                    </div>

                    <button type="submit" class="btn-login">Iniciar Sesión</button>
                </form>

                <p class="register-link">¿No tiene una cuenta? <a href="#">Registrarse</a></p>
            </div>
        </div>
    </div>
</body>
</html>