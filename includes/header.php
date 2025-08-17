<?php // includes/header.php ?>
<?php
  require_once __DIR__ . '/../config.php';
  $page_title = isset($title) ? $title : STUDIO_NAME;
  $page_description = isset($description) ? $description : STUDIO_DESCRIPTION;
  $script_name = isset($_SERVER['SCRIPT_NAME']) ? basename($_SERVER['SCRIPT_NAME']) : '';
  if ($script_name === '' || $script_name === 'index.php') {
    $canonical_url = rtrim(SITE_URL, '/') . '/';
  } else {
    $canonical_url = rtrim(SITE_URL, '/') . '/' . $script_name;
  }
?>
<!DOCTYPE html>
<html lang="<?php echo SITE_LANGUAGE; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES); ?>">
  <meta name="robots" content="index, follow">
  <title><?php echo htmlspecialchars($page_title, ENT_QUOTES); ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES); ?>">
  <link rel="alternate" hreflang="es" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES); ?>">
  <link rel="alternate" hreflang="x-default" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?php echo htmlspecialchars(STUDIO_NAME, ENT_QUOTES); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title, ENT_QUOTES); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES); ?>">
  <meta property="og:image" content="<?php echo getSiteUrl('assets/img/Inky.webp'); ?>">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title, ENT_QUOTES); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES); ?>">
  <meta name="twitter:image" content="<?php echo getSiteUrl('assets/img/Inky.webp'); ?>">

  <?php if (defined('GOOGLE_SITE_VERIFICATION') && GOOGLE_SITE_VERIFICATION) { ?>
    <meta name="google-site-verification" content="<?php echo htmlspecialchars(GOOGLE_SITE_VERIFICATION, ENT_QUOTES); ?>">
  <?php } ?>

  <?php if (defined('GA_TRACKING_ID') && GA_TRACKING_ID) { ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GA_TRACKING_ID; ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);} 
      gtag('js', new Date());
      gtag('config', '<?php echo GA_TRACKING_ID; ?>');
    </script>
  <?php } ?>

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "<?php echo addslashes(STUDIO_NAME); ?>",
    "url": "<?php echo addslashes(rtrim(SITE_URL, '/')); ?>/",
    "description": "<?php echo addslashes(STUDIO_DESCRIPTION); ?>",
    "image": "<?php echo addslashes(getSiteUrl('assets/img/Inky.webp')); ?>",
    "telephone": "<?php echo addslashes(STUDIO_PHONE); ?>",
    "email": "<?php echo addslashes(STUDIO_EMAIL); ?>",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "<?php echo addslashes(STUDIO_ADDRESS); ?>",
      "addressCountry": "ES"
    },
    "sameAs": [
      "<?php echo addslashes(SOCIAL_INSTAGRAM); ?>",
      "<?php echo addslashes(SOCIAL_FACEBOOK); ?>",
      "<?php echo addslashes(SOCIAL_TWITTER); ?>",
      "<?php echo addslashes(SOCIAL_LINKEDIN); ?>",
      "<?php echo addslashes(SOCIAL_PORTFOLIO); ?>"
    ]
  }
  </script>
  <?php if (isset($structuredDataJsonLd) && $structuredDataJsonLd) { echo $structuredDataJsonLd; } ?>
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
            <li class="nav-item"><a href="sobre-nosotros.php" class="nav-link"><i class="fas fa-user me-1"></i>Sobre nosotros</a></li>
            <li class="nav-item"><a href="precios.php" class="nav-link"><i class="fas fa-tags me-1"></i>Precios</a></li>
            <li class="nav-item"><a href="contacto.php" class="nav-link contact-nav"><i class="fas fa-envelope me-1"></i>Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div style="padding-top: 80px;"></div> <!-- espacio para navbar fija -->

