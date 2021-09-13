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
	<?php get_template_part('template-parts/obp-preim');?>

	<section class="imp-stages">
		<div class="imp-stages__head">
			<div class="container">
				<h3>Этапы автоматизации</h3>
			</div>
		</div>
		<div class="container">
			<div class="imp-stages-card">
				<div class="imp-stages-card-num">Этап <span>1.</span></div>
				<div class="imp-stages-card__head">
					<div class="imp-stages-card__title">Консультация</div>
					<p>Общая оценка ситуации и задач бизнеса.</p>
				</div>
				<div class="imp-stages-card__body">
					<div class="imp-stages-card__body-row">
						<div class="imp-stages-card__body-l">
							<h5>Результат</h5>
							<ul>
								<li>Общая оценка ситуации в бизнесе;</li>
								<li>Определение основных задачь автоматизации.</li>
							</ul>
						</div>
						<div class="imp-stages-card__body-r">
							<h5>Перечень работ</h5>
							<ul>
								<li>Определение стратегических задач бизнеса;</li>
								<li>Изучение текущих методов работы и процессов компании;</li>
								<li>Разработка и согласование концепции автоматизации по блокам задач;</li>
								<li>Оценка порядка сроков и стоимости по каждому блоку.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div class="imp-stages-card">
				<div class="imp-stages-card-num">Этап <span>2.</span></div>
				<div class="imp-stages-card__head">
					<div class="imp-stages-card__title">Концепция автоматизации</div>
					<p>Составление методики и подбор инструментария.</p>
				</div>
				<div class="imp-stages-card__body">
					<div class="imp-stages-card__body-row">
						<div class="imp-stages-card__body-l">
							<h5>Результат</h5>
							<ul>
								<li>Методика автоматизации Вашего бизнеса;</li>
								<li>ПОдобранное программное обеспечение.</li>
							</ul>
						</div>
						<div class="imp-stages-card__body-r">
							<h5>Перечень работ</h5>
							<ul>
								<li>Разработка подробной методики и плана автоматизации;</li>
								<li>Описание бизнес-процессов и требований к автоматизации;</li>
								<li>Определение программного обеспечения для разработки.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div class="imp-stages-card">
				<div class="imp-stages-card-num">Этап <span>3.</span></div>
				<div class="imp-stages-card__head">
					<div class="imp-stages-card__title">Разработка ИТ систем</div>
					<p>Адаптация и разработка программного обеспечения.</p>
				</div>
				<div class="imp-stages-card__body">
					<div class="imp-stages-card__body-row">
						<div class="imp-stages-card__body-l">
							<h5>Результат</h5>
							<ul>
								<li>Готовый программно аппаратный комплекс для автоматизации Вашего бизнеса.</li>
							</ul>
						</div>
						<div class="imp-stages-card__body-r">
							<h5>Перечень работ</h5>
							<ul>
								<li>Выбор методологии разработки;</li>
								<li>Разработка программного продукта;</li>
								<li>Установка системы на пилотных пользователях;</li>
								<li>Демонстрация работающего продукта ключевым сотрудникам;</li>
								<li>Подготовка обучающих материалов по работе с системой;</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div class="imp-stages-card">
				<div class="imp-stages-card-num">Этап <span>4.</span></div>
				<div class="imp-stages-card__head">
					<div class="imp-stages-card__title">Сопровождение и обучение</div>
					<p>Обучение сторудников и корректировка работы ПО.</p>
				</div>
				<div class="imp-stages-card__body">
					<div class="imp-stages-card__body-row">
						<div class="imp-stages-card__body-l">
							<h5>Результат</h5>
							<ul>
								<li>Персонал обученный пользоваться новой информационной системой;</li>
								<li>Отлаженный программный продукт;</li>
							</ul>
						</div>
						<div class="imp-stages-card__body-r">
							<h5>Перечень работ</h5>
							<ul>
								<li>Гарантийное обслуживание программного продукта;</li>
								<li>Постгарантийное обслуживание разработанного ПО;</li>
								<li>Составление методических материалов для персонала;</li>
								<li>Ответы на возникающие вопросы по выбранным срдствам выбранныз каналов связи.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>


		</div>	
	</section>
	
	<?php get_template_part('template-parts/all-usl');?>
	<?php get_template_part('template-parts/feedback-section');?>
	
</main>

<?php get_footer(); 
