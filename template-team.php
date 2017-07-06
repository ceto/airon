<?php
/**
* Template Name: The Team Template
*/
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
    <?php
      $the_members = new WP_Query( array(
        'posts_per_page'      => -1,
        'post_type' => array('member'),
        'orderby' => 'menu_order'
      ));
    ?>
    <div class="wrapper ps ps--notop">
        <div class="row small-up-2 medium-up-3 tablet-up-4">
            <?php while ($the_members->have_posts()) : $the_members->the_post(); ?>
            <div class="column">
                <?php get_template_part('templates/membercard'); ?>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
<?php endwhile; ?>