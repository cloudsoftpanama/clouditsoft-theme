<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
  <div class="nav-container">
    
    <h1>ClouditSoft</h1>

    <nav>
      <a href="<?php echo home_url(); ?>">Home</a>
      <a href="<?php echo home_url('/nosotros'); ?>">Nosotros</a>
      <a href="<?php echo home_url('/servicios'); ?>">Servicios</a>
      <a href="<?php echo home_url('/contacto'); ?>">Contacto</a>
    </nav>

  </div>
</header>