# 📧 Sistema de Emails - InkStudio

## 🎯 Descripción

Este sistema permite que InkStudio reciba solicitudes de trabajo a través del formulario de contacto y envíe confirmaciones automáticas a los clientes.

## ⚙️ Configuración Rápida

### 1. Configurar Email Destino

Edita el archivo `mail/config.php` y cambia:

```php
define('EMAIL_DESTINO', 'tu-email@gmail.com');
define('EMAIL_REMITENTE', 'tu-email@gmail.com');
```

**Reemplaza `tu-email@gmail.com` con tu email real.**

### 2. Verificar Funcionamiento

1. Abre en tu navegador: `http://tudominio.com/mail/test.php?test=inkstudio2024`
2. Verifica que no haya errores
3. Haz una prueba de envío
4. Revisa tu email

### 3. Eliminar Archivo de Prueba

**IMPORTANTE**: Después de las pruebas, elimina `mail/test.php` por seguridad.

## 🔧 Configuración Detallada

### Archivos del Sistema

- **`config.php`** - Configuración principal de emails
- **`send.php`** - Procesamiento y envío de emails
- **`test.php`** - Archivo de pruebas (eliminar después)

### Variables de Configuración

```php
// Email donde recibirás las solicitudes
define('EMAIL_DESTINO', 'tu-email@gmail.com');

// Email desde donde se envían los mensajes
define('EMAIL_REMITENTE', 'tu-email@gmail.com');

// Nombre del estudio
define('NOMBRE_ESTUDIO', 'InkStudio');

// Modo debug (true = ver errores, false = ocultar)
define('DEBUG_EMAILS', true);
```

## 📧 Cómo Funciona

### 1. Cliente Envía Formulario
- Rellena el formulario de contacto
- Selecciona tipo de servicio
- Adjunta archivos (opcional)

### 2. Sistema Procesa Solicitud
- Valida todos los datos
- Procesa archivos adjuntos
- Prepara emails HTML profesionales

### 3. Envío Automático
- **Email al Estudio**: Con todos los detalles de la solicitud
- **Email al Cliente**: Confirmación automática
- **Almacenamiento**: Guarda solicitud en `solicitudes.json`

## 🚨 Solución de Problemas

### Emails No Llegan

1. **Verificar Configuración del Servidor**
   - Función `mail()` habilitada
   - Servidor SMTP configurado
   - Permisos de escritura correctos

2. **Verificar Email Destino**
   - Email correcto en `config.php`
   - Revisar carpeta de spam
   - Verificar filtros del servidor

3. **Alternativas si No Funciona**
   - Usar PHPMailer con SMTP
   - Configurar SendGrid o Mailgun
   - Contactar soporte del hosting

### Errores Comunes

- **"Función mail() no disponible"**: Contactar hosting
- **"Email no válido"**: Verificar formato en config.php
- **"Permiso denegado"**: Verificar permisos de archivos

## 🔒 Seguridad

### Medidas Implementadas

- Validación de entrada del servidor
- Headers de seguridad HTTP
- Sanitización de datos
- Validación de archivos
- Logs de actividad

### Recomendaciones

- Mantener `DEBUG_EMAILS = false` en producción
- Eliminar archivo `test.php` después de pruebas
- Usar HTTPS en producción
- Monitorear logs del servidor

## 📱 Pruebas

### Archivo de Prueba

El archivo `test.php` permite:

- ✅ Verificar configuración
- ✅ Probar envío de emails
- ✅ Ver logs del sistema
- ✅ Diagnosticar problemas

### Uso

```
http://tudominio.com/mail/test.php?test=inkstudio2024
```

### Después de las Pruebas

```bash
# Eliminar archivo de prueba
rm mail/test.php
```

## 🌐 Hosting Recomendado

### Hostings que Funcionan Bien

- **Hostinger**: Soporte nativo para PHP mail()
- **SiteGround**: Configuración SMTP incluida
- **Bluehost**: Función mail() habilitada
- **DigitalOcean**: Control total del servidor

### Hostings con Limitaciones

- **Netlify**: No soporta PHP
- **GitHub Pages**: Solo estático
- **Vercel**: No soporta PHP

## 📞 Soporte

### Si Necesitas Ayuda

1. **Revisar logs**: Activar `DEBUG_EMAILS = true`
2. **Verificar hosting**: Contactar soporte técnico
3. **Alternativas**: Usar servicios de email externos
4. **Documentación**: Revisar comentarios en el código

### Contacto

Para soporte técnico específico de InkStudio, revisa la documentación principal del proyecto.

---

**InkStudio** - Sistema de Emails Profesional ✨

*Configurado para recibir solicitudes 24/7*
