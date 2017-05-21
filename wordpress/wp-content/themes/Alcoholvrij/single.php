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
      the_title('<h2>', '</h2>');

      the_time();
      the_author();

      the_content();
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
