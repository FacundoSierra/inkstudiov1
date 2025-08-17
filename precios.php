<?php 
  $title = "Precios | InkStudio";
  $description = "Precios orientativos de diseño gráfico: logotipos, portadas y publicidad. Pide tu presupuesto personalizado sin compromiso.";
  require_once('includes/breadcrumbs.php');
  include('includes/header.php'); 
?>

<?php echo render_breadcrumbs([
  ['label' => 'Inicio', 'url' => 'index.php'],
  ['label' => 'Precios']
]); ?>

<section class="container py-5">
  <div class="text-center mb-5">
    <h1 class="fw-semibold">Precios orientativos</h1>
    <p class="lead">Cada proyecto es único. Estos rangos te ayudan a estimar la inversión.</p>
  </div>
  <div class="row g-4">
    <div class="col-md-4">
      <div class="service-card text-center h-100">
        <h4 class="text-accent mb-3">Logotipo</h4>
        <p>Desde 150€ — Conceptos, iteraciones y archivos completos.</p>
        <a href="contacto.php" class="btn btn-outline-primary btn-sm">Solicitar presupuesto</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-card text-center h-100">
        <h4 class="text-accent mb-3">Portada</h4>
        <p>Desde 80€ — Para libro, disco o perfiles digitales.</p>
        <a href="contacto.php" class="btn btn-outline-primary btn-sm">Solicitar presupuesto</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-card text-center h-100">
        <h4 class="text-accent mb-3">Publicidad</h4>
        <p>Desde 60€ — Piezas para redes y campañas.</p>
        <a href="contacto.php" class="btn btn-outline-primary btn-sm">Solicitar presupuesto</a>
      </div>
    </div>
  </div>
  <div class="text-center mt-5">
    <a href="contacto.php" class="btn btn-primary btn-lg">Cuéntanos tu proyecto</a>
  </div>
</section>

<?php include('includes/footer.php'); ?>

