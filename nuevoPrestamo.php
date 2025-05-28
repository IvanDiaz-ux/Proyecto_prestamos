<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préstamos Miranda - Nuevo Préstamo</title>
    <link rel="stylesheet" href="styleNuevoPrestamo.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> </head>
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



 <div class="main-content-wrapper">
    <div class="loan-form-card">
        <h2>Nuevo Préstamo</h2>
        <p class="subtitle">Complete los datos del nuevo préstamo</p>

        <form action="#" method="POST">
            <div class="form-grid">
                <div class="form-group">
                    <label for="nombre-cliente">Nombre del Cliente</label>
                    <input type="text" id="nombre-cliente" name="nombre-cliente" required>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" id="direccion" name="direccion" required>
                </div>

                <div class="form-group">
                    <label for="documento-identidad">Documento de Identidad</label>
                    <input type="text" id="documento-identidad" name="documento-identidad" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="telefono">Número de Teléfono</label>
                    <input type="text" id="telefono" name="telefono" required>
                </div>
                <div class="form-group">
                    <label for="cuotas">Número de Cuotas</label>
                    <input type="number" id="cuotas" name="cuotas" required min="1">
                </div>

                <div class="form-group">
                    <label for="monto-prestamo">Monto del Préstamo</label>
                    <div class="input-with-currency">
                        <span>$</span>
                        <input type="number" id="monto-prestamo" name="monto-prestamo" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tasa-interes">Tasa de Interés (%)</label>
                    <select id="tasa-interes" name="tasa-interes" required>
                        <option value="">Seleccione</option>
                        <option value="1">1%</option>
                        <option value="1.5">1.5%</option>
                        <option value="2">2%</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="frecuencia-pago">Frecuencia de Pago</label>
                    <input type="text" id="frecuencia-pago" name="frecuencia-pago" value="Mensual" readonly>
                </div>
                <div class="form-group">
                    <label for="fecha-inicio">Fecha de Inicio</label>
                    <div class="input-with-icon">
                        <input type="date" id="fecha-inicio" name="fecha-inicio" required>
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="button" class="btn-secondary">Cancelar</button>
                <button type="button" class="btn-secondary">Buscar Cliente</button>
                <button type="submit" class="btn-primary">Crear Préstamo</button>
            </div>
        </form>
    </div>
 </div>
</body>
</html>