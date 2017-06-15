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
            <p>&copy; 2017 Airon Kft. &middot; All Rights reserved &middot; <a href="<?= get_permalink(4990448); ?>">Privacy statement</a></p>
            <p> Phone: <a href="tel:+36 1 123 456">+36 1 123 456</a> &middot; E-mail: <a href="mailto:office@airon.com">office@airon.com</a> </p>
        </div>
        <div class="sitefooter__bottom row column">
            <p>site by <a href="http://hydrogene.hu" target="_blank">HYDROGENE</a></p>
            <?php //dynamic_sidebar('sidebar-footer'); ?>
        </div>
    </div>
</footer>