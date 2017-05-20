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


  <header></header>

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
          <a href="https://www.facebook.com/brentderoeck"><img class="social-media-img" src="<?php bloginfo('template_url')?>/assets/facebook-icon.png" alt="facebook icon"></a>
          <a href="https://twitter.com/Da_Bront"><img class="social-media-img" src="<?php bloginfo('template_url')?>/assets/twitter-icon.png" alt="twitter icon"></a>
        </div>
        <div class="flex-row">
          <a href="https://www.instagram.com/brent_da_pimpass_boiiii/"><img class="social-media-img" src="<?php bloginfo('template_url')?>/assets/instagram-icon.png" alt="instagram icon"></a>
          <a href="#"><img class="social-media-img" src="<?php bloginfo('template_url')?>/assets/googleplus-icon.png" alt="google plus icon"></a>
        </div>
      </section>
      <section class="misc-links">
        <a href="#">Disclaimer</a>

        <a href="#">Privacy</a>
      </section>
<!--
    <ul class="mobile-nav-items">
      <h3 class="nav-title">Mannen weten waarom</h3>
      <h4 class="nav-subtitle">Ons vakmanschap drink je met verstand</h4>

      <li class="mobile-nav-item"><a class="nav-link" href="#">Jupiler 0,0% <i class="right fa fa-angle-right" aria-hidden="true"></i></a></li>
      <li class="mobile-nav-item"><a class="nav-link" href="#">Proef eens! <i class="right fa fa-angle-right" aria-hidden="true"></i></a></li>
      <li class="mobile-nav-item"><a class="nav-link" href="#">Contact <i class="right fa fa-angle-right" aria-hidden="true"></i></a></li>
      <li class="mobile-nav-item"><a class="nav-link" href="#">Veelgestelde vragen <i class="right fa fa-angle-right" aria-hidden="true"></i></a></li>
      <li class="mobile-nav-item"><a class="nav-link" href="#">Blog <i class="right fa fa-angle-right" aria-hidden="true"></i></a></li>

      <section class="social-media">
        <div class="flex-row">
          <a href="#"><img class="social-media-img" src="<?php bloginfo('template_url')?>/assets/facebook-icon.png" alt="facebook icon"></a>
          <a href="#"><img class="social-media-img" src="<?php bloginfo('template_url')?>/assets/twitter-icon.png" alt="twitter icon"></a>
        </div>
        <div class="flex-row">
          <a href="#"><img class="social-media-img" src="<?php bloginfo('template_url')?>/assets/instagram-icon.png" alt="instagram icon"></a>
          <a href="#"><img class="social-media-img" src="<?php bloginfo('template_url')?>/assets/googleplus-icon.png" alt="google plus icon"></a>
        </div>
      </section>

      <section class="misc-links">
        <a href="#">Disclaimer</a>

        <a href="#">Privacy</a>
      </section>
    </ul>-->
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
