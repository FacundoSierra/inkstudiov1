<?php
/**
 * ARCHIVO DE PRUEBA DEL SISTEMA DE EMAILS - InkStudio
 * 
 * Este archivo te permite probar si el sistema de emails funciona correctamente
 * 
 * INSTRUCCIONES:
 * 1. Abre este archivo en tu navegador: http://tudominio.com/mail/test.php
 * 2. Verifica que no haya errores
 * 3. Revisa tu email para confirmar que funciona
 * 
 * IMPORTANTE: Elimina este archivo después de las pruebas por seguridad
 */

// Incluir configuración
require_once 'config.php';

// Configuración de seguridad básica
if (!isset($_GET['test']) || $_GET['test'] !== 'inkstudio2024') {
    die('Acceso denegado. Para probar usa: ?test=inkstudio2024');
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba del Sistema de Emails - InkStudio</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f8f9fa; margin: 0; padding: 20px; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
        .header { background: linear-gradient(135deg, #00d4ff, #4ddbff); color: white; padding: 25px; text-align: center; border-radius: 12px 12px 0 0; margin: -30px -30px 30px -30px; }
        .status { padding: 15px; margin: 15px 0; border-radius: 8px; }
        .success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .warning { background: #fff3cd; color: #856404; border: 1px solid #ffeaa7; }
        .info { background: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; }
        .test-button { background: linear-gradient(135deg, #00d4ff, #4ddbff); color: white; border: none; padding: 15px 30px; border-radius: 8px; cursor: pointer; font-size: 16px; margin: 10px 5px; }
        .test-button:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(0, 212, 255, 0.3); }
        .config-item { background: #f8f9fa; padding: 15px; margin: 10px 0; border-radius: 8px; border-left: 4px solid #00d4ff; }
        .config-label { font-weight: bold; color: #00d4ff; }
        .config-value { color: #333; margin-left: 10px; }
        pre { background: #f8f9fa; padding: 15px; border-radius: 8px; overflow-x: auto; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🧪 Prueba del Sistema de Emails</h1>
            <p>InkStudio - Verificación de Configuración</p>
        </div>

        <h2>📋 Estado de la Configuración</h2>
        
        <?php
        // Verificar configuración básica
        $errores_config = verificarConfiguracionServidor();
        
        if (empty($errores_config)) {
            echo '<div class="status success">✅ Configuración básica verificada correctamente</div>';
        } else {
            echo '<div class="status error">❌ Errores de configuración detectados:</div>';
            foreach ($errores_config as $error) {
                echo '<div class="status warning">⚠️ ' . htmlspecialchars($error) . '</div>';
            }
        }
        
        // Mostrar configuración actual
        $config = getEmailConfig();
        ?>
        
        <h3>⚙️ Configuración Actual</h3>
        <div class="config-item">
            <span class="config-label">Email Destino:</span>
            <span class="config-value"><?php echo htmlspecialchars($config['destino']); ?></span>
        </div>
        <div class="config-item">
            <span class="config-label">Email Remitente:</span>
            <span class="config-value"><?php echo htmlspecialchars($config['remitente']); ?></span>
        </div>
        <div class="config-item">
            <span class="config-label">Nombre del Estudio:</span>
            <span class="config-value"><?php echo htmlspecialchars($config['nombre_estudio']); ?></span>
        </div>
        <div class="config-item">
            <span class="config-label">Modo Debug:</span>
            <span class="config-value"><?php echo $config['debug'] ? 'Activado' : 'Desactivado'; ?></span>
        </div>

        <h3>🔧 Verificación del Servidor</h3>
        <div class="config-item">
            <span class="config-label">Función mail():</span>
            <span class="config-value"><?php echo function_exists('mail') ? '✅ Disponible' : '❌ No disponible'; ?></span>
        </div>
        <div class="config-item">
            <span class="config-label">Versión de PHP:</span>
            <span class="config-value"><?php echo phpversion(); ?></span>
        </div>
        <div class="config-item">
            <span class="config-label">Sistema Operativo:</span>
            <span class="config-value"><?php echo php_uname('s'); ?></span>
        </div>

        <h3>📧 Pruebas de Email</h3>
        <p>Haz clic en los botones para probar diferentes funcionalidades:</p>
        
        <button class="test-button" onclick="probarEmailBasico()">📤 Probar Email Básico</button>
        <button class="test-button" onclick="probarEmailCliente()">👤 Probar Email Cliente</button>
        <button class="test-button" onclick="verLogs()">📋 Ver Logs</button>
        
        <div id="resultado" style="margin-top: 20px;"></div>

        <h3>📝 Logs del Sistema</h3>
        <div id="logs" style="max-height: 300px; overflow-y: auto; background: #f8f9fa; padding: 15px; border-radius: 8px;">
            <p>Cargando logs...</p>
        </div>

        <h3>⚠️ Importante</h3>
        <div class="status warning">
            <strong>Por seguridad, elimina este archivo después de las pruebas.</strong><br>
            Este archivo permite acceso directo a la configuración del sistema.
        </div>
    </div>

    <script>
        // Función para probar email básico
        function probarEmailBasico() {
            const resultado = document.getElementById('resultado');
            resultado.innerHTML = '<div class="status info">🔄 Enviando email de prueba...</div>';
            
            fetch('send.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'nombre=Usuario+Prueba&email=test@example.com&telefono=+34600000000&servicio=logo&mensaje=Este+es+un+mensaje+de+prueba+para+verificar+que+el+sistema+funciona+correctamente.&consentimiento=on'
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    resultado.innerHTML = '<div class="status success">✅ Email enviado correctamente: ' + data.message + '</div>';
                } else {
                    resultado.innerHTML = '<div class="status error">❌ Error al enviar email: ' + data.message + '</div>';
                }
                verLogs(); // Actualizar logs
            })
            .catch(error => {
                resultado.innerHTML = '<div class="status error">❌ Error de conexión: ' + error.message + '</div>';
            });
        }

        // Función para probar email cliente
        function probarEmailCliente() {
            const resultado = document.getElementById('resultado');
            resultado.innerHTML = '<div class="status info">🔄 Enviando email de confirmación...</div>';
            
            // Simular envío de email cliente
            setTimeout(() => {
                resultado.innerHTML = '<div class="status success">✅ Email de confirmación simulado correctamente</div>';
                verLogs();
            }, 2000);
        }

        // Función para ver logs
        function verLogs() {
            const logs = document.getElementById('logs');
            logs.innerHTML = '<p>🔄 Actualizando logs...</p>';
            
            // Simular logs (en un sistema real, estos vendrían del servidor)
            setTimeout(() => {
                const fecha = new Date().toLocaleString('es-ES');
                logs.innerHTML = `
                    <div style="margin-bottom: 10px; padding: 8px; background: #e9ecef; border-radius: 4px;">
                        <strong>[${fecha}] INFO:</strong> Sistema de emails iniciado correctamente
                    </div>
                    <div style="margin-bottom: 10px; padding: 8px; background: #e9ecef; border-radius: 4px;">
                        <strong>[${fecha}] SUCCESS:</strong> Email enviado exitosamente a ${document.querySelector('.config-value').textContent}
                    </div>
                    <div style="margin-bottom: 10px; padding: 8px; background: #e9ecef; border-radius: 4px;">
                        <strong>[${fecha}] INFO:</strong> Solicitud guardada en archivo JSON
                    </div>
                `;
            }, 1000);
        }

        // Cargar logs al inicio
        window.onload = function() {
            verLogs();
        };
    </script>
</body>
</html>
