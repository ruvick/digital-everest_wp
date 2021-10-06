<!DOCTYPE html>
<html class="no-js  page" lang="ru">
<head>

  <title><?php wp_title(); ?></title>

  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="Новый сайт">

  <meta name="yandex-verification" content="96cc21ba5e2d2303" />

  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/falt/icon256.png" sizes="256x256">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/falt/icon128.png" sizes="128x128">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/falt/icon64.png" sizes="64x64">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/falt/icon32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/falt/icon16.png" sizes="16x16">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/falt/fav.svg" sizes="any">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/img/apple-touch-icon.png">

  <link rel="manifest" href="/img/site.webmanifest">
  <link rel="mask-icon" href="/img/safari-pinned-tab.svg" color="#ffffff"> 
  <link rel="shortcut icon" href="/img/favicon.ico">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/img/mstile-144x144.png">
  <meta name="msapplication-config" content="/img/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <script>
    // Маркер работающего javascript
    document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
    document.addEventListener('DOMContentLoaded', function(){
      if (window.isMobile !== undefined) {
        // console.log(isMobile);
        if(isMobile.any) {
          var rootClasses = ' is-mobile';
          for (key in isMobile) {
            if(typeof isMobile[key] === 'boolean' && isMobile[key] && key !== 'any') rootClasses += ' is-mobile--'+key;
            if(typeof isMobile[key] === 'object' && key !== 'other') {
              for (type in isMobile[key]) {
                if(isMobile[key][type]) rootClasses += ' is-mobile--'+key+'-'+type;
              }
            }
          }
          document.documentElement.className += rootClasses;
        }
      }
      else {
        console.log('Классы для мобильных не добавлены: в сборке отсутствует isMobile.js');
      }
    });
  </script>

  <?php wp_head();?>   

</head>
<body class="body">
  <div class="wrapper">
  <div class="page__inner">
    <div class="page__content">
      <!-- Подключение  модальных окон-->
      <? include "modal-win.php";?>