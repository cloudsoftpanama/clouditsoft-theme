<?php get_header(); ?>

<section class="page">

<div id="particles-js"></div>
  <div class="contact-header">
    <h1>Contáctanos</h1>
    <p>¿Tienes alguna pregunta o necesitas más información? No dudes en contactarnos. Estamos aquí para ayudarte.</p>
  </div>

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
      <div class="contact-info-box">
        <div>
          <h3>Nuestras redes</h3>
        </div>
        <div class="social-icons">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social_instagram.png" alt="Instagram" class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social_whatsapp.png" alt="WhatsApp" class="icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/social_linkedin.png" alt="LinkedIn" class="icon">
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>