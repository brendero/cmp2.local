<?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
<aside>
  <div class="aside-container">

    <section class="blogs">
      <h3 class="aside-title">Blog</h3>
      <?php if ( $wpb_all_query->have_posts() ) : ?>

          <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
            <?php
              the_title('<article class="blog-item"><a class="blog-link" href="' . get_post_permalink() . ' ">', '</a></article>');
            ?>
          <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php else : ?>
      <p><?php _e( 'Er zijn momenteel geen blogposts' ); ?></p>
    <?php endif; ?>
    </section>

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
    <?php
      if ( !is_user_logged_in() ) {
        echo '<a href="' , get_home_url() , '/login" style="text-align:center;display:block;">Log in</a>';
      }
    ?>
  </div>
</aside>
