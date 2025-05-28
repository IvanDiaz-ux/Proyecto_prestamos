<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préstamos Miranda - Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="header">
  <div class="logo">
    <img src="imagenes-miranda/prestamos_miranda__2.1.png" alt="Logo">
    <span class="logo-icon">Préstamos Miranda</span>
  </div>

  <nav class="navbar">
    <ul>
      <li><a href="#" class="active">Inicio</a></li>
      <li><a href="#">Préstamos</a></li>
      <li><a href="#">Clientes</a></li>
    </ul>
    <div class="usuario-header">
      <img src="imagenes-miranda/usuario.png" alt="Perfil">
    </div>
  </nav>
 </div>

    <div class="container">
        <div class="summary-cards">
            <div class="card">
                <span class="card-title">Capital Total</span>
                <span class="card-value">$125.000</span>
                <span class="card-info">+12.5% vs mes anterior</span>
            </div>
            <div class="card">
                <span class="card-title">Préstamos activos</span>
                <span class="card-value">32</span>
                <span class="card-info">8 nuevos este mes</span>
            </div>
            <div class="card">
                <span class="card-title">Ganancia Mensual</span>
                <span class="card-value">350.000</span>
                <span class="card-info">+7.5% vs mes anterior</span>
            </div>
            <div class="card">
                <span class="card-title">Pagos Pendientes</span>
                <span class="card-value">9</span>
                <span class="card-info">3 menos que ayer</span>
            </div>
        </div>

        <div class="recent-loans">
            <h2>Préstamos Recientes</h2>
            <table>
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Monto</th>
                        <th>Estado</th>
                        <th>Próximo Pago</th>
                        <th>Plan de Pagos</th>
                        <th>Actualizar Cliente</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Carlos Rodríguez</td>
                        <td>$5,000,000</td>
                        <td><span class="status-badge status-green">Al día</span></td>
                        <td>15 - Marzo - 2025</td>
                        <td><button class="action-button">Ver Plan</button></td>
                        <td><button class="action-button">Actualizar</button></td>
                    </tr>
                    <tr>
                        <td>Ana Martínez</td>
                        <td>$3,500,000</td>
                        <td><span class="status-badge status-red">Atrasado</span></td>
                        <td>20 - Marzo - 2025</td>
                        <td><button class="action-button">Ver Plan</button></td>
                        <td><button class="action-button">Actualizar</button></td>
                    </tr>
                </tbody>
            </table>
            <button class="new-loan-button">+ NUEVO PRÉSTAMO</button>
        </div>
    </div>

    <div class="footer">
        <div class="footer-left">
            <span>© Ayuda</span>
        </div>
        <div class="footer-right">

    </div>
</body>
</html>