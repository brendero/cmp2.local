<?php

get_header();
?>

<div class="Container">
    <div id="main">
    front-oage
        <?php 
        if(have_posts()) 
        {
            while(have_posts())
            {
                the_post();
                //Print the title and the content of the current post
                the_title('<h2>', '</h2>');

                the_content();
            }
        }
        else
        {
            echo 'No content available';
        }
        ?>
    </div>
</div>

<?php
    get_sidebar();
    get_footer();
?>