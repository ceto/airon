<?php use Roots\Sage\Titles; ?>
<section class="pagehead">
  <div class="container row column">
  <img class="pagehead__logo" src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logoa.svg" alt="Airon">
  <h3 class="pagehead__title"><a href="<?= get_permalink(get_option( 'page_for_posts' )) ?>"><?= get_the_title(get_option( 'page_for_posts' )) ?></a></h3>
  </div>
</section>
