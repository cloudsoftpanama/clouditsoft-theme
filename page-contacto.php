<?php get_header(); ?>

<section class="page">

  <h1>Contacto</h1>

  <p>Contáctanos para más información.</p>

  <a class="btn-primary" href="https://wa.me/507XXXXXXXX">
    Escribir por WhatsApp
  </a>

  <div class="contact">
    <div class="contact-form-bg">
      <form action="" class="contact-form">
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
      <div class="contact-info-box">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact_phone.svg" alt="telefono">
        </div>
        <div>
          <h3>Telefono</h3>
          <p><strong>Teléfono:</strong> +507 XXXXXXXX</p>
        </div>
      </div>
        <div class="contact-info-box">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact_mail.svg" alt="correo">
        </div>
        <div>
          <h3>Correo Electrónico</h3>
          <p><strong>Correo:</strong> clouds@clouditsoft.com</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>