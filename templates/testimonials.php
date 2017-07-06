
    <div class="row column">
        <h2 class="indentedtitle"><?= __('Recommendations by Our clients', 'airon') ?></h2>
    </div>

<aside class="testimonials">
    <?php
    $the_partners = new WP_Query( array(
    'posts_per_page'      => 1,
    'post_type' => array(testimonial),
    )); ?>
    <?php while ($the_partners->have_posts() ) : $the_partners->the_post(); ?>
    <div class="wrapper wrapper--narrow ps">
        <div class="row column">
            <div class="testi">
                <blockquote class="testi__quote">
                    <?php the_content(); ?>
                    <cite class="cite--testi">
                    <span class="cite__name"><?php the_title(); ?></span>
                    <span class="cite__role"><?= get_field('role') ?></span>
                    <span class="cite__company"><a target="_blank" href="<?= get_field('url') ?>"><?= get_field('company') ?></a></span>
                    </cite>
                </blockquote>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
</aside>
<?php wp_reset_query(); ?>