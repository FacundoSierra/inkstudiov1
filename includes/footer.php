<?php // includes/footer.php ?>
<footer class="text-center py-4 mt-5">
  <div class="container">
    <p class="mb-1">&copy; <?php echo date("Y"); ?> InkStudio. Diseño gráfico profesional y accesible.</p>
    <nav>
      <a href="index.php" class="text-decoration-none text-light mx-2">Inicio</a>
      <a href="contacto.php" class="text-decoration-none text-light mx-2">Contacto</a>
    </nav>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const sections = document.querySelectorAll("main section[id]");
  const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

  window.addEventListener("scroll", () => {
    let current = "";
    sections.forEach((section) => {
      const sectionTop = section.offsetTop - 100;
      if (pageYOffset >= sectionTop) {
        current = section.getAttribute("id");
      }
    });
    navLinks.forEach((link) => {
      link.classList.remove("active");
      if (link.getAttribute("href") === "#" + current) {
        link.classList.add("active");
      }
    });
  });
</script>
</body>
</html>
