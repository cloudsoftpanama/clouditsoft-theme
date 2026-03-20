<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <div class="nav-container">
    <!-- LOGO -->
    <div class="logo">
      <a href="<?php echo home_url(); ?>">ClouditSoft</a>
    </div>

    <!-- MENÚ ESTÁTICO -->
    <nav class="main-nav">
      <a href="<?php echo home_url(); ?>">Home</a>
      <a href="<?php echo home_url('/nosotros'); ?>">Nosotros</a>
      <a href="<?php echo home_url('/servicios'); ?>">Servicios</a>
      <a href="<?php echo home_url('/contacto'); ?>">Contacto</a>
    </nav>
  </div>
</header>