
  <aside>
    <div class="aside-container">
      <section class="blogs">
        <h3 class="aside-title">Blog</h3>
        <article class="blog-item"><a class="blog-link" href="#">Jupiler 0,0% nu ook beschikbaar in het buitenland</a></article>

        <article class="blog-item"><a class="blog-link" href="#">Vanaf september is Jupiler 0,0% ook beschikbaar in alle voetbalstadions</a></article>

        <article class="blog-item"><a class="blog-link" href="#">15% korting bij Colruyt op alle Jupiler producten. Proef nu het verschil!</a></article>

        <article class="blog-item"><a class="blog-link" href="#">Doe mee aan onze wedstrijd en maak kans op een maand lang gratis Jupiler 0,0%</a></article>

        <article class="blog-item"><a class="blog-link" href="#">Download onze nieuwe Jupiler Pro League app. Beschikbaar in de App Store</a></article>
      </section>

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
        <?php wp_nav_menu( array(
          'theme_location' => 'sidebar-menu',
          'container' => '',
           ) ); ?>
      </section>
    </div>
  </aside>
