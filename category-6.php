<?php get_header();
  $pag_blog = get_option('page_for_posts');
  $img_id = get_post_thumbnail_id($pag_blog);
  $img_src = wp_get_attachment_image_src($img_id)[0];
?>
<div class="hero hero-category hero-category6" style="background-image: url(<?php echo get_template_directory_uri() . '/img/bg-opinion.jpg'; ?>);">
  <div class="content-hero">
    <h1 class="post-title"><img src="<?php echo get_template_directory_uri() . '/img/gamereflexion-reflexion.svg'; ?>" alt="Opinión">Opinión</h1>
  </div>
</div>
 <?php 
 get_template_part('template-parts/loop', 'blog');
 get_footer() ?>