<?php 
  $title = "Diseño Publicitario | InkStudio";
  $description = "Diseñamos piezas publicitarias para redes, campañas, productos o promociones. Visuales que impactan y convierten.";
  require_once('includes/breadcrumbs.php');
  $faqs = [
    ['q' => '¿Qué plataformas cubren?', 'a' => 'Creamos creatividades para Instagram, Facebook, TikTok, YouTube, banners y formatos impresos.'],
    ['q' => '¿Pueden adaptar un mismo diseño a varios tamaños?', 'a' => 'Sí, entregamos los formatos necesarios para cada plataforma.']
  ];
  $structuredDataJsonLd = build_faq_schema_jsonld($faqs);
  include('includes/header.php'); 
?>

<section class="hero-section text-center d-flex align-items-center justify-content-center">
  <div class="hero-content">
    <h1 class="display-4 fw-bold">Publicidad que capta la atención</h1>
    <p class="lead">Creamos diseños publicitarios que hablan por tu marca.</p>
  </div>
</section>

<?php echo render_breadcrumbs([
  ['label' => 'Inicio', 'url' => 'index.php'],
  ['label' => 'Publicidad']
]); ?>

<section class="container py-5">
  <div class="text-center mb-5">
    <h2 class="fw-semibold">Visuales publicitarios</h2>
    <p class="text-normal">Diseño para redes, promociones, productos y mensajes clave.</p>
  </div>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="service-card p-0 overflow-hidden">
        <img src="assets/img/mockup-ad1.jpg" class="img-fluid" alt="Banner promocional" loading="lazy">
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-card p-0 overflow-hidden">
        <img src="assets/img/mockup-redes.jpg" class="img-fluid" alt="Diseño para redes" loading="lazy">
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-card p-0 overflow-hidden">
        <img src="assets/img/mockup-promo.jpg" class="img-fluid" alt="Visual para producto" loading="lazy">
      </div>
    </div>
  </div>
</section>

<section class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="service-card text-center">
        <h2 class="text-accent">¿Qué incluye?</h2>
        <ul class="list-unstyled">
          <li>Diseño para redes sociales (stories, posts, headers...)</li>
          <li>Visuales para promociones, descuentos, lanzamientos</li>
          <li>Material adaptado a formatos digitales o impresos</li>
        </ul>
        <a href="contacto.php" class="btn btn-primary mt-3">Solicita diseño publicitario</a>
        <div class="mt-3">
          <a href="diseno-publicitario-redes.php" class="btn btn-outline-primary btn-sm">Publicidad para Redes Sociales</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container py-5">
  <div class="text-center">
    <blockquote class="blockquote">
      <p class="mb-3">“Gracias a los diseños para redes y anuncios conseguimos aumentar ventas en solo una semana.”</p>
      <footer class="blockquote-footer">Andrea F., tienda de ropa online</footer>
    </blockquote>
  </div>
</section>

<?php include('includes/footer.php'); ?>