<?php
  get_header();
?>

<main class="container">
  <?php
  if(have_posts())
  {
    while(have_posts())
    {
      the_post();
      //Print the title and the content of the current post
      echo '<a href=' . get_permalink() .'>';
      the_title('<h2>','</h2>');
      echo '</a>';
      the_time();
      the_date();
      the_author();

      if( has_post_thumbnail()) {
        the_post_thumbnail();
      }
      else {
        the_content();
      }
      if(is_home())
      {
        echo wp_tag_cloud();
      }

    }
  }
  else
  {
    echo 'No content available';
  }
  ?>

  
</main>

<?php
  get_sidebar();
  get_footer();
?>
