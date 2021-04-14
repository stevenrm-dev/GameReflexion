<div class="group contain off-sidebar footer-space">
  <main class="principal-content">
    <?php while(have_posts()): the_post(); ?>
      <article class="enter-blog">
       <div class="post-bg">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('special'); ?></a>
        <header class="info-post">
          <div class="title-post">
            <h3><?php the_title(); ?></h3>
          </div>
        </header>
       </div>
      </article>
    <?php endwhile; ?>
  </main>
  <div class="pagination">
    <?php echo paginate_links(); ?>
  </div>
  <?php  //get_sidebar(); ?>
 </div>