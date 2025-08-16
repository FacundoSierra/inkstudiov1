<?php // includes/header.php ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $description; ?>">
  <title><?php echo $title; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="canonical" href="https://www.inkstudio.com/">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-dark text-light">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
      <div class="container">
        <a class="navbar-brand text-accent fw-bold fs-3" href="index.php">
          <i class="fas fa-palette me-2"></i>InkStudio
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a href="index.php" class="nav-link"><i class="fas fa-home me-1"></i>Inicio</a></li>
            <li class="nav-item"><a href="portadas.php" class="nav-link"><i class="fas fa-image me-1"></i>Portadas</a></li>
            <li class="nav-item"><a href="carteles.php" class="nav-link"><i class="fas fa-calendar me-1"></i>Carteles</a></li>
            <li class="nav-item"><a href="publicidad.php" class="nav-link"><i class="fas fa-bullhorn me-1"></i>Publicidad</a></li>
            <li class="nav-item"><a href="eventos.php" class="nav-link"><i class="fas fa-calendar-alt me-1"></i>Eventos</a></li>
            <li class="nav-item"><a href="logos.php" class="nav-link"><i class="fas fa-paint-brush me-1"></i>Logos</a></li>
            <li class="nav-item"><a href="contacto.php" class="nav-link contact-nav"><i class="fas fa-envelope me-1"></i>Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div style="padding-top: 80px;"></div> <!-- espacio para navbar fija -->

