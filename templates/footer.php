<?php if ( !is_page_template('template-contactform.php') ) :?>
<footer class="sitefooter" role="contentinfo">
    <div class="">
        <div class="sitefooter__top column row expanded">
            <a href="<?= esc_url(home_url('/')); ?>">
                <img class="footerlogo" src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logostar.svg" alt="Airon">
            </a>
            <ul class="footer__specilist">
            <?php
              $specs = get_terms([
                'taxonomy' => 'specialization',
                'hide_empty' => false,
              ]);
              foreach ($specs as $key => $speci) : ?>
              <li><a href="<?= get_term_link($speci) ?>"><?= $speci->name ?></a></li>
              <?php endforeach; ?>
            </ul>
            <?php dynamic_sidebar('sidebar-footer'); ?>
        </div>
        <div class="sitefooter__bottom column row expanded">
            <p>site by <a href="http://hydrogene.hu" target="_blank">HYDROGENE</a></p>
        </div>
    </div>
</footer>
<?php endif; ?>
