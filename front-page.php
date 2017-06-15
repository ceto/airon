<?php
$specs = get_terms([
'taxonomy' => 'specialization',
'hide_empty' => false,
]);
?>
<?php while (have_posts()) : the_post(); ?>
<div class="hometopsec">
    <section class="hero container">
        <div class="hero__content">
            <h3 class="hero__title">Lorem company ipsum foundation services sit amet in Hungary</h3>
            <p class="hero__lead">Cnsectetur adipisicing elit. Tenetur temporibus nisi optio.</p>
            <div class="hero__actions">
                <a href="#" class="button blank">Jump to page</a>&nbsp;&nbsp;<em>or</em>&nbsp;&nbsp;<a href="#" class="button hollow blank">Jump to other page</a>
            </div>
        </div>

    </section>

    <div class="container homespecs ps ps--narrow">
        <div class="row tablet-up-2 xlarge-collapse" data-equalizer data-equalize-on="tablet">
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
            )
            ),
            );
            $services = new WP_Query( $args );
            ?>
            <div class="column">
                <div class="specicard" style="background-color: <?= speccolor($speci->term_id) ?>" data-equalizer-watch>
                    <h3 class="specicard__title"><a href="<?= get_term_link($speci) ?>"><?= $speci->name ?>.</a></h3>
                    <ul class="specicard__list">
                        <?php while ($services->have_posts()) : $services->the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                    <div class="specicard__summary"><?= term_description($speci); ?></div>
                    <a href="<?= get_term_link($speci) ?>" class="specicard__action"><?= __('See all services','airon') ?></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="container ps ps--narrow ps--light">
    <div class="row column">
        <?php the_content(); ?>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </div>
</div>
<div class="wrapper wrapper--narrow ps ps--narrow">
    <div class="row column">
        <?php the_content(); ?>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </div>
</div>
<div class="container ps ps--narrow ps--medium">
    <div class="wrapper">
        <div class="row column">
            <?php the_content(); ?>
            <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </div>
    </div>
</div>

<?php endwhile; ?>