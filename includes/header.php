<?php // includes/header.php ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $description; ?>">
  <title><?php echo $title; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="canonical" href="https://www.inkstudio.com/">
</head>
<body class="bg-dark text-light">
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
      <div class="container">
        <a class="navbar-brand text-accent fw-bold fs-3" href="index.php">InkStudio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item"><a href="index.php" class="nav-link">InkStudio</a></li>
            <li class="nav-item"><a href="portadas.php" class="nav-link">Portadas</a></li>
            <li class="nav-item"><a href="carteles.php" class="nav-link">Carteles</a></li>
            <li class="nav-item"><a href="publicidad.php" class="nav-link">Publicidad</a></li>
            <li class="nav-item"><a href="eventos.php" class="nav-link">Eventos</a></li>
            <li class="nav-item"><a href="logos.php" class="nav-link">Logos</a></li>
            <li class="nav-item"><a href="contacto.php" class="nav-link">Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div style="padding-top: 80px;"></div> <!-- espacio para navbar fija -->

