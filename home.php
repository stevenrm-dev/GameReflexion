<?php get_header();
  $pag_blog = get_option('page_for_posts');
  $img_id = get_post_thumbnail_id($pag_blog);
  $img_src = wp_get_attachment_image_src($img_id, 'full')[0];
?>
<div class="hero" style="background-image: url(<?php echo $img_src ?>);">
  <div class="content-hero">
    <h1><?php echo get_the_title($pag_blog); ?></h1>
  </div>
</div>
 <?php get_template_part('template-parts/loop', 'blog');
 get_footer() ?>
