<?php
/**
* Template Name: Specializations Lister
*/
?>
<?php while (have_posts()) : the_post(); ?>

<?php
$specs = get_terms([
'taxonomy' => 'specialization',
'hide_empty' => false,
]);
?>
<div class="homespecs ps ps--dark">
    <div class="container row column" style="text-align: center;">
      <img class="pagehead__logo" src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logoa.svg" alt="Airon">
      <h3 class="pagehead__title"><?php the_title(); ?></h3>
    </div>
    <br>
    <div class="container awrapper awrapper--narrow">
        <div class="row column">
        <ul class="servicepromogrid" data-equalizer data-equalize-on="tablet">
            <?php foreach ($specs as $key => $speci) : ?>
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
                    )),
                );
                $services = new WP_Query( $args );
            ?>
            <li>
                <div class="specicard" style="background-color: <?= speccolor($speci->term_id) ?>" data-equalizer-watch>
                    <h3 class="specicard__title"><a href="<?= get_term_link($speci) ?>"><?= $speci->name ?></a></h3>
                    <ul class="specicard__list">
                        <?php while ($services->have_posts()) : $services->the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                    <?php $content_arr = get_extended ( get_term($speci)->description ); //var_dump($content_arr); ?>
                    <div class="specicard__summary">
                      <?= apply_filters('the_content', preg_replace('/<img[^>]+./','',$content_arr['main'])); ?>
                    </div>
                    <a href="<?= get_term_link($speci) ?>" class="specicard__action"><?= __('Show','airon') ?> <?= $speci->name ?> <?= __('Services','airon') ?></a>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php wp_reset_postdata(); ?>
        </div>
    </div>
    <br><br>
</div>
<?php endwhile; ?>
