<?php

get_header();
?>
<main class="container">

        <img src="<?php bloginfo('template_url'); ?>/img/leegbier.gif" class="error-img">
        <div class="error-text">
        <h1>Opgelet, je hebt te diep in onze website gekeken</h1>
        <p>De pagina die je probeerde te bereiken bestaat niet.
Klik op onderstaande knop om terug te keren naar de home pagina.</p>
        <a href="<?php bloginfo('template_url'); ?>/jupiler-00">
            terug naar de homepagina
        </a>
        </div>
</main>

<?php
    get_footer();   
?>