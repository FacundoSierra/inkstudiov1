<?php
/**
 * Archivo de configuración centralizada para InkStudio
 * Modifica estos valores según tus necesidades
 */

// ========================================
// INFORMACIÓN BÁSICA DEL ESTUDIO
// ========================================

// Nombre del estudio
define('STUDIO_NAME', 'InkStudio');

// Descripción del estudio
define('STUDIO_DESCRIPTION', 'Estudio de arte y diseño gráfico especializado en logotipos, portadas, publicidad visual y branding.');

// Slogan o tagline
define('STUDIO_SLOGAN', 'Transformamos ideas en arte visual');

// Año de fundación (para el footer)
define('STUDIO_FOUNDED', '2024');

// ========================================
// INFORMACIÓN DE CONTACTO
// ========================================

// Email principal del estudio
define('STUDIO_EMAIL', 'inkstudio2123@gmail.com');

// Teléfono principal
define('STUDIO_PHONE', '+34 600 000 000');

// WhatsApp (opcional)
define('STUDIO_WHATSAPP', '+34 600 000 000');

// Dirección física (opcional)
define('STUDIO_ADDRESS', 'Madrid, España');

// ========================================
// REDES SOCIALES
// ========================================

// Instagram
define('SOCIAL_INSTAGRAM', 'https://instagram.com/inkstudio');

// Facebook
define('SOCIAL_FACEBOOK', 'https://facebook.com/inkstudio');

// Twitter/X
define('SOCIAL_TWITTER', 'https://twitter.com/inkstudio');

// LinkedIn
define('SOCIAL_LINKEDIN', 'https://linkedin.com/company/inkstudio');

// Behance/Dribbble
define('SOCIAL_PORTFOLIO', 'https://behance.net/inkstudio');

// ========================================
// SERVICIOS PRINCIPALES
// ========================================

// Lista de servicios principales
$SERVICES = [
    'logo' => [
        'name' => 'Logotipos',
        'icon' => 'fas fa-paint-brush',
        'description' => 'Identidades visuales memorables y versátiles',
        'features' => ['Diseño único y personalizado', 'Versiones para diferentes usos', 'Archivos en múltiples formatos']
    ],
    'portada' => [
        'name' => 'Portadas',
        'icon' => 'fas fa-image',
        'description' => 'Diseños impactantes para álbumes, libros o perfiles digitales',
        'features' => ['Conceptos creativos únicos', 'Adaptación a diferentes formatos', 'Diseño que destaca']
    ],
    'publicidad' => [
        'name' => 'Publicidad',
        'icon' => 'fas fa-bullhorn',
        'description' => 'Creatividades impactantes para redes sociales, impresión o campañas digitales',
        'features' => ['Diseños para múltiples plataformas', 'Optimización para conversión', 'Coherencia visual de marca']
    ],
    'evento' => [
        'name' => 'Eventos',
        'icon' => 'fas fa-calendar-alt',
        'description' => 'Diseños exclusivos para promociones de eventos y presentaciones visuales',
        'features' => ['Material promocional completo', 'Diseños adaptables', 'Impacto visual inmediato']
    ],
    'cartel' => [
        'name' => 'Carteles',
        'icon' => 'fas fa-calendar',
        'description' => 'Diseño de carteles y material promocional',
        'features' => ['Diseños llamativos', 'Optimizados para impresión', 'Mensaje claro y directo']
    ]
];

// ========================================
// CONFIGURACIÓN DEL FORMULARIO
// ========================================

// Tiempo de respuesta prometido (en horas)
define('RESPONSE_TIME', '24-48');

// Tamaño máximo de archivo (en MB)
define('MAX_FILE_SIZE', 5);

// Tipos de archivo permitidos
$ALLOWED_FILE_TYPES = [
    'image/jpeg',
    'image/png', 
    'image/gif',
    'image/webp',
    'application/pdf'
];

// ========================================
// CONFIGURACIÓN DEL SITIO
// ========================================

// URL del sitio (sin barra final)
define('SITE_URL', 'https://www.inkstudio.com');

// Idioma principal
define('SITE_LANGUAGE', 'es');

// Zona horaria
define('TIMEZONE', 'Europe/Madrid');

// Modo de desarrollo (true = desarrollo, false = producción)
define('DEBUG_MODE', false);

// ========================================
// CONFIGURACIÓN DE EMAILS
// ========================================

// Asunto por defecto para emails de contacto
define('DEFAULT_EMAIL_SUBJECT', 'Nueva solicitud de diseño - InkStudio');

// Nombre del remitente
define('EMAIL_FROM_NAME', 'InkStudio');

// Email del remitente
define('EMAIL_FROM_EMAIL', 'inkstudio2123@gmail.com');

// ========================================
// CONFIGURACIÓN DE SEO
// ========================================

// Palabras clave principales
define('SEO_KEYWORDS', 'diseño gráfico, logotipos, portadas, publicidad, branding, Madrid, España');

// Autor del sitio
define('SEO_AUTHOR', 'InkStudio');

// ========================================
// FUNCIONES DE UTILIDAD
// ========================================

/**
 * Obtiene la URL completa del sitio
 */
function getSiteUrl($path = '') {
    $url = rtrim(SITE_URL, '/');
    $path = ltrim($path, '/');
    return $path ? $url . '/' . $path : $url;
}

/**
 * Obtiene la información de un servicio
 */
function getServiceInfo($serviceKey) {
    global $SERVICES;
    return isset($SERVICES[$serviceKey]) ? $SERVICES[$serviceKey] : null;
}

/**
 * Obtiene la lista de todos los servicios
 */
function getAllServices() {
    global $SERVICES;
    return $SERVICES;
}

/**
 * Formatea el teléfono para enlaces
 */
function formatPhoneForLink($phone) {
    return str_replace([' ', '+', '-'], '', $phone);
}

/**
 * Obtiene el año actual
 */
function getCurrentYear() {
    return date('Y');
}

/**
 * Verifica si estamos en modo desarrollo
 */
function isDebugMode() {
    return DEBUG_MODE;
}

// ========================================
// CONFIGURACIÓN DE ZONA HORARIA
// ========================================

date_default_timezone_set(TIMEZONE);

// ========================================
// CONFIGURACIÓN DE ERRORES
// ========================================

if (DEBUG_MODE) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// ========================================
// CONFIGURACIÓN DE SEGURIDAD
// ========================================

// Headers de seguridad básicos
if (!headers_sent()) {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: DENY');
    header('X-XSS-Protection: 1; mode=block');
    
    if (!DEBUG_MODE) {
        header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
    }
}

// ========================================
// INFORMACIÓN DE VERSIÓN
// ========================================

define('SITE_VERSION', '1.0.0');
define('LAST_UPDATE', '2024-08-16');

// ========================================
// CONFIGURACIÓN DE ANÁLITICAS
// ========================================

// Google Analytics ID (opcional)
define('GA_TRACKING_ID', '');

// Facebook Pixel ID (opcional)
define('FB_PIXEL_ID', '');

// ========================================
// CONFIGURACIÓN DE REDES SOCIALES
// ========================================

// Meta tags para redes sociales
define('SOCIAL_IMAGE', getSiteUrl('assets/img/social-share.jpg'));
define('SOCIAL_TITLE', STUDIO_NAME . ' - ' . STUDIO_SLOGAN);
define('SOCIAL_DESCRIPTION', STUDIO_DESCRIPTION);

// ========================================
// CONFIGURACIÓN DE CONTENIDO
// ========================================

// Textos personalizables
$TEXTS = [
    'hero_title' => 'Transformamos ideas en <span class="text-accent">arte visual</span>',
    'hero_subtitle' => 'Somos un estudio humilde pero apasionado por crear diseños únicos que cuenten tu historia.',
    'cta_primary' => 'Solicita tu diseño',
    'cta_secondary' => 'Ver servicios',
    'contact_title' => 'Cuéntanos tu idea',
    'contact_subtitle' => 'Cada gran diseño comienza con una conversación.',
    'footer_text' => 'Diseño gráfico profesional y accesible.'
];

/**
 * Obtiene un texto personalizable
 */
function getText($key) {
    global $TEXTS;
    return isset($TEXTS[$key]) ? $TEXTS[$key] : '';
}

// ========================================
// CONFIGURACIÓN DE ANIMACIONES
// ========================================

// Habilitar/deshabilitar animaciones
define('ENABLE_ANIMATIONS', true);

// Velocidad de las animaciones (en segundos)
define('ANIMATION_DURATION', 0.6);

// ========================================
// CONFIGURACIÓN DE CACHE
// ========================================

// Habilitar cache de archivos estáticos
define('ENABLE_CACHE', false);

// Tiempo de expiración del cache (en segundos)
define('CACHE_EXPIRY', 3600);

// ========================================
// INFORMACIÓN DE LICENCIA
// ========================================

define('LICENSE_TYPE', 'MIT');
define('LICENSE_URL', 'https://opensource.org/licenses/MIT');

// ========================================
// FIN DEL ARCHIVO DE CONFIGURACIÓN
// ========================================

// Mensaje de confirmación (solo en modo debug)
if (DEBUG_MODE) {
    error_log('InkStudio config loaded successfully. Version: ' . SITE_VERSION);
}
?>
