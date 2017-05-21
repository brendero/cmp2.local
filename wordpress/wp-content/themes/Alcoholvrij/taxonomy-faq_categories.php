<?php
/*
    Template Name: Faq Template
*/

get_header();
?>
<main class="container">

    <section class="accordions">
                <h3>Veelgestelde vragen</h3>
        <?php 
                $args = array('post_type' => 'faq');
                    
                    $faqs = get_posts( $args );

                        foreach($faqs as $faq) {
                            setup_postdata($faq);

                            echo '<div class="accordion">';
                            the_title();
                            echo '</div>';

                            echo '<article class="panel">';
                            echo the_content('<p>', '</p>');
                            echo '</article>';
                        }

            ?>
    </section>
                
  </main>


<?php
    get_sidebar();
    get_footer();
?>
