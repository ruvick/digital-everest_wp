<?php 

/*
Template Name: Страница Контакты
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main role="main">
	<ul class="breadcrumbs">
		<div class="container">
			<li class="breadcrumbs__item"><a href class="breadcrumbs__link">Главная</a></li>
			<li class="breadcrumbs__item"><a href class="breadcrumbs__link">Контакты</a></li> 
		</div>
	</ul>
	<section class="contacts">
		<div class="container">
			<div class="contacts__row">
				<div class="contacts__main">
					<h1>Контактная информация</h1>
					<div class="contacts-list">
						<div class="part">
							<span>Адрес:</span>
							<? $adr = carbon_get_theme_option("as_address"); if (!empty($adr)){?><h5><? echo $adr; ?></h5><?}?>
						</div>

						<div class="part">
							<span>Email:</span>
							<? $mail = carbon_get_theme_option("as_email"); if (!empty($mail)){?><h5><a href="mailto:<? echo $mail; ?>"><? echo $mail; ?></a></h5><?}?>
						</div>

						<div class="part">
							<span>Коммерческий отдел:</span>
							<? $tel2 = "+7 (4712) 22-06-69"; if (!empty($tel2)){?><h5><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel2); ?>"><? echo $tel2; ?></a></h5><?}?> 
						</div>

						<div class="part">
							<span>Отдел по автоматизации БП:</span>
							<? $tel2 = "+7 (4712) 55-10-01"; if (!empty($tel2)){?><h5><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel2); ?>"><? echo $tel2; ?></a></h5><?}?> 
						</div>
					</div>
				</div>
				<div id="map" class="contacts__map">
					<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script> 

					<script>
						ymaps.ready(init); 

						function init () {
							var myMap = new ymaps.Map("map", {
        // Координаты центра карты
        center:[<?php echo carbon_get_theme_option('map_point') ?>],
        // Масштаб карты
        zoom: 17,
        // Выключаем все управление картой
        controls: []
      }); 

							var myGeoObjects = [];

    // Указываем координаты метки
    myGeoObjects = new ymaps.Placemark([<?php echo carbon_get_theme_option('map_point') ?>],{
    								// hintContent: '<div class="map-hint">Авто профи, Курск, ул.Комарова, 16</div>',
    								balloonContent: '<div class="map-hint"><?php echo carbon_get_theme_option('text_map') ?>', },{
    									iconLayout: 'default#image',
                    // Путь до нашей картинки
                    iconImageHref:  '<?php bloginfo("template_url"); ?>/img/icons/map-marker.svg',  
                    // Размеры иконки
                    iconImageSize: [65, 65],
                    // Смещение верхнего угла относительно основания иконки
                    iconImageOffset: [-25, -100]
                  });

    var clusterer = new ymaps.Clusterer({
    	clusterDisableClickZoom: false,
    	clusterOpenBalloonOnClick: false,
    });
    
    clusterer.add(myGeoObjects);
    myMap.geoObjects.add(clusterer);
    // Отключим zoom
    myMap.behaviors.disable('scrollZoom');

  }
</script>
</div>
</div>
</div>
</section>
<?php get_template_part('template-parts/feedback-section');?>

</main>

<?php get_footer(); 
