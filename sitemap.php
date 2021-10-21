
<?php
/*
Template Name: Карта сайта
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?> 

<main role="main">
	<section class="content"> 	
		<ul class="breadcrumbs">
			<div class="container">
				<li class="breadcrumbs__item"><a href class="breadcrumbs__link">Главная</a></li>
				<li class="breadcrumbs__item">Карта сайта</li>
			</div>
		</ul> 
		<div class="container htmlsitemap-container">
			<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title();?></h1>
					<?php the_content();?>
				<?php endwhile;?>
			<?php endif; ?> 
			<?php do_shortcode('[htmlsitemap]'); ?>
		</div>
</section>
</main>

<?php get_footer();