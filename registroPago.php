<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Préstamos Miranda - Registrar Pago</title>
    <link rel="stylesheet" href="styleRegistroPago.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
     <div class="logo">
         <img src="imagenes-miranda/prestamos_miranda__2.1.png" alt="Logo">
         <span class="logo-icon">Préstamos Miranda</span>
     </div>
    </div>


    <div class="main-content-wrapper">
        <div class="payment-form-section">
            <div class="payment-card">
                <h2>Registra tu pago</h2>
                <form action="#" method="POST">
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" id="apellido" name="apellido" placeholder="Apellido" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>
                        </div>
                        <div class="form-group">
                            <label for="cedula">Cédula</label>
                            <input type="text" id="cedula" name="cedula" placeholder="Número de cédula" required>
                        </div>
                        <div class="form-group full-width">
                            <label for="direccion">Dirección</label>
                            <input type="text" id="direccion" name="direccion" placeholder="Tu dirección" required>
                        </div>
                        <div class="form-group full-width">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" id="telefono" name="telefono" placeholder="Ej: 3001234567" required>
                        </div>
                    </div>

                    <div class="payment-options-group">
                        <div class="payment-option">
                            <label for="pago-cuota-fija">Pagar cuota fija</label>
                            <input type="checkbox" id="pago-cuota-fija" name="pago-tipo" value="cuota-fija">
                            <input type="text" id="valor-cuota-fija" name="valor-cuota-fija" placeholder="$ Valor cuota" disabled>
                        </div>
                        <div class="payment-option">
                            <label for="pago-otro-valor">Pagar otro valor</label>
                            <input type="checkbox" id="pago-otro-valor" name="pago-tipo" value="otro-valor">
                            <input type="text" id="valor-otro-valor" name="valor-otro-valor" placeholder="digita el valor a pagar" disabled>
                        </div>
                    </div>

                    <button type="submit" class="btn-pay" onclick="mostrarPopup()">Pagar</button>
                     <!-- Modal -->
                     <div id="miModal" class="modal">
                       <div class="modal-content">
                        <span class="close" onclick="cerrarPopup()">&times;</span>
                        <h1>Gracias por pagar tu cuenta 🫂</h1>
                       </div>
                      </div>

                      <script>
                          function mostrarPopup() {
                          document.getElementById("miModal").style.display = "block";
                            }

                         function cerrarPopup() {
                         document.getElementById("miModal").style.display = "none";
                         }

                          window.onclick = function(event) {
                           const modal = document.getElementById("miModal");
                         if (event.target === modal) {
                           modal.style.display = "none";
                          }
                          }
                      </script>
                </form>
            </div>
        </div>

        <div class="payment-plan-section">
            <h3>Plan de Pagos</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Nº Cuota</th>
                            <th>Fecha Pago</th>
                            <th>Cuota</th>
                            <th>Interés</th>
                            <th>Abono a Capital</th>
                            <th>Saldo</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>15/06/2025</td>
                            <td>$500.000</td>
                            <td>$50.000</td>
                            <td>$450.000</td>
                            <td>$4.500.000</td>
                            <td><span class="status-badge status-green">Pagado</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>15/07/2025</td>
                            <td>$500.000</td>
                            <td>$45.000</td>
                            <td>$455.000</td>
                            <td>$4.045.000</td>
                            <td><span class="status-badge status-green">Pagado</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>15/08/2025</td>
                            <td>$500.000</td>
                            <td>$40.000</td>
                            <td>$460.000</td>
                            <td>$3.585.000</td>
                            <td><span class="status-badge status-red">Pendiente</span></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>15/09/2025</td>
                            <td>$500.000</td>
                            <td>$35.000</td>
                            <td>$465.000</td>
                            <td>$3.120.000</td>
                            <td><span class="status-badge status-red">Pendiente</span></td>
                        </tr>
                        </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="footer-left">
            <span>Ayuda</span>
        </div>
        <div class="footer-right">
            <span>Configuración</span>
        </div>
    </div>

    <script>
        // JavaScript para habilitar/deshabilitar los campos de valor de pago
        const cuotaFijaCheckbox = document.getElementById('pago-cuota-fija');
        const valorCuotaFijaInput = document.getElementById('valor-cuota-fija');
        const otroValorCheckbox = document.getElementById('pago-otro-valor');
        const valorOtroValorInput = document.getElementById('valor-otro-valor');

        cuotaFijaCheckbox.addEventListener('change', function() {
            if (this.checked) {
                valorCuotaFijaInput.disabled = false;
                otroValorCheckbox.checked = false; // Desmarcar el otro
                valorOtroValorInput.disabled = true;
                valorOtroValorInput.value = ''; // Limpiar valor
            } else {
                valorCuotaFijaInput.disabled = true;
                valorCuotaFijaInput.value = ''; // Limpiar valor
            }
        });

        otroValorCheckbox.addEventListener('change', function() {
            if (this.checked) {
                valorOtroValorInput.disabled = false;
                cuotaFijaCheckbox.checked = false; // Desmarcar el otro
                valorCuotaFijaInput.disabled = true;
                valorCuotaFijaInput.value = ''; // Limpiar valor
            } else {
                valorOtroValorInput.disabled = true;
                valorOtroValorInput.value = ''; // Limpiar valor
            }
        });
    </script>
</body>
</html>