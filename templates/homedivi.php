<div class="row">
    <div class="columns tablet-6">
        <h3><em>for</em> Corporate clients</h3>
        <?php
        $args = array(
        'post_type' => array('service'),
        'order'               => 'ASC',
        'orderby'             => 'menu_order',
        'posts_per_page'      => -1,
        'meta_key'       =>    'forcorporate',
        'meta_value'    => true
        );
        $services = new WP_Query( $args );
        ?>
        <ul class="divispeclist">
            <?php while ($services->have_posts()) : $services->the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
    </div>
    <div class="columns tablet-6">
        <h3><em>for</em> Private clients</h3>
        <?php
        $args = array(
        'post_type' => array('service'),
        'order'               => 'ASC',
        'orderby'             => 'menu_order',
        'posts_per_page'      => -1,
        'meta_key'       =>    'forprivate',
        'meta_value'    => true
        );
        $services = new WP_Query( $args );
        ?>
        <ul class="divispeclist">
            <?php while ($services->have_posts()) : $services->the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
<?php wp_reset_postdata(); ?>