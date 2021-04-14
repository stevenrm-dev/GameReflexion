<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
	  
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166283030-1"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'UA-166283030-1');
</script>

  </head>
  <body>
    <header class="site-header">
      <div class="contain-menu1">
        <div class="logo">
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_template_directory_uri() ?>/img/gamereflexion-logo.svg">
          </a>
        </div>
        <div class="contain">
          <?php
            $args = array(
              'theme_location' => 'header-menu',
              'container' => 'nav',
              'container_class' => 'site-menu',
              'container_id' => 'menu'
            );
            wp_nav_menu($args);
           ?>
        </div>
      </div>
    </header>
