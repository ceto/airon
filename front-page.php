<?php
$specs = get_terms([
'taxonomy' => 'specialization',
'hide_empty' => false,
]);
?>
<?php while (have_posts()) : the_post(); ?>
    <div class="container ps">
    <div class="container ps">
    </div>
    </div>

    <div class="container ps">
        <div class="row tablet-up-2">
            <?php foreach ($specs as $key => $speci) : ?>
            <div class="column">
                <div class="specicard" style="background-color: <?= speccolor($speci->term_id) ?>">
                    <h3 class="specicard__title"><a href="<?= get_term_link($speci) ?>"><?= $speci->name ?>.</a></h3>
                    <div class="specicard__summary"><?= term_description($speci); ?></div>
                    <a href="<?= get_term_link($speci) ?>" class="specicard__action"><?= __('See Services','airon') ?></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="covered">
        <?php get_template_part('templates/content', 'page'); ?>
    </div>
<?php endwhile; ?>
