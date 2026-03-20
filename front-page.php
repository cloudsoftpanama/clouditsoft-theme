<?php get_header(); ?>

<section class="hero">

  <!-- IZQUIERDA -->
  <div class="hero-left">
    <span class="badge">🚀 Next-Gen Technology</span>

    <h1>
      Innova <br>
      <span>El Futuro</span>
    </h1>

    <p>
      Impulsamos tu negocio con soluciones en la nube, desarrollo web 
      y automatización inteligente en Panamá.
    </p>

    <div class="buttons">
      <button class="btn-primary">Servicios</button>
      <button class="btn-secondary">Contactar</button>
    </div>

    <div class="stats">
      <div>
        <h3>99.9%</h3>
        <p>Disponibilidad</p>
      </div>
      <div>
        <h3>+50</h3>
        <p>Clientes</p>
      </div>
      <div>
        <h3>24/7</h3>
        <p>Soporte</p>
      </div>
    </div>
  </div>

  <!-- DERECHA -->
  <div class="hero-right">
    <div class="carousel">

      <div class="service active">
        <img src="https://via.placeholder.com/400x300">
        <h4>Automatización</h4>
        <p>Procesos inteligentes para optimizar tu negocio.</p>
      </div>

      <div class="service">
        <img src="https://via.placeholder.com/400x300">
        <h4>Cloud</h4>
        <p>Infraestructura escalable y segura.</p>
      </div>

    </div>
  </div>

</section>


<?php get_footer(); ?>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const services = document.querySelectorAll('.carousel .service');
  let current = 0;

  function showNextService() {
    services[current].classList.remove('active');
    current = (current + 1) % services.length;
    services[current].classList.add('active');
  }

  // Cambia de carta cada 3 segundos
  setInterval(showNextService, 3000);
});
</script>