<?php 
  $title = "Portadas Personalizadas | InkStudio";
  $description = "Diseño de portadas para libros, discos, perfiles y proyectos visuales. Creatividad profesional adaptada a cada estilo.";
  include('includes/header.php'); 
?>

<section class="hero-section text-center d-flex align-items-center justify-content-center">
  <div class="hero-content">
    <h1 class="display-4 fw-bold">Portadas con estilo y personalidad</h1>
    <p class="lead">Creamos portadas para libros, álbumes y proyectos con impacto visual.</p>
  </div>
</section>

<section class="container py-5">
  <div class="text-center mb-5">
    <h2 class="fw-semibold">Ejemplos de trabajo</h2>
    <p class="text-normal">Algunas simulaciones de portadas para que visualices el potencial de tu idea.</p>
  </div>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="service-card p-0 overflow-hidden">
        <img src="assets/img/mockup-libro1.jpg" class="img-fluid" alt="Portada libro" loading="lazy">
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-card p-0 overflow-hidden">
        <img src="assets/img/mockup-disco.jpg" class="img-fluid" alt="Portada disco musical" loading="lazy">
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-card p-0 overflow-hidden">
        <img src="assets/img/mockup-perfil.jpg" class="img-fluid" alt="Portada para perfil social" loading="lazy">
      </div>
    </div>
  </div>
</section>

<section class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="service-card text-center">
        <h2 class="text-accent">¿Qué incluye tu portada?</h2>
        <ul class="list-unstyled">
          <li>Diseño profesional 100% personalizado</li>
          <li>Formatos adaptados a impresión o digital</li>
          <li>Feedback y revisiones para afinar el resultado</li>
        </ul>
        <a href="contacto.php" class="btn btn-primary mt-3">Solicita tu portada</a>
      </div>
    </div>
  </div>
</section>

<section class="container py-5">
  <div class="text-center">
    <blockquote class="blockquote">
      <p class="mb-3">“La portada que hicieron para mi ebook fue mejor de lo que imaginaba. Profesional y rápida.”</p>
      <footer class="blockquote-footer">Marina G., autora independiente</footer>
    </blockquote>
  </div>
</section>

<?php include('includes/footer.php'); ?>
