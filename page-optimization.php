<?php 

/*
Template Name: Страница - Автоматизация бизнеса
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main role="main">
	<?php get_template_part('template-parts/usl-banner');?>
    <?php get_template_part('template-parts/brodecramp');?>

	<?php get_template_part('template-parts/obp-whot-do');?>

	<?php get_template_part('template-parts/all-usl');?>
	<?php get_template_part('template-parts/feedback-section');?>
	
</main>

<?php get_footer(); 
