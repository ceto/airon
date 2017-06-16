<nav class="mobilenav">
    <h3 class="mobilenav__title"><?= __('Specs & Services','airon'); ?></h3>
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu menu--mobile vertical']);
      endif;
    ?>
    <h3 class="mobilenav__title"><?= __('See also','airon'); ?></h3>
    <?php
      if (has_nav_menu('secondary_navigation')) :
        wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'menu menu--mobile vertical menu--mobile--sec']);
      endif;
    ?>
</nav>
<footer class="mobilecanvas__footer">
  <?php dynamic_sidebar('sidebar-offcanvas'); ?>
</footer>