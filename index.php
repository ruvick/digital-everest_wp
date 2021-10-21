<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main role="main">
	<div class="intro">
		<div class="container">
			<img src="<?php echo get_template_directory_uri();?>/img/man.png" alt="Получить консультацию" class="intro-image">

			<div class="slider-intro-caption">
				<? 
					$slide = carbon_get_theme_option('complex_main_slider');
					if ($slide) {
						$pictIndex = 0;
						foreach ($slide as $item) {
				?>
				<div class="intro-caption">
					<div class="intro-title"><? echo $item['ms_head']; ?></div>
					<p class="intro-lead-text"><? echo $item['ms_sub_head']; ?></p>
					<p class="intro-text"><? echo $item['ms_main_text']; ?></p>
					<a href="#callback" class="btn btn--dark intro-btn _popup-link">Получить консультацию</a>
				</div>

				<?
						}
					}
				?>
				<!-- <div class="intro-caption">
					<h1 class="intro-title">Внедрение <br>битрикс<span>24</span></h1>
					<p class="intro-lead-text">Управляйте компание легко</p>
					<p class="intro-text">Все в одном: CRM, Корпоративный портал, <br> управление проектами и командами</p>
					<a href="#callback" class="btn btn--dark intro-btn _popup-link">Получить консультацию</a>
				</div>
				<div class="intro-caption">
					<h1 class="intro-title">Внедрение <br>битрикс<span>24</span></h1>
					<p class="intro-lead-text">Управляйте компание легко</p>
					<p class="intro-text">Все в одном: CRM, Корпоративный портал, <br> управление проектами и командами</p>
					<a href="#callback" class="btn btn--dark intro-btn _popup-link">Получить консультацию</a>
				</div> -->
			</div>

		</div>
	</div>
	<section class="sn about">
		<div class="container">
			<div class="sn__head">
				<h2 class="sn__title">О компании</h2>
			</div>
			<div class="about__inner">
				<?
					echo apply_filters( 'the_content', carbon_get_theme_option('about_home'));
				?>
			</div>
		</div>
	</section>
	<section class="sn work">
		<div class="container">
			<div class="sn__head">
				<h2 class="sn__title">Как мы работаем</h2>
			</div>
			<div class="work__inner">
				<div class="work__col">
					<div class="work-card">
						<div class="work-card__num"><span>1</span></div>
						<div class="work-card__icon"><svg width="114" height="75"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo get_template_directory_uri();?>/img/sprite-svg.svg#work-icon-01"/></svg></div>
							<div class="work-card__title">Аналитика</div>
						</div>
					</div>
					<div class="work__col">
						<div class="work-card">
							<div class="work-card__num"><span>2</span></div>
							<div class="work-card__icon"><svg width="114" height="75"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo get_template_directory_uri();?>/img/sprite-svg.svg#work-icon-02"/></svg></div>
								<div class="work-card__title">Настройка</div>
							</div>
						</div>
						<div class="work__col">
							<div class="work-card">
								<div class="work-card__num"><span>3</span></div>
								<div class="work-card__icon"><svg width="114" height="75"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo get_template_directory_uri();?>/img/sprite-svg.svg#work-icon-03"/></svg></div>
									<div class="work-card__title">Обучение</div>
								</div>
							</div>
							<div class="work__col">
								<div class="work-card">
									<div class="work-card__num"><span>4</span></div>
									<div class="work-card__icon"><svg width="114" height="75"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo get_template_directory_uri();?>/img/sprite-svg.svg#work-icon-04"/></svg></div>
										<div class="work-card__title">Сопровождение</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					
					<?php get_template_part('template-parts/all-usl');?>


					<section class="sn faq">
						<div class="container">
							<div class="faq__wrap">
								<div class="faq__head sn__head">
									<h2 class="sn__title">Часто задаваемые вопросы</h2>
									<div class="sn__sub-title">Не нашли ответ на свой вопрос? <a href="#callback" class="_popup-link">Оставьте заявку</a> и наш специалист свяжется  и ответит на ваш вопрос</div>
								</div>
								
								<div class="faq__inner">
									<div class="accordion-group">
										
									<? 
										$faq = carbon_get_theme_option('complex_faq');
										if ($faq) {
											$pictIndex = 0;
											foreach ($faq as $item) {
									?>

										<section class="accordion-group__accordion <? echo ($pictIndex == 0)?'accordion-group__accordion_expanded':''; ?>">
																	
											<header class="accordion-group__accordion-head">
												<h3 class="accordion-group__accordion-heading">
													<button type="button" class="accordion-group__accordion-btn"><? echo $item['faq_q']; ?></button>
												</h3>
											</header>
																	
											<div class="accordion-group__accordion-panel">
												<div class="accordion-group__accordion-content">
													<?
														echo apply_filters( 'the_content', $item['faq_o']);
													?>
												</div>
											</div>
										</section>
									<?
									$pictIndex++;
											}
										}
									?>



															</div>
														</div>
													</div>
												</div>
											</section>
											<?php get_template_part('template-parts/feedback-section');?>
										</main>
									</div>

									<?php get_footer(); ?> 