<header class="page-header" role="banner">
  <div class="container">
    <div class="page-header__inner">
      <nav id="main-nav" class="main-nav" role="navigation">
        <a href="<? bloginfo("url")?>" class="logo"><img src="<?php echo get_template_directory_uri();?>/img/logo-light.svg" alt="Digital-Everest"></a>
        
        <?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'main-nav__list',
						'container' => false )); ?> 

          <!-- <ul class="main-nav__list">
            <li class="main-nav__item main-nav__item--active">
            <a href="#" class="main-nav__link">
              Главная
            </a>
          </li>
          <li class="main-nav__item">
            <a href="#services" class="main-nav__link"> 
              Услуги
            </a>
          </li>
          <li class="main-nav__item">
            <a href="<?php echo get_permalink(10);?>" class="main-nav__link">
              Контакты  
            </a>
          </li>
        </ul> -->
        <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="page-header__tel"><? echo $tel = carbon_get_theme_option("as_phones_1"); ?></a>
        <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="mob-callback__phone"></a>
        <a href="#callback" class="btn btn--main2-outline _popup-link">Заказать звонок</a>
        <button id="main-nav-toggler" class="main-nav__toggler  burger"><span></span></button>
      </nav>
    </div>
  </div>
</header> 

<nav class="mob-menu">
<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'mob-menu__list',
						'container' => false )); ?> 

  <!-- <ul class="mob-menu__list">
    <li><a href="numbers.html" class="menu__link">Главная</a></li>
    <li><a href="#services" class="menu__link">Услуги</a></li>
    <li><a href="<?php echo get_permalink(10);?>" class="menu__link">Контакты</a></li>
  </ul> -->
</nav>