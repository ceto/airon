<?php
    $thepartners =  new Wp_Query( array(
        'post_type' => array('client'),
        'order'               => 'ASC',
        'orderby'             => 'menu_order',
        'posts_per_page'         => -1
    ));

?>
<aside class="partners">
  <div class="row column">
    <!-- <h2 class="indentedtitle"><?= __('Proud to be partner with', 'airon') ?></h2> -->
    <div class="owl-carousel owl-plogos plogos">
        <?php while ($thepartners->have_posts()) : $thepartners->the_post(); ?>
            <div class="plogos__item">
                <?php the_post_thumbnail('small'); ?>
            </div>
        <?php endwhile; ?>
    </div>
  </div>
</aside>
<?php wp_reset_postdata(); ?>