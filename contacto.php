<?php
  $title = "Contacto | InkStudio";
  $description = "Cuéntanos tu idea y solicita un diseño personalizado con calidad profesional.";
  include('includes/header.php');
?>

<section class="hero-section text-center">
  <div class="hero-content">
    <h1 class="display-5 fw-bold text-accent">Contacto</h1>
    <p class="lead">Hablemos sobre tu idea. Completa el formulario y te contactaremos muy pronto.</p>
  </div>
</section>

<section class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="service-card">
        <form action="mail/send.php" method="POST" enctype="multipart/form-data" class="row g-4">

          <div class="col-md-6">
            <label class="form-label">Nombre completo</label>
            <input type="text" name="nombre" class="form-control" required>
          </div>

          <div class="col-md-6">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>

          <div class="col-md-6">
            <label class="form-label">Teléfono</label>
            <input type="tel" name="telefono" class="form-control">
          </div>

          <div class="col-md-6">
            <label class="form-label">Tipo de diseño</label>
            <select name="servicio" class="form-select" required>
              <option value="logo">Logotipo</option>
              <option value="portada">Portada</option>
              <option value="cartel">Cartel / Branding</option>
              <option value="publicidad">Publicidad</option>
              <option value="evento">Evento</option>
            </select>
          </div>

          <div class="col-12">
            <label class="form-label">Cuéntanos tu idea</label>
            <textarea name="mensaje" rows="5" class="form-control" placeholder="¿Cómo te gustaría que sea tu diseño? Cuéntanos colores, estilo, referencias..." required></textarea>
          </div>

          <div class="col-12">
            <label class="form-label">Archivo de referencia (opcional)</label>
            <input type="file" name="archivo" class="form-control">
          </div>

          <div class="col-12">
            <div class="form-check">
              <input type="checkbox" name="consentimiento" class="form-check-input" required>
              <label class="form-check-label">
                Acepto el tratamiento de mis datos según la <a href="#" class="text-accent">política de privacidad</a>.
              </label>
            </div>
          </div>

          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary btn-lg px-4">Enviar solicitud</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>

<?php include('includes/footer.php'); ?>