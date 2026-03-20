<?php get_header(); ?>

<section class="page">

  <h1>Contacto</h1>

  <p>Contáctanos para más información.</p>

  <a class="btn-primary" href="https://wa.me/507XXXXXXXX">
    Escribir por WhatsApp
  </a>

  <div class="contact">
    <div class="contact-form">
      <form action="">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Mensaje</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <button type="submit" class="btn-primary">Enviar</button>
      </form>
    </div>

   <div class="contact-info">
      <h2>Información de contacto</h2>
      <p><strong>Teléfono:</strong> +507 XXXXXXXX</p>
      <p><strong>Email:</strong> info@clouditsoft.com</p>
    </div>
  </div>
</section>

<?php get_footer(); ?>