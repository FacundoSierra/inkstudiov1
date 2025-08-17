<?php
  $title = "Contacto | InkStudio - Solicita tu Diseño";
  $description = "Cuéntanos tu idea y solicita un diseño personalizado con calidad profesional. Estamos aquí para crear algo extraordinario contigo.";
  include('includes/header.php');
?>

<!-- Hero Section Mejorado -->
<section class="hero-section text-center">
  <div class="hero-content">
    <div class="hero-badge mb-4">
      <span class="badge bg-accent px-3 py-2">💬 Hablemos</span>
    </div>
    <h1 class="display-5 fw-bold text-accent mb-3">Cuéntanos tu idea</h1>
    <p class="lead">Cada gran diseño comienza con una conversación. Completa el formulario y te contactaremos muy pronto para crear algo extraordinario juntos.</p>
  </div>
</section>

<!-- Formulario de Contacto Mejorado -->
<section class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="service-card">
        <div class="text-center mb-4">
          <h3 class="text-accent mb-2">Solicita tu Diseño</h3>
          <p class="text-muted">Completa todos los campos y nos pondremos en contacto contigo</p>
        </div>
        
        <form id="contactForm" action="mail/send.php" method="POST" enctype="multipart/form-data" class="row g-4">
          
          <!-- Nombre -->
          <div class="col-md-6">
            <div class="form-group">
              <label class="form-label fw-semibold">
                <i class="fas fa-user me-2 text-accent"></i>Nombre completo *
              </label>
              <input type="text" name="nombre" id="nombre" class="form-control form-control-lg" required>
              <div class="invalid-feedback" id="nombre-error"></div>
            </div>
          </div>

          <!-- Email -->
          <div class="col-md-6">
            <div class="form-group">
              <label class="form-label fw-semibold">
                <i class="fas fa-envelope me-2 text-accent"></i>Email *
              </label>
              <input type="email" name="email" id="email" class="form-control form-control-lg" required>
              <div class="invalid-feedback" id="email-error"></div>
            </div>
          </div>

          <!-- Teléfono -->
          <div class="col-md-6">
            <div class="form-group">
              <label class="form-label fw-semibold">
                <i class="fas fa-phone me-2 text-accent"></i>Teléfono
              </label>
              <input type="tel" name="telefono" id="telefono" class="form-control form-control-lg" placeholder="+34 600 000 000">
              <div class="invalid-feedback" id="telefono-error"></div>
              <small class="form-text text-muted">Opcional, pero recomendado para contacto más rápido</small>
            </div>
          </div>

          <!-- Tipo de Servicio -->
          <div class="col-md-6">
            <div class="form-group">
              <label class="form-label fw-semibold">
                <i class="fas fa-palette me-2 text-accent"></i>Tipo de diseño *
              </label>
              <select name="servicio" id="servicio" class="form-select form-select-lg" required>
                <option value="">Selecciona un servicio</option>
                <option value="logo">🎨 Logotipo</option>
                <option value="portada">🖼️ Portada</option>
                <option value="cartel">📢 Cartel / Branding</option>
                <option value="publicidad">📱 Publicidad</option>
                <option value="evento">📅 Evento</option>
              </select>
              <div class="invalid-feedback" id="servicio-error"></div>
            </div>
          </div>

          <!-- Mensaje -->
          <div class="col-12">
            <div class="form-group">
              <label class="form-label fw-semibold">
                <i class="fas fa-comment me-2 text-accent"></i>Cuéntanos tu idea *
              </label>
              <textarea name="mensaje" id="mensaje" rows="6" class="form-control form-control-lg" 
                        placeholder="¿Cómo te gustaría que sea tu diseño? Cuéntanos colores, estilo, referencias, público objetivo, etc. Cuanto más detalles nos des, mejor podremos entender tu visión." required></textarea>
              <div class="invalid-feedback" id="mensaje-error"></div>
              <small class="form-text text-muted">Mínimo 10 caracteres</small>
            </div>
          </div>

          <!-- Archivo de Referencia -->
          <div class="col-12">
            <div class="form-group">
              <label class="form-label fw-semibold">
                <i class="fas fa-paperclip me-2 text-accent"></i>Archivo de referencia
              </label>
              <div class="file-upload-wrapper">
                <input type="file" name="archivo" id="archivo" class="form-control form-control-lg" 
                       accept="image/*,.pdf" data-max-size="5">
                <div class="file-info" id="fileInfo"></div>
              </div>
              <div class="invalid-feedback" id="archivo-error"></div>
              <small class="form-text text-muted">Imágenes (JPG, PNG, GIF, WEBP) o PDF. Máximo 5MB</small>
            </div>
          </div>

          <!-- Consentimiento -->
          <div class="col-12">
            <div class="form-check">
              <input type="checkbox" name="consentimiento" id="consentimiento" class="form-check-input" required>
              <label class="form-check-label" for="consentimiento">
                Acepto el tratamiento de mis datos según la <a href="#" class="text-accent" data-bs-toggle="modal" data-bs-target="#privacyModal">política de privacidad</a>. *
              </label>
              <div class="invalid-feedback" id="consentimiento-error"></div>
            </div>
          </div>

          <!-- Botón de Envío -->
          <div class="col-12 text-center">
            <button type="submit" id="submitBtn" class="btn btn-primary btn-lg px-5">
              <span class="btn-text">
                <i class="fas fa-paper-plane me-2"></i>Enviar solicitud
              </span>
              <span class="btn-loading d-none">
                <i class="fas fa-spinner fa-spin me-2"></i>Enviando...
              </span>
            </button>
          </div>

        </form>

        <!-- Mensaje de éxito/error -->
        <div id="formMessage" class="mt-4" style="display: none;"></div>
      </div>
    </div>
  </div>
</section>

<!-- Información de Contacto Adicional -->
<section class="container py-5">
  <div class="row g-4">
    <div class="col-md-4">
      <div class="contact-info-card text-center">
        <div class="contact-icon mb-3">
          <i class="fas fa-clock"></i>
        </div>
        <h5>Tiempo de Respuesta</h5>
        <p>Te contactamos en 24-48 horas</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="contact-info-card text-center">
        <div class="contact-icon mb-3">
          <i class="fas fa-comments"></i>
        </div>
        <h5>Consulta Gratuita</h5>
        <p>Primera conversación sin compromiso</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="contact-info-card text-center">
        <div class="contact-icon mb-3">
          <i class="fas fa-shield-alt"></i>
        </div>
        <h5>100% Confidencial</h5>
        <p>Tus ideas están seguras con nosotros</p>
      </div>
    </div>
  </div>
</section>

<!-- Modal de Política de Privacidad -->
<div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-dark text-light">
      <div class="modal-header border-secondary">
        <h5 class="modal-title text-accent" id="privacyModalLabel">Política de Privacidad</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6>Recopilación de Información</h6>
        <p>Recopilamos información que nos proporcionas directamente, como tu nombre, dirección de correo electrónico, número de teléfono y detalles del proyecto.</p>
        
        <h6>Uso de la Información</h6>
        <p>Utilizamos la información que recopilamos para:</p>
        <ul>
          <li>Responder a tus consultas y solicitudes</li>
          <li>Proporcionar servicios de diseño</li>
          <li>Enviar confirmaciones y actualizaciones</li>
          <li>Mejorar nuestros servicios</li>
        </ul>
        
        <h6>Protección de la Información</h6>
        <p>Implementamos medidas de seguridad apropiadas para proteger tu información personal contra acceso no autorizado, alteración, divulgación o destrucción.</p>
        
        <h6>No Compartimos tu Información</h6>
        <p>No vendemos, intercambiamos ni transferimos tu información personal a terceros sin tu consentimiento, excepto cuando sea necesario para proporcionar nuestros servicios.</p>
      </div>
      <div class="modal-footer border-secondary">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript para el formulario -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const formMessage = document.getElementById('formMessage');
    
    // Validación en tiempo real
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('blur', validateField);
        input.addEventListener('input', function() {
            clearFieldError(this);
        });
    });
    
    // Validación del archivo
    const fileInput = document.getElementById('archivo');
    const fileInfo = document.getElementById('fileInfo');
    
    if (fileInput && fileInfo) {
        fileInput.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const maxSize = 5 * 1024 * 1024; // 5MB
                if (file.size > maxSize) {
                    showFieldError(this, 'El archivo es demasiado grande. Máximo 5MB.');
                    this.value = '';
                    fileInfo.innerHTML = '';
                    return;
                }
                
                fileInfo.innerHTML = `
                    <div class="alert alert-success mt-2">
                        <i class="fas fa-check me-2"></i>
                        Archivo seleccionado: ${file.name} (${(file.size / 1024).toFixed(2)} KB)
                    </div>
                `;
            } else {
                fileInfo.innerHTML = '';
            }
        });
    }
    
    // Envío del formulario
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (validateForm()) {
            submitForm();
        }
    });
    
    function validateField(e) {
        const field = e.target;
        const value = field.value.trim();
        const fieldName = field.name;
        
        // Limpiar errores previos
        clearFieldError(field);
        
        // Validaciones específicas
        switch(fieldName) {
            case 'nombre':
                if (value.length < 2) {
                    showFieldError(field, 'El nombre debe tener al menos 2 caracteres');
                }
                break;
            case 'email':
                if (!isValidEmail(value)) {
                    showFieldError(field, 'El email no es válido');
                }
                break;
            case 'telefono':
                if (value && !isValidPhone(value)) {
                    showFieldError(field, 'El teléfono no tiene un formato válido');
                }
                break;
            case 'servicio':
                if (!value) {
                    showFieldError(field, 'Debe seleccionar un tipo de servicio');
                }
                break;
            case 'mensaje':
                if (value.length < 10) {
                    showFieldError(field, 'El mensaje debe tener al menos 10 caracteres');
                }
                break;
            case 'consentimiento':
                if (!field.checked) {
                    showFieldError(field, 'Debe aceptar la política de privacidad');
                }
                break;
        }
    }
    
    function clearFieldError(field) {
        if (!field) return;
        
        if (typeof field === 'string') {
            field = document.getElementById(field);
        }
        
        if (field && field.classList) {
            field.classList.remove('is-invalid');
            const errorDiv = field.parentNode ? field.parentNode.querySelector('.invalid-feedback') : null;
            if (errorDiv) {
                errorDiv.textContent = '';
            }
        }
    }
    
    function showFieldError(field, message) {
        if (!field) return;
        
        if (typeof field === 'string') {
            field = document.getElementById(field);
        }
        
        if (field && field.classList) {
            field.classList.add('is-invalid');
            const errorDiv = field.parentNode ? field.parentNode.querySelector('.invalid-feedback') : null;
            if (errorDiv) {
                errorDiv.textContent = message;
            }
        }
    }
    
    function validateForm() {
        let isValid = true;
        
        // Validar todos los campos
        inputs.forEach(input => {
            validateField({ target: input });
            if (input.classList.contains('is-invalid')) {
                isValid = false;
            }
        });
        
        return isValid;
    }
    
    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }
    
    function isValidPhone(phone) {
        const cleanPhone = phone.replace(/\s+/g, '');
        return /^(\+34\s?)?[6789]\d{8}$/.test(cleanPhone);
    }
    
    function submitForm() {
        // Cambiar estado del botón
        submitBtn.disabled = true;
        const btnText = submitBtn.querySelector('.btn-text');
        const btnLoading = submitBtn.querySelector('.btn-loading');
        
        if (btnText) btnText.classList.add('d-none');
        if (btnLoading) btnLoading.classList.remove('d-none');
        
        // Crear FormData
        const formData = new FormData(form);
        
        // Enviar formulario
        fetch('mail/send.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.text().then(text => {
                try {
                    return JSON.parse(text);
                } catch (e) {
                    console.error('Respuesta del servidor:', text);
                    throw new Error('Respuesta del servidor no válida');
                }
            });
        })
        .then(data => {
            if (data.success) {
                showMessage('success', data.message);
                try {
                  if (typeof gtag === 'function') {
                    gtag('event', 'generate_lead', {
                      'event_category': 'contact',
                      'event_label': 'contact_form_submit',
                      'value': 1
                    });
                  }
                } catch (e) { /* no-op */ }
                form.reset();
                if (fileInfo) fileInfo.innerHTML = '';
                // Limpiar errores
                inputs.forEach(input => {
                    input.classList.remove('is-invalid');
                });
            } else {
                showMessage('danger', data.message);
                if (data.errors) {
                    data.errors.forEach(error => {
                        console.log('Error:', error);
                    });
                }
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showMessage('danger', 'Ha ocurrido un error inesperado. Por favor, inténtalo de nuevo.');
        })
        .finally(() => {
            // Restaurar botón
            submitBtn.disabled = false;
            if (btnText) btnText.classList.remove('d-none');
            if (btnLoading) btnLoading.classList.add('d-none');
        });
    }
    
    function showMessage(type, message) {
        if (!formMessage) return;
        
        formMessage.className = `alert alert-${type} mt-4`;
        formMessage.innerHTML = `
            <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-triangle'} me-2"></i>
            ${message}
        `;
        formMessage.style.display = 'block';
        
        // Scroll al mensaje
        formMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
        
        // Ocultar mensaje después de 5 segundos si es éxito
        if (type === 'success') {
            setTimeout(() => {
                if (formMessage) {
                    formMessage.style.display = 'none';
                }
            }, 5000);
        }
    }
});
</script>

<?php include('includes/footer.php'); ?>