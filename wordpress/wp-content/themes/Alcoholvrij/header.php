<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name') | bloginfo('description')?></title>
  <link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/icon.png">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/css/normalize.css" rel="styleheet" type="text/css">
  <script src="https://use.fontawesome.com/8fb3d2d265.js"></script>
  <?php wp_head();?>
</head>
<body>

  <header style="background-image:url(<?php header_image();?>);"></header>

  <input type="checkbox" id="toggleMenu">
  <nav id="mobile-nav">
    <h3 class="nav-title">Mannen weten waarom</h3>
    <h4 class="nav-subtitle">Ons vakmanschap drink je met verstand</h4>
    <?php wp_nav_menu( array(
      'theme_location' => 'mobile-menu',
      'container' => '',
    ) ); ?>

    <section class="social-media">
      <div class="flex-row">
        <a href="https://www.facebook.com/jupiler/"><img class="social-media-img" src="<?php bloginfo('template_url')?>/assets/facebook-icon.png" alt="facebook icon"></a>
        <a href="https://twitter.com/Jupiler"><img class="social-media-img" src="<?php bloginfo('template_url')?>/assets/twitter-icon.png" alt="twitter icon"></a>
      </div>
      <div class="flex-row">
        <a href="https://www.instagram.com/jupiler_belgium/?hl=en"><img class="social-media-img" src="<?php bloginfo('template_url')?>/assets/instagram-icon.png" alt="instagram icon"></a>
        <a href="https://plus.google.com/104680821199839464806"><img class="social-media-img" src="<?php bloginfo('template_url')?>/assets/googleplus-icon.png" alt="google plus icon"></a>
      </div>
    </section>

    <section class="misc-links">
      <?php wp_nav_menu( array(
        'theme_location' => 'sidebar-menu',
        'container' => '',
      ) ); ?>
    </section>
    <ul class="navbar">
      <label for="toggleMenu"><li id="hamburger" class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></li></label>
    </ul>

  </nav>
  <nav class="desktop-nav">
    <?php wp_nav_menu( array(
      'theme_location' => 'primary-menu',
      'container' => ''
    ) ); ?>
  </nav>
