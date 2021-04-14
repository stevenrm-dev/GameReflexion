<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
  <div class="content-hero">
    <h1><?php the_title(); ?></h1>
    <h4 class="derecho"><?php the_excerpt(); ?></h4>
  </div>
</div>
<div class="departament contain footer-space">
  <main class="principal-content template-simple">
    <?php the_content();
      if( is_single()):
        get_template_part('template-parts/loop', 'info-post');
      endif;
    ?>

  </main>
</div>
