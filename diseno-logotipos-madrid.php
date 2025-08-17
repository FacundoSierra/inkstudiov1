<?php 
  $title = "Diseño de Logotipos en Madrid | InkStudio";
  $description = "Logotipos profesionales en Madrid: identidad visual única, entrega rápida y archivos completos. Diseñador gráfico en Madrid.";
  require_once('includes/breadcrumbs.php');
  $faqs = [
    ['q' => '¿Trabajan solo en Madrid?', 'a' => 'Estamos en Madrid pero trabajamos para toda España, de forma presencial u online.'],
    ['q' => '¿Cuánto cuesta un logotipo?', 'a' => 'Depende del alcance. Te daremos presupuesto cerrado tras una breve consulta.'],
    ['q' => '¿Qué incluyen los entregables?', 'a' => 'Archivos vectoriales y raster, versiones de color, y guía básica de uso si se requiere.']
  ];
  $structuredDataJsonLd = build_faq_schema_jsonld($faqs);
  include('includes/header.php'); 
?>

<section class="hero-section text-center d-flex align-items-center justify-content-center">
  <div class="hero-content">
    <h1 class="display-4 fw-bold">Diseño de <span class="text-accent">Logotipos</span> en Madrid</h1>
    <p class="lead">Identidades visuales memorables para negocios en Madrid y toda España.</p>
    <div class="hero-buttons">
      <a href="contacto.php" class="btn btn-primary btn-lg me-3">Solicita tu logo</a>
      <a href="#proceso" class="btn btn-outline-primary btn-lg">Ver proceso</a>
    </div>
  </div>
  <div class="hero-scroll-indicator">
    <div class="scroll-arrow"></div>
  </div>
  </section>

<?php echo render_breadcrumbs([
  ['label' => 'Inicio', 'url' => 'index.php'],
  ['label' => 'Logotipos en Madrid']
]); ?>

<section id="proceso" class="container py-5">
  <div class="row align-items-center">
    <div class="col-lg-6">
      <h2 class="fw-semibold mb-4">Proceso claro, resultado profesional</h2>
      <ul class="feature-list-detailed">
        <li><i class="fas fa-check text-accent"></i> Briefing y entendimiento del negocio</li>
        <li><i class="fas fa-check text-accent"></i> Propuestas creativas y refinamiento</li>
        <li><i class="fas fa-check text-accent"></i> Entrega de archivos completos</li>
      </ul>
    </div>
    <div class="col-lg-6">
      <img src="assets/img/Inky.webp" class="img-fluid rounded-3" alt="Diseño de logotipos en Madrid" loading="lazy">
    </div>
  </div>
  <div class="text-center mt-5">
    <a href="contacto.php" class="btn btn-primary btn-lg">Empezar ahora</a>
  </div>
  </section>

<?php include('includes/footer.php'); ?>

