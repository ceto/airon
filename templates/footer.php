<footer class="sitefooter <?= is_front_page()?'covered':''; ?>" role="contentinfo">
    <div class="container">
        <div class="sitefooter__top column row">
            <img class="footerlogo" src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logostar.svg" alt="Airon">
            <?php
                $terms = get_terms([
                    'taxonomy' => 'specialization',
                    'hide_empty' => false,
                ]);
            ?>
            <ul class="footer__specilist">
                <?php foreach ($terms as $key => $term) : ?>
                    <li><a href="<?= get_term_link( $term ); ?>"><?= $term->name ?>.</a></li>
                <?php endforeach; ?>
            </ul>
            <p>H-1011, Budapest, Szilágyi Dezső tér 1. | Tel.: +36 1 123 456 | E-mail: <a href="">tax@airon.com</a></p>
        </div>
        <div class="sitefooter__bottom column row">
            <p>&copy; 2017 COPYRIGHT AIRON | ALL RIGHTS RESERVED | <a href="#">PRIVACY STATEMENT</a> | site by <a href="#" target="_blank">HYDROGENE</a></p>
            <?php //dynamic_sidebar('sidebar-footer'); ?>
        </div>
    </div>
</footer>