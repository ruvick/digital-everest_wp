<div class="page__footer-wrapper">
  <footer class="page-footer" role="contentinfo">
    <div class="container">
      <div class="page-footer__top">
        <img src="<?php echo get_template_directory_uri();?>/img/logo-light.svg" alt="Digital-Everest">
        <?php wp_nav_menu( array('theme_location' => 'menu_footer','menu_class' => 'footer-nav__list',
						'container' => false )); ?> 
        <div class="footer-nav__list">
          <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="menu-item page-header__tel"><? echo $tel = carbon_get_theme_option("as_phones_1"); ?></a>
          <p class="menu-item"><span>Адрес:</span> г. Курск, ул. 1-я Пушкарная, д. 28</p>
        </div>
        <div class="social">
          <ul class="social__list">
            <li class="social__item">
              <a href="#" class="social__link">
                <svg width="25" height="25"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo get_template_directory_uri();?>/img/sprite-svg.svg#social-icon-inst"/></svg>
              </a>
            </li>
            <li class="social__item">
              <a href="https://vk.com/digital_everest" class="social__link">
                <svg width="25" height="25"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo get_template_directory_uri();?>/img/sprite-svg.svg#social-icon-vk"/></svg>
              </a>
            </li>
            <li class="social__item">
              <a href="#" class="social__link"> 
                <svg width="25" height="25"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo get_template_directory_uri();?>/img/sprite-svg.svg#social-icon-fa"/></svg>
              </a>
            </li>
            <li class="social__item">
              <a href="#" class="social__link">
                <svg width="25" height="25"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo get_template_directory_uri();?>/img/sprite-svg.svg#social-icon-tw"/></svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="page-footer__bottom">
        <p class="page-footer__copyright">©2021 «Digital Everest» | Разработано  - <a href = "https://asmi-studio.ru/">Asmi-Studio</a></p>
        <p class="page-footer__links-group">
          <a href="#">Пользовательское соглашение</a>
          <a href="<?php echo get_permalink(5);?>">Политика конфиденциальности</a>
        </p>
      </div>
    </div>
  </footer>
</div>
</div>
</div>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Digital-Everest",
  "url": "https://digital-everest.ru/",
  "logo": "https://digital-everest.ru/wp-content/themes/digital-everest/img/logo-light.svg",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+7 (4712) 22-06-69",
    "contactType": "customer service",
    "areaServed": "RU",
    "availableLanguage": "Russian"
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Пушкарная, д. 28",
    "addressLocality": "Курск",
    "addressRegion": "Курская область",
    "addressCountry": "Россия"
  }
}
</script>

<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(71826997, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/71826997" style="position:absolute; left:-9999px;" alt="Yandex Metrica" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>