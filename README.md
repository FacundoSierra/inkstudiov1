# 🎨 InkStudio - Sitio Web Profesional de Diseño Gráfico

Un sitio web elegante y profesional para ofrecer servicios de diseño gráfico, creado con PHP, Bootstrap y CSS moderno.

## ✨ Características

- **Diseño Responsivo**: Se adapta perfectamente a todos los dispositivos
- **Formulario de Contacto Funcional**: Sistema completo de envío de emails
- **Portafolio Atractivo**: Muestra de trabajos con efectos visuales
- **Navegación Intuitiva**: Menú de navegación fijo y fácil de usar
- **Animaciones Suaves**: Efectos visuales modernos y atractivos
- **SEO Optimizado**: Meta tags y estructura semántica
- **Rápido y Eficiente**: Código optimizado para mejor rendimiento

## 🚀 Instalación

### Requisitos del Sistema

- PHP 7.4 o superior
- Servidor web (Apache, Nginx, o servidor local como XAMPP)
- Acceso a funciones de email del servidor

### Pasos de Instalación

1. **Clona o descarga** el proyecto en tu servidor web
2. **Configura el servidor** para que apunte al directorio del proyecto
3. **Configura el email** en `mail/send.php` (línea 189)
4. **Prueba el formulario** de contacto

### Configuración del Email

Edita el archivo `mail/send.php` y cambia la línea 189:

```php
// Cambia 'tu-email@dominio.com' por tu email real
if (mail('tu-email@dominio.com', $asunto, $contenido_html, implode("\r\n", $headers))) {
    $email_enviado = true;
}
```

## 📁 Estructura del Proyecto

```
inkstudio/
├── assets/
│   ├── css/
│   │   └── style.css          # Estilos principales
│   └── img/                   # Imágenes del sitio
├── includes/
│   ├── header.php             # Encabezado común
│   └── footer.php             # Pie de página común
├── mail/
│   └── send.php               # Sistema de envío de emails
├── index.php                  # Página principal
├── contacto.php               # Página de contacto
├── logos.php                  # Servicio de logos
├── portadas.php               # Servicio de portadas
├── carteles.php               # Servicio de carteles
├── publicidad.php             # Servicio de publicidad
├── eventos.php                # Servicio de eventos
└── README.md                  # Este archivo
```

## 🎯 Páginas del Sitio

### Página Principal (`index.php`)
- Hero section atractivo
- Servicios principales
- Proceso de trabajo
- Llamadas a la acción

### Página de Contacto (`contacto.php`)
- Formulario completo con validación
- Subida de archivos
- Política de privacidad
- Información adicional del servicio

### Páginas de Servicios
- **Logos**: Diseño de logotipos y marcas
- **Portadas**: Diseño de portadas para álbumes, libros
- **Carteles**: Diseño de carteles y branding
- **Publicidad**: Creatividades para campañas
- **Eventos**: Diseño para eventos y promociones

## 🔧 Personalización

### Colores
Los colores principales están definidos en variables CSS en `assets/css/style.css`:

```css
:root {
  --color-accent: #00838F;        /* Color principal */
  --color-accent-light: #00ACC1;  /* Color secundario */
  --color-text: #f2f2f2;          /* Texto principal */
  --color-muted: #999;            /* Texto secundario */
}
```

### Contenido
- Edita los archivos PHP para cambiar textos y contenido
- Modifica las imágenes en `assets/img/`
- Personaliza los servicios según tus necesidades

### Formulario
El formulario de contacto incluye:
- Nombre, email, teléfono
- Tipo de servicio
- Mensaje detallado
- Subida de archivos de referencia
- Consentimiento de privacidad

## 📧 Sistema de Emails

### Funcionalidades
- **Validación completa** de todos los campos
- **Envío de email** al estudio
- **Email de confirmación** al cliente
- **Almacenamiento** de solicitudes en JSON
- **Seguridad** contra ataques básicos

### Configuración del Servidor
Para que los emails funcionen correctamente, asegúrate de que tu servidor tenga configurado:
- Función `mail()` de PHP habilitada
- Servidor SMTP configurado (recomendado)
- Permisos de escritura en el directorio

## 🌐 Despliegue en Hosting

### Pasos para Producción
1. **Sube los archivos** a tu hosting
2. **Configura el dominio** para que apunte al directorio
3. **Verifica permisos** de escritura para el archivo JSON
4. **Prueba el formulario** de contacto
5. **Configura SSL** para mayor seguridad

### Hosting Recomendado
- **Shared Hosting**: Hostinger, SiteGround, Bluehost
- **VPS**: DigitalOcean, Linode, Vultr
- **Cloud**: AWS, Google Cloud, Azure

## 🔒 Seguridad

### Medidas Implementadas
- Validación de entrada en el servidor
- Headers de seguridad HTTP
- Sanitización de datos
- Validación de archivos
- Protección CSRF básica

### Recomendaciones Adicionales
- Configura HTTPS/SSL
- Usa un firewall del servidor
- Mantén PHP actualizado
- Monitorea logs del servidor

## 📱 Responsive Design

El sitio está optimizado para:
- **Desktop**: 1200px y superior
- **Tablet**: 768px - 1199px
- **Mobile**: 320px - 767px

## 🎨 Personalización del Diseño

### Modificar Estilos
- Edita `assets/css/style.css`
- Cambia variables CSS para colores
- Modifica animaciones y transiciones
- Ajusta breakpoints responsive

### Agregar Nuevas Páginas
1. Crea un nuevo archivo PHP
2. Incluye header y footer
3. Agrega contenido personalizado
4. Actualiza la navegación en `includes/header.php`

## 🚀 Optimización

### Rendimiento
- CSS y JS minificados
- Imágenes optimizadas
- Lazy loading de imágenes
- Código PHP eficiente

### SEO
- Meta tags optimizados
- Estructura semántica HTML5
- URLs amigables
- Sitemap generado automáticamente

## 📞 Soporte

### Problemas Comunes
1. **Emails no se envían**: Verifica configuración del servidor
2. **Formulario no funciona**: Revisa permisos de escritura
3. **Diseño roto**: Verifica que Bootstrap esté cargando
4. **Imágenes no aparecen**: Verifica rutas de archivos

### Contacto
Para soporte técnico o personalizaciones:
- Revisa la documentación
- Consulta los comentarios en el código
- Verifica logs del servidor

## 📄 Licencia

Este proyecto está disponible para uso personal y comercial. Se permite modificar y distribuir libremente.

## 🙏 Agradecimientos

- Bootstrap por el framework CSS
- Font Awesome por los iconos
- Google Fonts por las tipografías
- Comunidad PHP por el soporte

---

**InkStudio** - Transformando ideas en arte visual ✨

*Creado con ❤️ para diseñadores apasionados*
