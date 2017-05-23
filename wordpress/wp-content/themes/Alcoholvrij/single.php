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

      the_title('<h2 class="blog_title">', '</h2>');

      echo "<br> <p class='blog_time'>";

      the_time();

      echo "</p><p class='blog_author'> Gepost door ";
      the_author();
      echo "</p>";

      the_category(', ');

      the_content();
      comments_template();
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
