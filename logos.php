<?php 
  $title = "Logotipos y Diseño de Marcas | InkStudio";
  $description = "Creamos logotipos únicos y memorables que representan perfectamente tu marca. Diseño de identidad visual profesional y personalizado.";
  require_once('includes/breadcrumbs.php');
  $faqs = [
    ['q' => '¿Cuánto tarda el diseño de un logotipo?', 'a' => 'Normalmente entre 5 y 10 días, según complejidad y rondas de feedback.'],
    ['q' => '¿Qué entregables recibo?', 'a' => 'Entregamos archivos vectoriales (AI/EPS/SVG) y raster (PNG/JPG) en varias versiones de color.'],
    ['q' => '¿Puedo pedir cambios?', 'a' => 'Sí, incluimos rondas de revisión para ajustar el diseño hasta lograr el resultado deseado.'],
    ['q' => '¿Ofrecen manual de marca?', 'a' => 'Podemos incluir un manual básico de uso de marca si lo necesitas.']
  ];
  $structuredDataJsonLd = build_faq_schema_jsonld($faqs);
  include('includes/header.php');
?>

<!-- Hero Section para Logos -->
<section class="hero-section text-center">
  <div class="hero-content">
    <div class="hero-badge mb-4">
      <span class="badge bg-accent px-3 py-2">🎨 Logotipos</span>
    </div>
    <h1 class="display-4 fw-bold text-accent mb-3">Diseño de <span class="text-light">Logotipos</span></h1>
    <p class="lead mb-4">Creamos identidades visuales únicas y memorables que cuentan tu historia y conectan con tu audiencia. Cada logotipo es una obra de arte personalizada.</p>
    <div class="hero-buttons">
      <a href="contacto.php" class="btn btn-primary btn-lg me-3">Solicita tu logo</a>
      <a href="#portafolio" class="btn btn-outline-primary btn-lg">Ver portafolio</a>
    </div>
  </div>
</section>

<?php echo render_breadcrumbs([
  ['label' => 'Inicio', 'url' => 'index.php'],
  ['label' => 'Logotipos']
]); ?>

<!-- Información del Servicio -->
<section class="container py-5">
  <div class="row align-items-center">
    <div class="col-lg-6">
      <h2 class="fw-semibold mb-4">¿Por qué un <span class="text-accent">logotipo profesional</span>?</h2>
      <p class="lead mb-4">Tu logotipo es la primera impresión que los clientes tienen de tu marca. Es la base de tu identidad visual y debe transmitir confianza, profesionalismo y los valores de tu empresa.</p>
      
      <div class="benefits-list">
        <div class="benefit-item">
          <div class="benefit-icon">
            <i class="fas fa-eye"></i>
          </div>
          <div class="benefit-content">
            <h5>Primera Impresión</h5>
            <p>Captura la atención en los primeros segundos</p>
          </div>
        </div>
        
        <div class="benefit-item">
          <div class="benefit-icon">
            <i class="fas fa-brain"></i>
          </div>
          <div class="benefit-content">
            <h5>Memorabilidad</h5>
            <p>Se queda en la mente de tu audiencia</p>
          </div>
        </div>
        
        <div class="benefit-item">
          <div class="benefit-icon">
            <i class="fas fa-handshake"></i>
          </div>
          <div class="benefit-content">
            <h5>Confianza</h5>
            <p>Transmite profesionalismo y seriedad</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-6">
      <div class="service-image">
        <img src="assets/img/Inky.webp" alt="Proceso de diseño de logos" class="img-fluid rounded-3">
      </div>
    </div>
  </div>
</section>

<!-- Proceso de Diseño -->
<section class="container py-5">
  <div class="text-center mb-5">
    <h2 class="fw-semibold text-uppercase mb-3">Nuestro Proceso</h2>
    <p class="text-normal lead">Cómo creamos tu logotipo perfecto</p>
    <div class="section-divider"></div>
  </div>
  
  <div class="row g-4">
    <div class="col-lg-3 col-md-6">
      <div class="process-step">
        <div class="step-number">1</div>
        <h5>Briefing</h5>
        <p>Entendemos tu negocio, valores y objetivos para crear un brief detallado.</p>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="process-step">
        <div class="step-number">2</div>
        <h5>Investigación</h5>
        <p>Analizamos tu competencia y mercado para encontrar oportunidades únicas.</p>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="process-step">
        <div class="step-number">3</div>
        <h5>Conceptos</h5>
        <p>Desarrollamos múltiples conceptos creativos basados en tu brief.</p>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="process-step">
        <div class="step-number">4</div>
        <h5>Refinamiento</h5>
        <p>Perfeccionamos el diseño elegido con tu feedback y comentarios.</p>
      </div>
    </div>
  </div>
</section>

<!-- Tipos de Logotipos -->
<section class="container py-5">
  <div class="text-center mb-5">
    <h2 class="fw-semibold text-uppercase mb-3">Tipos de Logotipos</h2>
    <p class="text-normal lead">Diferentes estilos para diferentes necesidades</p>
    <div class="section-divider"></div>
  </div>
  
  <div class="row g-4">
    <div class="col-lg-4 col-md-6">
      <div class="logo-type-card">
        <div class="logo-type-icon mb-3">
          <i class="fas fa-font"></i>
        </div>
        <h4>Logotipo</h4>
        <p>Basado en tipografía personalizada que representa tu marca de manera elegante y profesional.</p>
        <ul class="logo-features">
          <li>Tipografía única</li>
          <li>Fácil de recordar</li>
          <li>Escalable</li>
        </ul>
      </div>
    </div>
    
    <div class="col-lg-4 col-md-6">
      <div class="logo-type-card">
        <div class="logo-type-icon mb-3">
          <i class="fas fa-image"></i>
        </div>
        <h4>Isotipo</h4>
        <p>Un símbolo gráfico que representa visualmente tu marca de manera icónica y memorable.</p>
        <ul class="logo-features">
          <li>Símbolo gráfico</li>
          <li>Muy reconocible</li>
          <li>Funciona en cualquier tamaño</li>
        </ul>
      </div>
    </div>
    
    <div class="col-lg-4 col-md-6">
      <div class="logo-type-card">
        <div class="logo-type-icon mb-3">
          <i class="fas fa-layer-group"></i>
        </div>
        <h4>Isologo</h4>
        <p>Combinación perfecta de texto y símbolo para máxima flexibilidad y reconocimiento.</p>
        <ul class="logo-features">
          <li>Texto + símbolo</li>
          <li>Máxima flexibilidad</li>
          <li>Reconocimiento inmediato</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Portafolio -->
<section id="portafolio" class="container py-5">
  <div class="text-center mb-5">
    <h2 class="fw-semibold text-uppercase mb-3">Portafolio</h2>
    <p class="text-normal lead">Algunos de nuestros diseños más recientes</p>
    <div class="section-divider"></div>
  </div>
  
  <div class="row g-4">
    <div class="col-lg-4 col-md-6">
      <div class="portfolio-item">
        <div class="portfolio-image">
          <img src="assets/img/imagen-elegante.png" alt="Logo elegante" class="img-fluid" loading="lazy">
          <div class="portfolio-overlay">
            <div class="portfolio-info">
              <h5>Logo Elegante</h5>
              <p>Diseño minimalista y sofisticado</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-4 col-md-6">
      <div class="portfolio-item">
        <div class="portfolio-image">
          <img src="assets/img/Inky.jpeg" alt="Logo creativo" class="img-fluid" loading="lazy">
          <div class="portfolio-overlay">
            <div class="portfolio-info">
              <h5>Logo Creativo</h5>
              <p>Diseño innovador y llamativo</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-4 col-md-6">
      <div class="portfolio-item">
        <div class="portfolio-image">
          <img src="assets/img/Inky.webp" alt="Logo profesional" class="img-fluid" loading="lazy">
          <div class="portfolio-overlay">
            <div class="portfolio-info">
              <h5>Logo Profesional</h5>
              <p>Diseño corporativo y confiable</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="text-center mt-5">
    <p class="text-muted mb-3">¿Te gusta lo que ves? ¡Podemos crear algo similar para ti!</p>
    <a href="contacto.php" class="btn btn-primary btn-lg me-2">Solicita tu logo</a>
    <a href="diseno-logotipos-madrid.php" class="btn btn-outline-primary btn-lg">Logotipos en Madrid</a>
  </div>
</section>

<!-- Características del Servicio -->
<section class="container py-5">
  <div class="row g-4">
    <div class="col-md-6">
      <div class="service-feature-card">
        <div class="feature-icon-large mb-4">
          <i class="fas fa-palette"></i>
        </div>
        <h3>Diseño Personalizado</h3>
        <p>Cada logotipo es creado desde cero, pensando específicamente en tu negocio, valores y público objetivo. No usamos plantillas ni diseños genéricos.</p>
        <ul class="feature-list-detailed">
          <li><i class="fas fa-check text-accent"></i> Investigación de mercado</li>
          <li><i class="fas fa-check text-accent"></i> Conceptos únicos</li>
          <li><i class="fas fa-check text-accent"></i> Revisión y refinamiento</li>
        </ul>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="service-feature-card">
        <div class="feature-icon-large mb-4">
          <i class="fas fa-download"></i>
        </div>
        <h3>Archivos Completos</h3>
        <p>Recibirás tu logotipo en todos los formatos necesarios para uso digital e impreso, con guías de uso para mantener la consistencia de tu marca.</p>
        <ul class="feature-list-detailed">
          <li><i class="fas fa-check text-accent"></i> Vector (AI, EPS, SVG)</li>
          <li><i class="fas fa-check text-accent"></i> Raster (PNG, JPG)</li>
          <li><i class="fas fa-check text-accent"></i> Manual de marca</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- CTA Final -->
<section class="cta-banner text-center">
  <div class="cta-content">
    <h2 class="fw-bold mb-3">¿Listo para dar vida a tu marca?</h2>
    <p class="lead mb-4">Un logotipo profesional puede transformar completamente la percepción de tu negocio. Hablemos sobre tu proyecto y creemos algo extraordinario juntos.</p>
    <div class="cta-buttons">
      <a href="contacto.php" class="btn btn-primary btn-lg me-3">Solicita tu logo</a>
      <a href="tel:+34600000000" class="btn btn-outline-primary btn-lg">Llámanos</a>
    </div>
  </div>
</section>

<?php include('includes/footer.php'); ?>