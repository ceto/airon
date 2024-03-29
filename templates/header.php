<header class="banner">
  <div class="banner__container">
    <a class="banner__brand" href="<?= esc_url(home_url('/')); ?>">
      <svg width="284px" height="76px" preserveAspectRatio="xMinYMin" viewBox="0 0 284 76" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <title>Airon</title>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="logoairon" fill-rule="nonzero" fill="#231F20">
                  <g id="tail" transform="translate(69.000000, 14.000000)">
                      <polygon id="Shape" points="0.2 1.1 13.2 1.1 13.2 60.3 0.2 60.3"></polygon>
                      <path d="M30.3,1.1 L57.4,1.1 C64.9,1.1 70.8,3.2 74.7,7.1 C78,10.4 79.8,15.1 79.8,20.6 L79.8,20.8 C79.8,30.4 74.6,36.4 67.1,39.2 L81.6,60.4 L66.4,60.4 L53.7,41.4 L43.5,41.4 L43.5,60.4 L30.5,60.4 L30.5,1.1 L30.3,1.1 Z M56.5,29.9 C62.8,29.9 66.5,26.5 66.5,21.5 L66.5,21.3 C66.5,15.7 62.6,12.8 56.3,12.8 L43.4,12.8 L43.4,29.8 L56.5,29.8 L56.5,29.9 Z" id="Shape"></path>
                      <path d="M88.9,30.9 L88.9,30.7 C88.9,13.9 102.2,0.1 120.5,0.1 C138.8,0.1 151.9,13.7 151.9,30.6 L151.9,30.8 C151.9,47.6 138.6,61.4 120.3,61.4 C102,61.4 88.9,47.7 88.9,30.9 Z M138.2,30.9 L138.2,30.7 C138.2,20.5 130.8,12.1 120.3,12.1 C109.8,12.1 102.5,20.4 102.5,30.5 L102.5,30.7 C102.5,40.9 109.9,49.3 120.4,49.3 C131,49.4 138.2,41.1 138.2,30.9 Z" id="Shape"></path>
                      <polygon id="Shape" points="162.3 1.1 174.3 1.1 202 37.6 202 1.1 214.9 1.1 214.9 60.3 203.8 60.3 175.1 22.6 175.1 60.3 162.2 60.3 162.2 1.1"></polygon>
                  </g>
                  <polyline id="firstletter" points="31.2 30.4 31.2 30.4 13.4 74.4 0.1 74.4 31.4 0.6 62.8 74.3 49.2 74.3 31.2 30.4 49.2 74.3"></polyline>
              </g>
          </g>
      </svg>
    </a>
    <nav class="banner__nav">
      <?php
      // if (has_nav_menu('secondary_navigation')) :
      //   wp_nav_menu(['theme_location' => 'secondary_navigation', 'menu_class' => 'menu--sec']);
      // endif;
      ?>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu--main']);
      endif;
      ?>
    </nav>
    <div class="banner__langselblock">
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
    <div class="banner__ctablock">
      <a href="<?php the_permalink(4990485); ?>" class="banner__cta"><?= __('Ready to <em>get started?</em>','airon'); ?></a>
    </div>
    <div class="banner__mobileblock">
        <button type="button" class="menutoggler" data-toggle="mobilenavcanvas"></button>
    </div>
  </div>
</header>
