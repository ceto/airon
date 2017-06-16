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
            <img class="hero__logo" src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logostar.svg" alt="Airon">
            <h3 class="hero__title">Lorem company ipsum foundation services sit amet in Hungary</h3>
            <p class="hero__lead">Cnsectetur adipisicing elit. Tenetur temporibus nisi optio.</p>
            <div class="hero__actions">
                <a href="#" class="button blank">Jump to page</a>&nbsp;&nbsp;<em>or</em>&nbsp;&nbsp;<a href="#" class="button hollow blank">Jump to other page</a>
            </div>
        </div>

    </section>
    <div class="container homespecs ">
        <div class="row tablet-up-2 xlarge-up-4 xlarge-collapse" data-equalizer data-equalize-on="tablet">
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
        <?php get_template_part('templates/promopost'); ?>
    </div>
</div>
<div class="container ps">
    <div class="row">
        <div class="columns tablet-10 large-8">
            <h2><?= __('About Us', 'airon') ?></h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut necessitatibus quasi praesentium corrupti vel veritatis iste enim reiciendis itaque dolorum doloribus sit illo, exercitationem? Amet aut, officiis blanditiis similique quisquam?</p>
            <p>Umlamet, consectetur adipisicing elit. Sequi similique optio, nihil nemo explicabo officia soluta non modi, culpa cum dolorum ipsum tempora? Totam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos assumenda pariatur vero, maiores sequi nulla itaque expedita iste numquam nesciunt nobis. Nam temporibus fuga possimus beatae maxime animi. Suscipit, eum? consequatur sapiente voluptatum saepe laboriosam, beatae?</p>
        </div>
    </div>
</div>
<div class="container ps ps--narrow ps--light">
    <div class="row column">
        <?php get_template_part('templates/members'); ?>
    </div>
</div>
<div class="container ps ps--narrow ps--medium">
    <div class="row column">
        <h2 class="indentedtitle"><?= __('Recommended by Our lovely clients', 'airon') ?></h2>
    </div>
    <div class="wrapper wrapper--narrow">
    <div class="row column">
        <?php get_template_part('templates/testimonials'); ?>
    </div>
    </div>
</div>
<div class="container ps ps--narrow">
    <div class="row column">
        <?php get_template_part('templates/partners'); ?>
    </div>
</div>


<?php endwhile; ?>