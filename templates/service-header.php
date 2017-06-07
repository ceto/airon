<?php use Roots\Sage\Titles; ?>
<?php
  $specializations = get_the_terms( $post->ID, 'specialization' );
  $peci=$specializations[0];
?>
<section class="pagehead servicehead">
  <div class="container row column">
  <a href="<?= get_term_link( $peci->term_id ); ?>">
    <img class="pagehead__logo" src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logoa.svg" alt="Airon">
  </a>
  <h3 class="pagehead__title"><a href="<?= get_term_link( $peci->term_id ); ?>"><?= $peci->name ?>.</a></h3>
  </div>
</section>
