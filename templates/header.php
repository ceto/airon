<header class="banner">
  <div class="container row column">
    <a class="banner__brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="banner__nav">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu']);
      endif;
      ?>
    </nav>
  </div>
</header>
