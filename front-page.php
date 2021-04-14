<?php get_header(); ?>
<?php
$pag_name = get_option('blogname'); //Coge el nombre de la web
 // Parámetros de la consulta
$arg = array (
    'posts_per_page' => 1,
   );

// Creamos un objeto WP_Query	
$entrada = new WP_Query ($arg);

// Si tenemos entradas en nuestro objeto... 
if ($entrada->have_posts()){

// ...iniciamos el bucle
while ($entrada->have_posts()){
    $entrada->the_post(); ?>
    <div class="hero-home">
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
    <?php 
}

// Restablecemos los datos de las entradas
wp_reset_postdata();

} ?>
        <div class="intro-home">
                <div class="content-hero">
                    <h4>El poder está en ti</h4>
                    <h1>Si le das forma te dará fuerza</h1>
                    <a href="<?php echo get_permalink() . '/blog/analisis';?>"><img src="<?php echo get_template_directory_uri() . '/img/espada.png'; ?>" alt="espada" class="icon-kingdom"></a>
                    <a href="<?php echo get_permalink() . '/blog/actualidad';?>"><img src="<?php echo get_template_directory_uri() . '/img/escudo.png'; ?>" alt="escudo" class="icon-kingdom"></a>
                    <a href="<?php echo get_permalink() . '/blog/opinion';?>"><img src="<?php echo get_template_directory_uri() . '/img/cetro.png'; ?>" alt="cetro" class="icon-kingdom"></a>
                    <h4>Elige bien</h4>
                    <a href="#blog-home" id="scroll-down"><i class="fas fa-angle-down"></i></a>
                </div>
            </div>
    </div>
    
    <div class="group contain off-sidebar posts-home" id="blog-home">
        <main class="principal-content">
    <?php 
        $arg2 = array(
            'posts_per_page' => 10,
        );

        $lista_entradas = new WP_Query ($arg2);
        
        if ($lista_entradas->have_posts()){
            while ($lista_entradas->have_posts()){
                $lista_entradas->the_post(); ?>
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
            <?php }
             wp_reset_postdata();
        } ?>
        </main>
        <div class="mas-noticias">
            <a href="/noticias" class="btn-style">VER MÁS</a>
        </div>
    </div>

    <div class="group contain off-sidebar posts-home" id="blog-home2">
        <h2><a href="https://www.youtube.com/channel/UChfO7Xyx0dLcn0pJp3uAfmg" target="_blank"><i class="fab fa-youtube"></i> Vídeos</a></h2>
        <main class="principal-content">
    <?php 
        $arg2 = array(
            'cat' => 3,
            'posts_per_page' => 4,
        );

        $lista_entradas = new WP_Query ($arg2);
        
        if ($lista_entradas->have_posts()){
            while ($lista_entradas->have_posts()){
                $lista_entradas->the_post(); ?>
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
            <?php }
             wp_reset_postdata();
        } ?>
        </main>
    </div>
    <div class="cta-patreon">
        <div class="cta-bg">
            <h2>Únete a la causa, haz de este tu castillo</h2>
            <p>Con tu apoyo este proyecto podrá mantener su actividad y crecer para alcanzar nuevos objetivos. Además tendrás mayor participación y ventajas.</p>
            <div class="btn-group">
                <a href="/apoyar" class="btn-style btn-apoyar"><i class="fas fa-hands-helping"></i> APOYAR</a>
                <a href="https://www.patreon.com/gamereflexion" class="btn-style btn-patreon" target="_blank"><i class="fab fa-patreon"></i> PATREON</a>
            </div>
        </div>
    </div>

    <div class="group contain off-sidebar posts-home" id="blog-home3">
        <h2 class="post-title">Análisis</h2>
        <main class="principal-content">
    <?php 
        $arg2 = array(
            'cat' => 4,
            'posts_per_page' => 4,
        );

        $lista_entradas = new WP_Query ($arg2);
        
        if ($lista_entradas->have_posts()){
            while ($lista_entradas->have_posts()){
                $lista_entradas->the_post(); ?>
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
            <?php }
             wp_reset_postdata();
        } ?>
        </main>
    </div>

    <div class="group contain off-sidebar posts-home" id="blog-home4">
        <h2 class="post-title">Actualidad</h2>
        <main class="principal-content">
    <?php 
        $arg2 = array(
            'cat' => 7,
            'posts_per_page' => 4,
        );

        $lista_entradas = new WP_Query ($arg2);
        
        if ($lista_entradas->have_posts()){
            while ($lista_entradas->have_posts()){
                $lista_entradas->the_post(); ?>
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
            <?php }
             wp_reset_postdata();
        } ?>
        </main>
    </div>

    <div class="group contain off-sidebar posts-home" id="blog-home5">
        <h2 class="post-title">Opinión</h2>
        <main class="principal-content">
    <?php 
        $arg2 = array(
            'cat' => 6,
            'posts_per_page' => 4,
        );

        $lista_entradas = new WP_Query ($arg2);
        
        if ($lista_entradas->have_posts()){
            while ($lista_entradas->have_posts()){
                $lista_entradas->the_post(); ?>
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
            <?php }
             wp_reset_postdata();
        } ?>
        </main>
    </div>

<?php get_footer() ?>
