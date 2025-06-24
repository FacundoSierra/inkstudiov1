<?php 
  $title = "InkStudio | Diseño Gráfico Profesional y Creativo";
  $description = "Estudio de diseño gráfico especializado en logotipos, portadas, publicidad visual y branding. Calidad profesional con un enfoque accesible y moderno.";
  include('includes/header.php'); 
?>

<section class="hero-section index text-center d-flex align-items-center justify-content-center">
  <div class="hero-content">
    <h1 class="display-3 fw-bold">Impulsa tu marca con diseño profesional</h1>
    <p class="lead">Creamos logotipos, portadas, carteles y branding visual que conecta con tu audiencia.</p>
    <a href="contacto.php" class="btn btn-primary btn-lg mt-3">Solicita tu diseño</a>
  </div>
</section>

<section class="container py-5">
  <div class="text-center mb-5">
    <h2 class="fw-semibold text-uppercase">Nuestros Servicios</h2>
    <p class="text-normal">Diseño gráfico funcional, limpio y adaptado a tus necesidades.</p>
  </div>

  <div class="row g-4">
  <div class="col-md-4">
    <div class="service-card">
      <h4 class="text-accent">Logotipos</h4>
      <p>Identidades visuales memorables y versátiles adaptadas a cada marca.</p>
      <a href="logos.php" class="btn btn-outline-primary btn-sm">Ver más</a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="service-card">
      <h4 class="text-accent">Portadas</h4>
      <p>Diseños para álbumes, libros o perfiles digitales con impacto visual.</p>
      <a href="portadas.php" class="btn btn-outline-primary btn-sm">Ver más</a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="service-card">
      <h4 class="text-accent">Publicidad</h4>
      <p>Creatividades para redes, impresión o campañas digitales.</p>
      <a href="publicidad.php" class="btn btn-outline-primary btn-sm">Ver más</a>
    </div>
  </div>
  <div class="col-md-6">
    <div class="service-card">
      <h4 class="text-accent">Eventos</h4>
      <p>Diseños exclusivos para promociones de eventos y presentaciones visuales impactantes.</p>
      <a href="eventos.php" class="btn btn-outline-primary btn-sm">Ver más</a>
    </div>
  </div>
  <div class="col-md-6">
    <div class="service-card">
      <h4 class="text-accent">Diseño de marcas</h4>
      <p>Construcción visual integral de tu identidad de marca con coherencia y estilo.</p>
      <a href="logos.php" class="btn btn-outline-primary btn-sm">Ver más</a>
    </div>
  </div>
</div>

</section>

<section class="cta-banner text-center">
  <h2 class="fw-bold">¿Listo para destacar?</h2>
  <p>Contáctanos y llevemos tu marca al siguiente nivel visual.</p>
  <a href="contacto.php" class="btn btn-primary btn-lg mt-2">Habla con nosotros</a>
</section>

<?php include('includes/footer.php'); ?>
