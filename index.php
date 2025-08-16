<?php 
  $title = "InkStudio | Creadores de Arte y Diseño Gráfico Profesional";
  $description = "Estudio de arte y diseño gráfico especializado en logotipos, portadas, publicidad visual y branding. Calidad profesional con un enfoque accesible y moderno.";
  include('includes/header.php'); 
?>

<!-- Hero Section Mejorado -->
<section class="hero-section index text-center d-flex align-items-center justify-content-center">
  <div class="hero-content">
    <div class="hero-badge mb-4">
      <span class="badge bg-accent px-3 py-2">Creadores de Arte</span>
    </div>
    <h1 class="display-3 fw-bold mb-4">Transformamos ideas en <span class="text-accent">arte visual</span></h1>
    <p class="lead mb-4">Somos un estudio humilde pero apasionado por crear diseños únicos que cuenten tu historia. Desde logotipos hasta portadas, cada proyecto es una oportunidad de crear algo extraordinario.</p>
    <div class="hero-buttons">
      <a href="contacto.php" class="btn btn-primary btn-lg me-3">Solicita tu diseño</a>
      <a href="#servicios" class="btn btn-outline-primary btn-lg">Ver servicios</a>
    </div>
  </div>
  <div class="hero-scroll-indicator">
    <div class="scroll-arrow"></div>
  </div>
</section>

<!-- Sección de Servicios Mejorada -->
<section id="servicios" class="container py-5">
  <div class="text-center mb-5">
    <h2 class="fw-semibold text-uppercase mb-3">Nuestros Servicios</h2>
    <p class="text-normal lead">Diseño gráfico funcional, limpio y adaptado a tus necesidades.</p>
    <div class="section-divider"></div>
  </div>

  <div class="row g-4">
    <div class="col-lg-4 col-md-6">
      <div class="service-card service-card-hover">
        <div class="service-icon mb-3">
          <i class="fas fa-paint-brush"></i>
        </div>
        <h4 class="text-accent mb-3">Logotipos</h4>
        <p class="mb-3">Identidades visuales memorables y versátiles que representan perfectamente tu marca y valores.</p>
        <ul class="service-features">
          <li>Diseño único y personalizado</li>
          <li>Versiones para diferentes usos</li>
          <li>Archivos en múltiples formatos</li>
        </ul>
        <a href="logos.php" class="btn btn-outline-primary btn-sm">Ver más</a>
      </div>
    </div>
    
    <div class="col-lg-4 col-md-6">
      <div class="service-card service-card-hover">
        <div class="service-icon mb-3">
          <i class="fas fa-image"></i>
        </div>
        <h4 class="text-accent mb-3">Portadas</h4>
        <p class="mb-3">Diseños impactantes para álbumes, libros o perfiles digitales que capturan la esencia de tu contenido.</p>
        <ul class="service-features">
          <li>Conceptos creativos únicos</li>
          <li>Adaptación a diferentes formatos</li>
          <li>Diseño que destaca</li>
        </ul>
        <a href="portadas.php" class="btn btn-outline-primary btn-sm">Ver más</a>
      </div>
    </div>
    
    <div class="col-lg-4 col-md-6">
      <div class="service-card service-card-hover">
        <div class="service-icon mb-3">
          <i class="fas fa-bullhorn"></i>
        </div>
        <h4 class="text-accent mb-3">Publicidad</h4>
        <p class="mb-3">Creatividades impactantes para redes sociales, impresión o campañas digitales que generan resultados.</p>
        <ul class="service-features">
          <li>Diseños para múltiples plataformas</li>
          <li>Optimización para conversión</li>
          <li>Coherencia visual de marca</li>
        </ul>
        <a href="publicidad.php" class="btn btn-outline-primary btn-sm">Ver más</a>
      </div>
    </div>
    
    <div class="col-lg-6 col-md-6">
      <div class="service-card service-card-hover">
        <div class="service-icon mb-3">
          <i class="fas fa-calendar-alt"></i>
        </div>
        <h4 class="text-accent mb-3">Eventos</h4>
        <p class="mb-3">Diseños exclusivos para promociones de eventos y presentaciones visuales que crean expectativa y atraen audiencias.</p>
        <ul class="service-features">
          <li>Material promocional completo</li>
          <li>Diseños adaptables</li>
          <li>Impacto visual inmediato</li>
        </ul>
        <a href="eventos.php" class="btn btn-outline-primary btn-sm">Ver más</a>
      </div>
    </div>
    
    <div class="col-lg-6 col-md-6">
      <div class="service-card service-card-hover">
        <div class="service-icon mb-3">
          <i class="fas fa-crown"></i>
        </div>
        <h4 class="text-accent mb-3">Diseño de Marcas</h4>
        <p class="mb-3">Construcción visual integral de tu identidad de marca con coherencia, estilo y personalidad única.</p>
        <ul class="service-features">
          <li>Identidad visual completa</li>
          <li>Manual de marca</li>
          <li>Aplicaciones prácticas</li>
        </ul>
        <a href="logos.php" class="btn btn-outline-primary btn-sm">Ver más</a>
      </div>
    </div>
  </div>
</section>

<!-- Nueva Sección: Por qué elegirnos -->
<section class="container py-5">
  <div class="row align-items-center">
    <div class="col-lg-6">
      <h2 class="fw-semibold mb-4">¿Por qué elegir <span class="text-accent">InkStudio</span>?</h2>
      <div class="feature-list">
        <div class="feature-item">
          <div class="feature-icon">
            <i class="fas fa-heart"></i>
          </div>
          <div class="feature-content">
            <h5>Pasión por el Arte</h5>
            <p>Cada proyecto es una oportunidad de crear algo único y significativo.</p>
          </div>
        </div>
        <div class="feature-item">
          <div class="feature-icon">
            <i class="fas fa-users"></i>
          </div>
          <div class="feature-content">
            <h5>Enfoque Personal</h5>
            <p>Trabajamos de cerca contigo para entender tu visión y convertirla en realidad.</p>
          </div>
        </div>
        <div class="feature-item">
          <div class="feature-icon">
            <i class="fas fa-clock"></i>
          </div>
          <div class="feature-content">
            <h5>Entrega Puntual</h5>
            <p>Respetamos tu tiempo con entregas rápidas y comunicación constante.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="about-image">
        <img src="assets/img/Inky.webp" alt="Nuestro proceso creativo" class="img-fluid rounded-3">
      </div>
    </div>
  </div>
</section>

<!-- Nueva Sección: Proceso de Trabajo -->
<section class="container py-5">
  <div class="text-center mb-5">
    <h2 class="fw-semibold text-uppercase mb-3">Nuestro Proceso</h2>
    <p class="text-normal lead">Cómo transformamos tu idea en una obra de arte</p>
    <div class="section-divider"></div>
  </div>
  
  <div class="row g-4">
    <div class="col-lg-3 col-md-6">
      <div class="process-step">
        <div class="step-number">1</div>
        <h5>Consulta</h5>
        <p>Conversamos sobre tu idea, objetivos y visión del proyecto.</p>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="process-step">
        <div class="step-number">2</div>
        <h5>Concepto</h5>
        <p>Desarrollamos conceptos iniciales basados en tu brief.</p>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="process-step">
        <div class="step-number">3</div>
        <h5>Diseño</h5>
        <p>Creamos el diseño final con tu feedback integrado.</p>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="process-step">
        <div class="step-number">4</div>
        <h5>Entrega</h5>
        <p>Te entregamos todos los archivos necesarios para usar tu diseño.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Banner Mejorado -->
<section class="cta-banner text-center">
  <div class="cta-content">
    <h2 class="fw-bold mb-3">¿Listo para dar vida a tu idea?</h2>
    <p class="lead mb-4">Cada gran diseño comienza con una conversación. Hablemos sobre tu proyecto y creemos algo extraordinario juntos.</p>
    <div class="cta-buttons">
      <a href="contacto.php" class="btn btn-primary btn-lg me-3">Solicita tu diseño</a>
      <a href="tel:+34600000000" class="btn btn-outline-primary btn-lg">Llámanos</a>
    </div>
  </div>
</section>

<?php include('includes/footer.php'); ?>
