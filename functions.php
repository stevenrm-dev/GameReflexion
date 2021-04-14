<?php
// CUSTOM WORDPRESS LOGIN
  //Custom style login
function change_login_style() {
  wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/custom-login/login.css' );
}
add_action('login_enqueue_scripts', 'change_login_style');

  //Custom url logo login
  function change_logo_url($url) {
    return '#';
  }
  add_filter('login_headerurl', 'change_logo_url');

  //Custom title logo login
  function change_logo_title() {
    return '';
  }
add_filter('login_headertitle', 'change_logo_title');

// CSS & JS
function numenor_style() {
  wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css', array(), '8.0.1');
  wp_enqueue_style('slicknavCSS', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css', array('normalize'), '1.0.10');
  wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Martel+Sans:700,800,900&display=swap', array(), '1.0.0' );
  wp_enqueue_style('fontAwesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css', array(), '5.3.1');
  wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0.0' );

  wp_register_script('slicknavJS', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);
    wp_enqueue_script('slicknavJS');
  wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('scripts');
}
add_action('wp_enqueue_scripts', 'numenor_style');

// WORDPRESS NATIVE ELEMENTS
function numenor_native_wp() {
  //Title SEO
  add_theme_support('title-tag');
  //MENUS
  register_nav_menus(array(
    'header-menu' => 'Header menu'
  ));

  //WIDGETS
  register_sidebar( array(
    'name' => 'Sidebar 1',
    'id' => 'sidebar_1',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="text-center text-primary">',
    'after_title' => '</h3>'
  ));
  register_sidebar( array(
    'name' => 'Sidebar 2',
    'id' => 'sidebar_2',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="text-center text-primary">',
    'after_title' => '</h3>'
  ));
  register_sidebar( array(
    'name' => 'Footer column 1',
    'id' => 'footer_w1',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="text-center text-primary">',
    'after_title' => '</h3>'
  ));
  register_sidebar( array(
    'name' => 'Footer column 2',
    'id' => 'footer_w2',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="text-center text-primary">',
    'after_title' => '</h3>'
  ));
  register_sidebar( array(
    'name' => 'Footer column 3',
    'id' => 'footer_w3',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="text-center text-primary">',
    'after_title' => '</h3>'
  ));

  //OUTSTANDING IMAGE
  add_theme_support( 'post-thumbnails' );

  // EXCERPT PAGES
  add_post_type_support('page', 'excerpt');

  //NEW IMAGE SIZE
  add_image_size('about', 437, 291, true);
  add_image_size('special', 768, 515, true);
  add_image_size('special_portrait', 435, 526, true);

}
add_action('init', 'numenor_native_wp');

//SHORTCODE FOOTER
function cta_footer1() {
  echo "<div class='cta-blog'>";
  echo "<div class='cta-bg'>";
  echo "<div><h2>Hola, soy un checkpoint</h2></div>";
  echo "<p>Desde aquí puedes hacer un viaje rápido al contenido del blog para no perderte nada o directamente ir a los vídeos, todo comodidad.</p>";
  echo "<div class='btn-group'>";
  echo '<a href="/noticias" class="btn-style btn-apoyar"><i class="fas fa-quote-left"></i> NOTICIAS</a>';
  echo '<a href="https://www.youtube.com/channel/UChfO7Xyx0dLcn0pJp3uAfmg" target="_blank" class="btn-style btn-apoyar"><i class="fab fa-youtube"></i> VÍDEOS</a>';
  echo "</div>";
  echo "</div>";
  echo "</div>";
  }
  add_shortcode('cta-blog', 'cta_footer1');

  function cta_footer2() {
    echo "<div class='cta-patreon'>";
    echo "<div class='cta-bg'>";
    echo "<div><h2>Únete a la causa, haz de este tu castillo</h2></div>";
    echo "<p>Con tu apoyo este proyecto podrá mantener su actividad y crecer para alcanzar nuevos objetivos. Además tendrás mayor participación y ventajas.</p>";
    echo "<div class='btn-group'>";
    echo '<a href="/apoyar" class="btn-style btn-apoyar"><i class="fas fa-hands-helping"></i> APOYAR</a>';
    echo '<a href="https://www.patreon.com/gamereflexion" class="btn-style btn-patreon" target="_blank"><i class="fab fa-patreon"></i> PATREON</a>';
    echo "</div>";
    echo "</div>";
    echo "</div>";
    }
    add_shortcode('cta-apoyo', 'cta_footer2');
  

?>
