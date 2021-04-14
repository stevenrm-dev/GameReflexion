<?php 
if(is_page(140) || is_page(171) || is_page(32) || is_page(3) || is_page(117)) {
  echo do_shortcode("[cta-blog]");
}
elseif(is_page(8)) {
}

else {
  echo do_shortcode("[cta-apoyo]");
}

?>
<footer class="site-footer">
    <div class="content-footer">
      <div class="footer-widgets">
        <div class="contain">
          <?php
          dynamic_sidebar('footer_w1');
          dynamic_sidebar('footer_w2');
          dynamic_sidebar('footer_w3');
          ?>
        </div>
      </div>
      <div class="copyright">
          <div class="contain">
            <p class="copy-fix"><?php echo get_bloginfo('name') . " " . date('Y') . " © |"; ?> Todos los derechos reservados. </p>
            <ul class="copy-legal">
              <li><a href="/aviso-legal">Aviso legal</a></li>
              <li><a href="/politica-privacidad">Política de privacidad</a></li>
              <li><a href="/politica-de-cookies">Política de cookies</a></li>
            </ul>
          </div>
      </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
