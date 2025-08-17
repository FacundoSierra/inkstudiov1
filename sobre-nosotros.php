<?php 
  $title = "Sobre nosotros | InkStudio";
  $description = "Conoce a InkStudio: diseñador gráfico en Madrid. Filosofía, proceso y valores. E-E-A-T para confianza y calidad.";
  require_once('includes/breadcrumbs.php');
  $structuredDataJsonLd = "\n<script type=\"application/ld+json\">{".
    "\"@context\":\"https://schema.org\",\n".
    "\"@type\":\"Organization\",\n".
    "\"name\":\"InkStudio\",\n".
    "\"url\":\"" . addslashes(rtrim(SITE_URL,'/')) . "/\",\n".
    "\"sameAs\":[\"" . addslashes(SOCIAL_INSTAGRAM) . "\",\"" . addslashes(SOCIAL_FACEBOOK) . "\",\"" . addslashes(SOCIAL_TWITTER) . "\",\"" . addslashes(SOCIAL_LINKEDIN) . "\"]}".
    "</script>\n";
  include('includes/header.php'); 
?>

<?php echo render_breadcrumbs([
  ['label' => 'Inicio', 'url' => 'index.php'],
  ['label' => 'Sobre nosotros']
]); ?>

<section class="container py-5">
  <div class="row align-items-center">
    <div class="col-lg-6">
      <h1 class="fw-semibold mb-4">Somos <span class="text-accent">InkStudio</span></h1>
      <p class="lead">Estudio de diseño gráfico en Madrid. Creamos logotipos, portadas y piezas publicitarias con enfoque humano y resultados medibles.</p>
      <ul class="feature-list-detailed">
        <li><i class="fas fa-check text-accent"></i> Experiencia práctica en branding y comunicación visual</li>
        <li><i class="fas fa-check text-accent"></i> Proceso claro: briefing, conceptos, iteración y entrega</li>
        <li><i class="fas fa-check text-accent"></i> Entregables listos para impresión y digital</li>
      </ul>
      <div class="mt-3">
        <a href="contacto.php" class="btn btn-primary">Hablemos</a>
      </div>
    </div>
    <div class="col-lg-6">
      <img src="assets/img/Inky.webp" alt="InkStudio equipo" class="img-fluid rounded-3" loading="lazy">
    </div>
  </div>
</section>

<section class="container py-5">
  <div class="row g-4">
    <div class="col-md-4">
      <div class="service-card text-center">
        <div class="contact-icon mb-3"><i class="fas fa-bolt"></i></div>
        <h5>Agilidad</h5>
        <p>Entregas rápidas sin perder calidad.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-card text-center">
        <div class="contact-icon mb-3"><i class="fas fa-lightbulb"></i></div>
        <h5>Creatividad</h5>
        <p>Conceptos únicos adaptados a tu marca.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-card text-center">
        <div class="contact-icon mb-3"><i class="fas fa-handshake"></i></div>
        <h5>Cercanía</h5>
        <p>Comunicación clara y acompañamiento.</p>
      </div>
    </div>
  </div>
</section>

<?php include('includes/footer.php'); ?>

