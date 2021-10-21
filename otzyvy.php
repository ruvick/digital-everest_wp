<?php
/*
Template Name: Отзывы
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">
	<section class="content">
		<ul class="breadcrumbs">
			<div class="container">
				<li class="breadcrumbs__item"><a href class="breadcrumbs__link">Главная</a></li>
				<li class="breadcrumbs__item">Отзывы</li>
			</div>
		</ul> 
		<div class="container">
			<div class="otzyvy-container">
				<div style="width:100%;height:800px;overflow:hidden;position:relative;"><iframe
						style="width:100%;height:100%;border:1px solid #e6e6e6;border-radius:8px;box-sizing:border-box"
						src="https://yandex.ru/maps-reviews-widget/149926303070?comments"></iframe><a
						href="https://yandex.ru/maps/org/didzhital_everest/149926303070/" target="_blank"
						style="box-sizing:border-box;text-decoration:none;color:#b3b3b3;font-size:10px;font-family:YS Text,sans-serif;padding:0 20px;position:absolute;bottom:8px;width:100%;text-align:center;left:0">Диджитал
						Эверест на карте Курска — Яндекс.Карты</a>
				</div>
			</div>
		</div>

	</section>

</main>


<?php get_footer();