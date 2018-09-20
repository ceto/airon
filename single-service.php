<?php get_template_part('templates/service', 'header'); ?>
<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('wrapper'); ?>>
    <div class="row">
        <div class="columns tablet-8 ps ps--narrow content">
            <header>
                <h1 class="service__title"><?php the_title(); ?></h1>
                <div class="service__lead"><?php the_excerpt(); ?></div>
            </header>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
            <footer class="service__footer">
                <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
            </footer>
            <?php get_template_part('templates/relposts'); ?>
        </div>
        <div class="columns tablet-4 ps ps--narrow">
            <aside class="sidebar sidebar--service">
                <section class="callexpert">
                    <h3 class="callexpert__title"><?= __('Our Expert is here to help You','airon') ?></h3>
                    <?php $themembers = get_field('contactmember'); ?>
                    <?php foreach ($themembers as $key => $post) : ?>
                    <?php setup_postdata( $post ); ?>
                    <div class="membercard membercard--theonly">
                        <figure class="membercard__fig">
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        <h3 class="membercard__name"><?php the_title(); ?></h3>
                        <p class="membercard__prof"><?= get_field('profession') ?></p>
                        <p class="membercard__contact">
                            <a href="tel:<?= get_field('phone') ?>"><?= get_field('phone') ?></a><br>
                            <a href="mailto:<?= get_field('email') ?>"><?= get_field('email') ?></a>
                        </p>
                    </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                    <a href="<?php the_permalink(4990485); ?>" class="button medium expanded"><?= __('Ask a Question','airon'); ?></a>
                </section>
            </aside>
        </div>
    </div>
</article>
<?php endwhile; ?>
<?php
$specializations = get_the_terms( $post->ID, 'specialization' );
$speci=$specializations[0];
?>
<style>
.pagehead,  .menu--sec, .menutoggler:after, .button, .button:hover, .button:focus {
    background-color: <?= speccolor($speci->term_id) ?>;
}
.banner__brand svg #firstletter {
fill: <?= speccolor($speci->term_id) ?>;
}

.menu--main .active > a:before,
.menu--mobile .active > a:before,
.footer__specilist .active>a:after,
.scrollmenu .active > a,
.content a,
.pagehead__title a:hover,
.pagehead__title a:focus {
color: <?= speccolor($speci->term_id) ?>;
}
.menutoggler:after {
box-shadow: 0 10px 0 <?= speccolor($speci->term_id) ?>, 0 20px 0 <?= speccolor($speci->term_id) ?>;
}

</style>