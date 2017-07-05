<?php
$specs = get_terms([
'taxonomy' => 'specialization',
'hide_empty' => false,
]);
?>
<?php while (have_posts()) : the_post(); ?>

<section class="hero">
    <div class="hero__content container">
        <img class="hero__logo" src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logostar.svg" alt="Airon">
        <h3 class="hero__title">Lorem company ipsum foundation services sit amet in Hungary</h3>
        <p class="hero__lead">Cnsectetur adipisicing elit. Tenetur temporibus nisi optio.</p>
        <div class="hero__actions">
            <a href="#" class="button hollow blank">Jump to page</a>
        </div>
    </div>
</section>
<div class="homedividedspec">
    <div class="container ps ps--narrow">
        <div class="row column">
            <h2 class="indentedtitle"><?= __('Providing Business Services', 'airon') ?></h2>
        </div>
        <?php get_template_part('templates/homedivi' ); ?>
    </div>
</div>

<div class="container ps">
    <div class="row">
        <div class="columns tablet-10 xlarge-8 tablet-centered">
            <h2><?php the_title() ?></h2>
            <div class="lead">
                <?php the_content(); ?>
                <br><a href="#" class="button">Meet the team</a>
            </div>
        </div>
    </div>
</div>


<div class="container ps ps--narrow">
    <div class="row">
        <div class="columns tablet-10 xlarge-8 tablet-centered">
            <?php get_template_part('templates/members'); ?>
        </div>
    </div>
</div>

<div class="homespecs">
    <div class="container">
<!--         <div class="row column">
            <h2 class="indentedtitle"><?php //_e('Specs & Services', 'airon') ?></h2>
        </div> -->
        <div class="row tablet-up-2" data-equalizer data-equalize-on="tablet">
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
            <div class="column specicol ps " style="background-color: <?= speccolor($speci->term_id) ?>">
                <div class="specicard" style="background-color: <?= speccolor($speci->term_id) ?>" data-equalizer-watch>
                    <h3 class="specicard__title"><a href="<?= get_term_link($speci) ?>"><?= $speci->name ?></a></h3>
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
        <?php wp_reset_postdata(); ?>
    </div>
</div>
<div class="container ps ps--narrow">
    <div class="row column">
        <?php get_template_part('templates/partners'); ?>
    </div>
</div>
<div class="container ps ps--narrow">
    <div class="row column">
        <?php get_template_part('templates/promopost'); ?>
    </div>
</div>
<div class="container ps ps--narrow ">
    <div class="row column">
        <h2 class="indentedtitle"><?= __('Recommended by Our lovely clients', 'airon') ?></h2>
    </div>
    <div class="wrapper wrapper--narrow">
    <div class="row column">
        <?php get_template_part('templates/testimonials'); ?>
    </div>
    </div>
</div>




<?php endwhile; ?>