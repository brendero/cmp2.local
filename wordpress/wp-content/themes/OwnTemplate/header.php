<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') | bloginfo('description')?></title>
    <?php wp_head();?>
</head>
<body>
<?php
if (function_exists('the_custom_logo')) {
    the_custom_logo();
}
?>
<div id="header">
    <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>


</div>