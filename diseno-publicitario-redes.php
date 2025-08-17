<?php 
  $title = "Diseño Publicitario para Redes Sociales | InkStudio";
  $description = "Creatividades para Instagram, Facebook, TikTok y más. Diseños que captan atención y convierten.";
  require_once('includes/breadcrumbs.php');
  $faqs = [
    ['q' => '¿Qué formatos entregan para redes?', 'a' => 'Stories, posts, reels, banners y tamaños personalizados para cada plataforma.'],
    ['q' => '¿Pueden trabajar con mi branding?', 'a' => 'Sí, adaptamos los diseños a tu identidad visual para mantener coherencia.']
  ];
  $structuredDataJsonLd = build_faq_schema_jsonld($faqs);
  include('includes/header.php'); 
?>

<section class="hero-section text-center d-flex align-items-center justify-content-center">
  <div class="hero-content">
    <h1 class="display-4 fw-bold">Diseño Publicitario para <span class="text-accent">Redes Sociales</span></h1>
    <p class="lead">Visuales optimizados para captar atención y mejorar resultados.</p>
    <div class="hero-buttons">
      <a href="contacto.php" class="btn btn-primary btn-lg me-3">Solicita tu campaña</a>
      <a href="#ejemplos" class="btn btn-outline-primary btn-lg">Ver ejemplos</a>
    </div>
  </div>
  <div class="hero-scroll-indicator">
    <div class="scroll-arrow"></div>
  </div>
  </section>

<?php echo render_breadcrumbs([
  ['label' => 'Inicio', 'url' => 'index.php'],
  ['label' => 'Publicidad para Redes']
]); ?>

<section id="ejemplos" class="container py-5">
  <div class="row g-4">
    <div class="col-md-4">
      <div class="service-card p-0 overflow-hidden">
        <img src="assets/img/mockup-redes.jpg" class="img-fluid" alt="Diseño para redes sociales" loading="lazy">
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-card p-0 overflow-hidden">
        <img src="assets/img/mockup-ad1.jpg" class="img-fluid" alt="Banner promocional" loading="lazy">
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-card p-0 overflow-hidden">
        <img src="assets/img/mockup-promo.jpg" class="img-fluid" alt="Visual para producto" loading="lazy">
      </div>
    </div>
  </div>
  <div class="text-center mt-5">
    <a href="contacto.php" class="btn btn-primary btn-lg">Hablemos de tu campaña</a>
  </div>
  </section>

<?php include('includes/footer.php'); ?>

