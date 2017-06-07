<?php use Roots\Sage\Titles; ?>
<?php
  $specializations = get_the_terms( $post->ID, 'specialization' );
  $speci=$specializations[0];
?>
<section class="pagehead servicehead">
  <div class="container row column">
  <a href="<?= get_term_link( $speci->term_id ); ?>">
    <img class="pagehead__logo" src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logoa.svg" alt="Airon">
  </a>
  <h3 class="pagehead__title"><a href="<?= get_term_link( $speci->term_id ); ?>"><?= $speci->name ?>.</a></h3>
  </div>
</section>
<nav class="servicenav">
  <div class="wrapper">
  <?php
      $args = array(
        'post_type' => array('service'),
        'order'               => 'ASC',
        'orderby'             => 'menu_order',
        'posts_per_page'         => -1,
        'tax_query' => array(
          array(
            'taxonomy'         => 'specialization',
            'field'            => 'id',
            'terms'            => $speci->term_id,
          )
        ),
      );

      $services = new WP_Query( $args );
  ?>
  <ul class="scrollmenu">
    <?php while ($services->have_posts()) : $services->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
  </ul>
  </div>
</nav>
