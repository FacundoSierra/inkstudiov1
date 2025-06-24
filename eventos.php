<?php 
  $title = "Diseño para Eventos | InkStudio";
  $description = "Promociona tus eventos con diseño gráfico de alto impacto: carteles, flyers y visuales para redes.";
  include('includes/header.php'); 
?>

<section class="hero-section text-center d-flex align-items-center justify-content-center">
  <div class="hero-content">
    <h1 class="display-4 fw-bold">Eventos que se ven y se sienten</h1>
    <p class="lead">Carteles, flyers y visuales para destacar antes, durante y después del evento.</p>
  </div>
</section>

<section class="container py-5">
  <div class="text-center mb-5">
    <h2 class="fw-semibold">Ejemplos de diseños para eventos</h2>
    <p class="text-normal">Imagina tu evento con este tipo de impacto visual.</p>
  </div>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="service-card p-0 overflow-hidden">
        <img src="assets/img/mockup-evento1.jpg" class="img-fluid" alt="Cartel de evento" loading="lazy">
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-card p-0 overflow-hidden">
        <img src="assets/img/mockup-flyer.jpg" class="img-fluid" alt="Flyer publicitario" loading="lazy">
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-card p-0 overflow-hidden">
        <img src="assets/img/mockup-social.jpg" class="img-fluid" alt="Visual para redes" loading="lazy">
      </div>
    </div>
  </div>
</section>

<section class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="service-card text-center">
        <h2 class="text-accent">¿Qué te ofrecemos?</h2>
        <ul class="list-unstyled">
          <li>Diseño de carteles en varios formatos</li>
          <li>Material promocional para imprimir o compartir online</li>
          <li>Velocidad de entrega y revisiones según tus tiempos</li>
        </ul>
        <a href="contacto.php" class="btn btn-primary mt-3">Solicita diseño para tu evento</a>
      </div>
    </div>
  </div>
</section>

<section class="container py-5">
  <div class="text-center">
    <blockquote class="blockquote">
      <p class="mb-3">“Gracias a su diseño, nuestro evento duplicó la asistencia prevista. Muy recomendados.”</p>
      <footer class="blockquote-footer">Carlos R., organizador de ferias</footer>
    </blockquote>
  </div>
</section>

<?php include('includes/footer.php'); ?>
