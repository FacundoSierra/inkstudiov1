<?php 
  $title = "Diseño de Marca y Branding | InkStudio";
  $description = "Construye una identidad visual coherente y atractiva con nuestros servicios de branding: carteles, estilo gráfico y personalidad de marca.";
  include('includes/header.php'); 
?>

<section class="hero-section text-center d-flex align-items-center justify-content-center">
  <div class="hero-content">
    <h1 class="display-4 fw-bold">Tu marca con personalidad propia</h1>
    <p class="lead">Diseñamos carteles, estilos visuales y coherencia para que tu marca sea recordada.</p>
  </div>
</section>

<section class="container py-5">
  <div class="text-center mb-5">
    <h2 class="fw-semibold">Ejemplos de branding visual</h2>
    <p class="text-normal">Construimos marcas con estética, fuerza y sentido.</p>
  </div>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="service-card p-0 overflow-hidden">
        <img src="assets/img/mockup-cartel-brand1.jpg" class="img-fluid" alt="Cartel branding" loading="lazy">
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-card p-0 overflow-hidden">
        <img src="assets/img/mockup-identidad.jpg" class="img-fluid" alt="Identidad visual" loading="lazy">
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-card p-0 overflow-hidden">
        <img src="assets/img/mockup-coleccion.jpg" class="img-fluid" alt="Materiales de marca" loading="lazy">
      </div>
    </div>
  </div>
</section>

<section class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="service-card text-center">
        <h2 class="text-accent">¿Qué incluye el branding?</h2>
        <ul class="list-unstyled">
          <li>Estilo visual coherente: fuentes, colores y formas</li>
          <li>Carteles o materiales listos para usar</li>
          <li>Manual básico de identidad si se requiere</li>
        </ul>
        <a href="contacto.php" class="btn btn-primary mt-3">Empieza tu marca</a>
      </div>
    </div>
  </div>
</section>

<section class="container py-5">
  <div class="text-center">
    <blockquote class="blockquote">
      <p class="mb-3">“Mi negocio pasó de parecer amateur a profesional gracias al trabajo visual que hicieron.”</p>
      <footer class="blockquote-footer">Luis M., emprendedor local</footer>
    </blockquote>
  </div>
</section>

<?php include('includes/footer.php'); ?>