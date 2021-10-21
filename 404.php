
<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

	<main id="primary" class="page site-main">

	<div class = "content contentInPage centrElem">	 
		<div class="container">
			<div class="error-not-found-сontainer">
				<div class="feedback__title">
					404!
				</div>
				<div class="error-not-found__inner">
					<h1 class="feedback__title">Запрашиваемая страница не найдена!</h1>
				</div>
				<div class="error-not-found__inner">
					Вернитесь на <a href="/">главную</a> или воспользуйтесь
					<a href="/karta-sajta">картой</a> сайта.
				</div>
				<div class="error-not-found__inner">
					Наши <a href="/kontakty">контакты</a>.
				</div>
			</div>
		</div>
	</div>

	</main>

<?php get_footer(); ?>