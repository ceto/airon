<?php
/**
* Template Name: Contact Template
*/
?>
<?php
$specs = get_terms([
'taxonomy' => 'specialization',
'hide_empty' => false,
]);
?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>

    <div class="wrapper ps ps--narrow">
        <div class="row column">
            <div class="lead">
                <?php the_content(); ?>
                <p><a href="<?php the_permalink(4990485); ?>" class="button">Let's get started</a></p>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper--narrow ps ps--notop">
        <div class="row small-up-2">
            <?php foreach ($specs as $key => $speci) : ?>
            <div class="column">
                <section class="coinfo ps ps--narrow">
                    <?php $logo = get_field( 'logo', 'specialization_'.$speci->term_id ) ?>
                    <img class="coinfo__logo" src="<?= $logo['url'] ?>" alt="<?= $speci->name ?>">
                    <h3 class="coinfo__coname"><?= get_field( 'company_name', 'specialization_'.$speci->term_id ) ?></h3>
                    <p class="coinfo__addr">
                        H-<?= get_field( 'zip', 'specialization_'.$speci->term_id ) ?>, <?= get_field( 'city', 'specialization_'.$speci->term_id ) ?><br>
                    <?= get_field( 'address', 'specialization_'.$speci->term_id ) ?></p>
                    <p class="coinfo__contact">
                        Tel.: <a href="tel:<?= get_field( 'tel', 'specialization_'.$speci->term_id ) ?>"><?= get_field( 'tel', 'specialization_'.$speci->term_id ) ?></a><br>
                        E-mail: <a href="mailto:<?= get_field( 'email', 'specialization_'.$speci->term_id ) ?>"><?= get_field( 'email', 'specialization_'.$speci->term_id ) ?></a>
                    </p>
                    <p><small><a href="#"><?= __('show on map','airon') ?></a></small></p>
                </section>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="container">
        <img class="" src="http://placehold.it/1800x600/?text=Google+Map" alt="Co. logo">
    </div>

<?php endwhile; ?>