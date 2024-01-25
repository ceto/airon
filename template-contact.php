<?php
/**
* Template Name: Contact Template
*/
?>
<?php
$specs = get_terms([
  'taxonomy' => 'specialization',
  'hide_empty' => false,
  'meta_query' => array(
    array(
       'key'       => 'showoncontact',
       'value'     => 1,
       'compare'   => '=='
    )
  )
]);
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>

    <div class="wrapper ps ps--narrow">
        <div class="row column">
            <div class="lead">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <div class="wrapper ps ps--notop">
        <div class="row column">
          <ul class="servicepromogrid-mobiledouble">
              <?php foreach ($specs as $key => $speci) : ?>
              <li>
                  <section class="coinfo">
                      <?php if ($logo = get_field( 'logo', 'specialization_'.$speci->term_id ) ): ?>
                        <img class="coinfo__logo" src="<?= $logo['url'] ?>" alt="<?= $speci->name ?>">
                      <?php else: ?>
                        <img class="coinfo__logo" src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logoairon.svg" alt="<?= $speci->name ?>">
                      <?php endif; ?>
                      <h3 class="coinfo__coname"><?= get_field( 'company_name', 'specialization_'.$speci->term_id ) ?></h3>
                      <p class="coinfo__addr">
                          H-<?= get_field( 'zip', 'specialization_'.$speci->term_id ) ?>, <?= get_field( 'city', 'specialization_'.$speci->term_id ) ?><br>
                      <?= get_field( 'address', 'specialization_'.$speci->term_id ) ?></p>
                      <p class="coinfo__contact">
                          Tel.: <a href="tel:<?= get_field( 'tel', 'specialization_'.$speci->term_id ) ?>"><?= get_field( 'tel', 'specialization_'.$speci->term_id ) ?></a><br>
                          E-mail: <a href="mailto:<?= get_field( 'email', 'specialization_'.$speci->term_id ) ?>"><?= get_field( 'email', 'specialization_'.$speci->term_id ) ?></a>
                      </p>
                      <?php $thefulladdress = get_field( 'zip', 'specialization_'.$speci->term_id ).' '.get_field( 'city', 'specialization_'.$speci->term_id ).' '.get_field( 'address', 'specialization_'.$speci->term_id ) ;  ?>
                      <p><small><a target="_blank" href="http://maps.google.com/maps?q=<?= urlencode($thefulladdress); ?>"><?= __('show on map','airon') ?></a></small></p>
                  </section>
              </li>
              <?php endforeach; ?>
          </ul>
        </div>
    </div>
    <div class="container">
        <!-- <img class="" src="http://placehold.it/1800x600/?text=Google+Map" alt="Co. logo"> -->
    </div>

<?php endwhile; ?>
