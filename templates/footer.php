<footer class="sitefooter" role="contentinfo">
    <div class="container">
        <div class="sitefooter__top column row">
            <a href="<?= esc_url(home_url('/')); ?>">
                <img class="footerlogo" src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logostar.svg" alt="Airon">
            </a>
            <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'footer__specilist']);
              endif;
            ?>
            <?php dynamic_sidebar('sidebar-footer'); ?>
        </div>
        <div class="sitefooter__bottom row column">
            <p>site by <a href="http://hydrogene.hu" target="_blank">HYDROGENE</a></p>

        </div>
    </div>
</footer>