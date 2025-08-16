<?php
// Incluir configuración de emails
require_once 'config.php';

// Configuración de seguridad
header('Content-Type: application/json');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');

// Verificar que sea una petición POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
    exit;
}

// Función para limpiar y validar datos
function cleanInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Función para validar email
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Función para validar teléfono (formato español)
function isValidPhone($phone) {
    // Acepta formatos: +34 600 000 000, 600 000 000, 600000000
    $phone = preg_replace('/\s+/', '', $phone);
    return preg_match('/^(\+34\s?)?[6789]\d{8}$/', $phone);
}

try {
    // Obtener y validar datos del formulario
    $nombre = isset($_POST['nombre']) ? cleanInput($_POST['nombre']) : '';
    $email = isset($_POST['email']) ? cleanInput($_POST['email']) : '';
    $telefono = isset($_POST['telefono']) ? cleanInput($_POST['telefono']) : '';
    $servicio = isset($_POST['servicio']) ? cleanInput($_POST['servicio']) : '';
    $mensaje = isset($_POST['mensaje']) ? cleanInput($_POST['mensaje']) : '';
    $consentimiento = isset($_POST['consentimiento']) ? true : false;

    // Validaciones
    $errors = [];

    if (empty($nombre) || strlen($nombre) < 2) {
        $errors[] = 'El nombre debe tener al menos 2 caracteres';
    }

    if (empty($email) || !isValidEmail($email)) {
        $errors[] = 'El email no es válido';
    }

    if (!empty($telefono) && !isValidPhone($telefono)) {
        $errors[] = 'El teléfono no tiene un formato válido';
    }

    if (empty($servicio)) {
        $errors[] = 'Debe seleccionar un tipo de servicio';
    }

    if (empty($mensaje) || strlen($mensaje) < 10) {
        $errors[] = 'El mensaje debe tener al menos 10 caracteres';
    }

    if (!$consentimiento) {
        $errors[] = 'Debe aceptar la política de privacidad';
    }

    // Si hay errores, devolverlos
    if (!empty($errors)) {
        http_response_code(400);
        echo json_encode([
            'success' => false, 
            'message' => 'Por favor, corrija los siguientes errores:',
            'errors' => $errors
        ]);
        exit;
    }

    // Procesar archivo si se subió
    $archivo_info = '';
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        $archivo = $_FILES['archivo'];
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp', 'application/pdf'];
        $max_size = 5 * 1024 * 1024; // 5MB

        if (!in_array($archivo['type'], $allowed_types)) {
            $errors[] = 'Tipo de archivo no permitido. Solo se aceptan imágenes y PDFs.';
        }

        if ($archivo['size'] > $max_size) {
            $errors[] = 'El archivo es demasiado grande. Máximo 5MB.';
        }

        if (empty($errors)) {
            $archivo_info = "Archivo adjunto: " . $archivo['name'] . " (" . number_format($archivo['size'] / 1024, 2) . " KB)";
        }
    }

    // Si hay errores con el archivo, devolverlos
    if (!empty($errors)) {
        http_response_code(400);
        echo json_encode([
            'success' => false, 
            'message' => 'Por favor, corrija los siguientes errores:',
            'errors' => $errors
        ]);
        exit;
    }

    // Mapear servicios a nombres legibles
    $servicios_nombres = [
        'logo' => 'Logotipo',
        'portada' => 'Portada',
        'cartel' => 'Cartel / Branding',
        'publicidad' => 'Publicidad',
        'evento' => 'Evento'
    ];

    $servicio_nombre = $servicios_nombres[$servicio] ?? $servicio;

    // Preparar contenido del email
    $asunto = "Nueva solicitud de diseño - " . $servicio_nombre . " - " . NOMBRE_ESTUDIO;
    
    $contenido_html = "
    <html>
    <head>
        <style>
            body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #333; background: #f8f9fa; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #00d4ff, #4ddbff); color: white; padding: 25px; text-align: center; border-radius: 12px 12px 0 0; }
            .content { background: white; padding: 30px; border-radius: 0 0 12px 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
            .field { margin-bottom: 20px; padding: 15px; background: #f8f9fa; border-radius: 8px; }
            .label { font-weight: bold; color: #00d4ff; display: block; margin-bottom: 5px; }
            .value { color: #333; }
            .footer { text-align: center; margin-top: 25px; color: #666; font-size: 12px; padding: 20px; background: #f8f9fa; border-radius: 8px; }
            .highlight { background: linear-gradient(135deg, #00d4ff, #4ddbff); color: white; padding: 20px; border-radius: 8px; margin: 20px 0; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>🎨 Nueva Solicitud de Diseño - " . NOMBRE_ESTUDIO . "</h2>
                <p>¡Tienes una nueva solicitud de trabajo!</p>
            </div>
            <div class='content'>
                <div class='field'>
                    <span class='label'>👤 Nombre:</span>
                    <span class='value'>$nombre</span>
                </div>
                <div class='field'>
                    <span class='label'>📧 Email:</span>
                    <span class='value'>$email</span>
                </div>";

    if (!empty($telefono)) {
        $contenido_html .= "
                <div class='field'>
                    <span class='label'>📱 Teléfono:</span>
                    <span class='value'>$telefono</span>
                </div>";
    }

    $contenido_html .= "
                <div class='field'>
                    <span class='label'>🎯 Servicio:</span>
                    <span class='value'>$servicio_nombre</span>
                </div>
                <div class='highlight'>
                    <span class='label'>💬 Mensaje:</span>
                    <div class='value' style='margin-top: 10px;'>$mensaje</div>
                </div>";

    if (!empty($archivo_info)) {
        $contenido_html .= "
                <div class='field'>
                    <span class='label'>📎 Archivo:</span>
                    <span class='value'>$archivo_info</span>
                </div>";
    }

    $contenido_html .= "
                <div class='field'>
                    <span class='label'>⏰ Fecha:</span>
                    <span class='value'>" . date('d/m/Y H:i:s') . "</span>
                </div>
                <div class='field'>
                    <span class='label'>🌐 IP:</span>
                    <span class='value'>" . ($_SERVER['REMOTE_ADDR'] ?? 'Desconocida') . "</span>
                </div>
            </div>
            <div class='footer'>
                <p>Este mensaje fue enviado desde el formulario de contacto de " . NOMBRE_ESTUDIO . "</p>
                <p>Responde a este email para contactar directamente con el cliente</p>
            </div>
        </div>
    </body>
    </html>";

    // Configurar headers del email
    $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . NOMBRE_ESTUDIO . ' <' . EMAIL_REMITENTE . '>',
        'Reply-To: ' . $email,
        'X-Mailer: PHP/' . phpversion(),
        'X-Priority: 1',
        'X-MSMail-Priority: High'
    ];

    // Email para el cliente (confirmación)
    $asunto_cliente = "Confirmación de solicitud - " . NOMBRE_ESTUDIO;
    $contenido_cliente = "
    <html>
    <head>
        <style>
            body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #333; background: #f8f9fa; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #00d4ff, #4ddbff); color: white; padding: 25px; text-align: center; border-radius: 12px 12px 0 0; }
            .content { background: white; padding: 30px; border-radius: 0 0 12px 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); }
            .footer { text-align: center; margin-top: 25px; color: #666; font-size: 12px; padding: 20px; background: #f8f9fa; border-radius: 8px; }
            .highlight { background: linear-gradient(135deg, #00d4ff, #4ddbff); color: white; padding: 20px; border-radius: 8px; margin: 20px 0; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>🎨 ¡Gracias por tu solicitud!</h2>
                <p>Tu proyecto está en buenas manos</p>
            </div>
            <div class='content'>
                <p>Hola <strong>$nombre</strong>,</p>
                <p>Hemos recibido tu solicitud para <strong>$servicio_nombre</strong> y estamos muy emocionados de trabajar contigo.</p>
                
                <div class='highlight'>
                    <h3>📋 Resumen de tu solicitud:</h3>
                    <p><strong>Servicio:</strong> $servicio_nombre</p>
                    <p><strong>Fecha:</strong> " . date('d/m/Y H:i:s') . "</p>
                </div>
                
                <p>Nuestro equipo revisará tu proyecto y te contactaremos en las próximas 24-48 horas para discutir los detalles y comenzar a crear algo extraordinario.</p>
                
                <p>Mientras tanto, si tienes alguna pregunta urgente, no dudes en responder a este email.</p>
                
                <p>¡Gracias por elegir " . NOMBRE_ESTUDIO . "!</p>
                
                <p>Saludos,<br><strong>El equipo de " . NOMBRE_ESTUDIO . "</strong></p>
            </div>
            <div class='footer'>
                <p>Este es un email automático, por favor no respondas a esta dirección</p>
                <p>Para consultas, responde al email que te enviaremos pronto</p>
            </div>
        </div>
    </body>
    </html>";

    // Intentar enviar emails
    $email_enviado = false;
    $email_cliente_enviado = false;

    // Email para el estudio
    if (mail(EMAIL_DESTINO, $asunto, $contenido_html, implode("\r\n", $headers))) {
        $email_enviado = true;
        logEmailError("Email enviado exitosamente a " . EMAIL_DESTINO, 'SUCCESS');
    } else {
        logEmailError("Error al enviar email a " . EMAIL_DESTINO, 'ERROR');
    }

    // Email de confirmación para el cliente
    $headers_cliente = [
        'MIME-Version: 1.0',
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . NOMBRE_ESTUDIO . ' <' . EMAIL_REMITENTE . '>',
        'X-Mailer: PHP/' . phpversion()
    ];

    if (mail($email, $asunto_cliente, $contenido_cliente, implode("\r\n", $headers_cliente))) {
        $email_cliente_enviado = true;
        logEmailError("Email de confirmación enviado exitosamente a " . $email, 'SUCCESS');
    } else {
        logEmailError("Error al enviar email de confirmación a " . $email, 'ERROR');
    }

    // Guardar en base de datos o archivo (opcional)
    $datos_solicitud = [
        'fecha' => date('Y-m-d H:i:s'),
        'nombre' => $nombre,
        'email' => $email,
        'telefono' => $telefono,
        'servicio' => $servicio,
        'mensaje' => $mensaje,
        'archivo' => $archivo_info,
        'ip' => $_SERVER['REMOTE_ADDR'] ?? 'Desconocida',
        'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'Desconocido'
    ];

    // Guardar en archivo JSON (para seguimiento)
    $solicitudes_file = '../solicitudes.json';
    $solicitudes = [];
    
    if (file_exists($solicitudes_file)) {
        $solicitudes = json_decode(file_get_contents($solicitudes_file), true) ?: [];
    }
    
    $solicitudes[] = $datos_solicitud;
    
    if (file_put_contents($solicitudes_file, json_encode($solicitudes, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
        logEmailError("Solicitud guardada en archivo JSON", 'INFO');
    } else {
        logEmailError("Error al guardar solicitud en archivo JSON", 'ERROR');
    }

    // Respuesta exitosa
    echo json_encode([
        'success' => true,
        'message' => '¡Solicitud enviada con éxito! Te contactaremos muy pronto.',
        'email_enviado' => $email_enviado,
        'email_cliente_enviado' => $email_cliente_enviado,
        'config' => getEmailConfig()
    ]);

} catch (Exception $e) {
    // Log del error
    logEmailError("Error en formulario de contacto: " . $e->getMessage(), 'EXCEPTION');
    
    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Ha ocurrido un error inesperado. Por favor, inténtalo de nuevo más tarde.',
        'debug' => DEBUG_EMAILS ? $e->getMessage() : null
    ]);
}
?>
