<?php /* Template Name: Posts */ ?>
<?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<?php
  get_header();
?>
<main class="container">
<?php if ( $wpb_all_query->have_posts() ) : ?>

    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
      <?php

        the_title('<h2 class="blog_title"><a href="' . get_post_permalink() . ' ">', '</a></h2>');

        echo "<p class='blog_time'>";

        the_content();
        echo "<hr>";
      ?>

    <?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</main>
<?php
  get_sidebar();
  get_footer();
?>
