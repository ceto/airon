<nav class="mobilenav">
    <!-- <h3 class="mobilenav__title"><?= __('Specs & Services','airon'); ?></h3> -->
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--mobile vertical']);
      endif;
    ?>
    <!-- <h3 class="mobilenav__title"><?= __('See also','airon'); ?></h3>
    <?php
      if (has_nav_menu('secondary_navigation')) :
        wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'menu menu--mobile vertical menu--mobile--sec']);
      endif;
    ?> -->
</nav>
<br><br><br><br>
<footer class="mobilecanvas__footer">
  <?php dynamic_sidebar('sidebar-offcanvas'); ?>
</footer>
<div class="mobilecanvas__langsel">
      <?php if (get_locale() == 'en_US') : ?>
      <a href="http://airontrust.hu/">
        <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/globe.svg">
        <span><?= __('HUN','airon'); ?></span>
      </a>
      <?php else : ?>
        <a href="http://airon.hu/">
          <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/globe.svg">
          <span><?= __('ENG','airon'); ?></span>
        </a>
      <?php endif; ?>
</div>
