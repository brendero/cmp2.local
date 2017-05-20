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
          <a href="#"><div class="social-media-img facebook"></div></a>
          <a href="#"><div class="social-media-img twitter"></div></a>
        </div>
        <div class="flex-row">
          <a href="#"><div class="social-media-img insta"></div></a>
          <a href="#"><div class="social-media-img gplus"></div></a>
        </div>
      </section>

      <section class="misc-links">
        <a href="#">Disclaimer</a>

        <a href="#">Privacy</a>
      </section>
    </ul>
    <ul class="navbar">
      <label for="toggleMenu"><li id="hamburger" class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></li></label>
    </ul>

  </nav>
  <nav>
    <ul class="navbar">
      <li class="nav-item"><a class="nav-link" href="#">Jupiler 0,0%</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Proef eens!</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Veelgestelde vragen</a></li>
    </ul>
  </nav>
