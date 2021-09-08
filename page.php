
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package light_market
 */

get_header(); ?>

<?php get_template_part('template-parts/header-section');?> 

<main role="main">
	<ul class="breadcrumbs">
		<div class="container">
			<li class="breadcrumbs__item"><a href class="breadcrumbs__link">Главная</a></li>
			<li class="breadcrumbs__item">Политика конфиденциальности</li>
		</div>
	</ul> 
	<section class="content"> 
		<div class="container">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title();?></h1>
				<?php the_content();?>
			<?php endwhile;?>
		<?php endif; ?> 

	</div>
</section>

<?php get_template_part('template-parts/feedback-section');?>

</main>

<?php get_footer();