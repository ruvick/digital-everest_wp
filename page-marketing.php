<?php 

/*
Template Name: Страница - On-line маркетинг
Template Post Type: page
*/

get_header(); ?>


<?php get_template_part('template-parts/header-section');?>

<main role="main">

    <?php get_template_part('template-parts/usl-banner');?>
    <?php get_template_part('template-parts/brodecramp');?>

    <?php get_template_part('template-parts/mrk-usl');?>

    <?php get_template_part('template-parts/all-usl');?>
    <?php get_template_part('template-parts/feedback-section');?>

</main>

<?php get_footer(); 
