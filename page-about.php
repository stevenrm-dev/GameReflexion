<?php
/*
* Template Name: Página Simple (con cabecera)
*/

get_header();
while(have_posts()): the_post();
  get_template_part('template-parts/loop', 'content');
endwhile;
get_footer() ?>
