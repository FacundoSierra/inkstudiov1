<?php
/**
 * CONFIGURACIÓN DEL SISTEMA DE EMAILS - InkStudio
 * 
 * IMPORTANTE: Para que los emails funcionen correctamente, debes configurar:
 * 
 * 1. EMAIL_DESTINO: Tu email donde recibirás las solicitudes
 * 2. CONFIGURACIÓN DEL SERVIDOR: Asegúrate de que tu hosting tenga habilitada la función mail()
 * 
 * ========================================
 * CONFIGURACIÓN PRINCIPAL
 * ========================================
 */

// EMAIL DONDE RECIBIRÁS LAS SOLICITUDES (OBLIGATORIO)
define('EMAIL_DESTINO', 'inkstudio2123@gmail.com');

// Nombre que aparecerá en los emails
define('NOMBRE_ESTUDIO', 'InkStudio');

// Email desde donde se envían los mensajes (puede ser el mismo)
define('EMAIL_REMITENTE', 'inkstudio2123@gmail.com');

// ========================================
// CONFIGURACIÓN DEL SERVIDOR
// ========================================

// Habilitar modo debug para ver errores
define('DEBUG_EMAILS', true);

// Tiempo de espera para envío de emails (en segundos)
define('TIMEOUT_EMAIL', 30);

// ========================================
// CONFIGURACIÓN DE SEGURIDAD
// ========================================

// Verificar que el dominio sea válido
define('VERIFICAR_DOMINIO', true);

// Lista de dominios permitidos (dejar vacío para permitir todos)
$DOMINIOS_PERMITIDOS = [
    // 'gmail.com',
    // 'hotmail.com',
    // 'outlook.com'
];

// ========================================
// FUNCIONES DE UTILIDAD
// ========================================

/**
 * Verifica si el email es válido
 */
function esEmailValido($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Verifica si el dominio está permitido
 */
function esDominioPermitido($email) {
    if (empty($DOMINIOS_PERMITIDOS)) {
        return true; // Permitir todos los dominios
    }
    
    $dominio = substr(strrchr($email, "@"), 1);
    return in_array($dominio, $DOMINIOS_PERMITIDOS);
}

/**
 * Obtiene la configuración del email
 */
function getEmailConfig() {
    return [
        'destino' => EMAIL_DESTINO,
        'remitente' => EMAIL_REMITENTE,
        'nombre_estudio' => NOMBRE_ESTUDIO,
        'debug' => DEBUG_EMAILS,
        'timeout' => TIMEOUT_EMAIL
    ];
}

/**
 * Log de errores de email
 */
function logEmailError($mensaje, $tipo = 'ERROR') {
    if (DEBUG_EMAILS) {
        error_log("[$tipo] EMAIL INKSTUDIO: $mensaje");
    }
}

/**
 * Verifica la configuración del servidor
 */
function verificarConfiguracionServidor() {
    $errores = [];
    
    // Verificar función mail()
    if (!function_exists('mail')) {
        $errores[] = 'La función mail() no está disponible en este servidor';
    }
    
    // Verificar configuración básica
    if (empty(EMAIL_DESTINO)) {
        $errores[] = 'EMAIL_DESTINO no está configurado';
    }
    
    if (!esEmailValido(EMAIL_DESTINO)) {
        $errores[] = 'EMAIL_DESTINO no es un email válido';
    }
    
    return $errores;
}

// ========================================
// VERIFICACIÓN AUTOMÁTICA
// ========================================

if (DEBUG_EMAILS) {
    $errores_config = verificarConfiguracionServidor();
    if (!empty($errores_config)) {
        logEmailError('Errores de configuración: ' . implode(', ', $errores_config), 'CONFIG');
    } else {
        logEmailError('Configuración de emails verificada correctamente', 'INFO');
    }
}

// ========================================
// INSTRUCCIONES DE CONFIGURACIÓN
// ========================================

/*
INSTRUCCIONES PARA CONFIGURAR LOS EMAILS:

1. CAMBIAR EMAIL_DESTINO:
   - Cambia 'inkstudio2123@gmail.com' por tu email real
   - Este es el email donde recibirás todas las solicitudes

2. VERIFICAR TU HOSTING:
   - Asegúrate de que tu hosting tenga habilitada la función mail() de PHP
   - Algunos hostings requieren configuración adicional

3. ALTERNATIVAS SI NO FUNCIONA:
   - Usar PHPMailer con SMTP (más confiable)
   - Configurar un servicio de email como SendGrid o Mailgun
   - Contactar al soporte de tu hosting

4. PRUEBA EL FORMULARIO:
   - Envía una solicitud de prueba
   - Verifica que llegue el email
   - Revisa la carpeta de spam si no llega

5. SOLUCIÓN DE PROBLEMAS:
   - Revisa los logs del servidor
   - Verifica que el archivo tenga permisos de escritura
   - Comprueba que la función mail() esté habilitada

EJEMPLO DE CONFIGURACIÓN CORRECTA:
define('EMAIL_DESTINO', 'tu-email@gmail.com');
define('EMAIL_REMITENTE', 'tu-email@gmail.com');

NOTA: Si usas Gmail, es posible que necesites configurar:
- Contraseñas de aplicación
- Autenticación de dos factores
- Configuración SMTP específica
*/

?>
