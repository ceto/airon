<?php get_template_part('templates/page', 'header'); ?>
<?php if (!have_posts()) : ?>
<div class="wrapper wrapper--narrow ps ps--narrow row column">
    <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
    <?php get_search_form(); ?>
</div>
<?php endif; ?>
<div class="wrapper wrapper--narrow">
    <div class="row column">
        <?php while (have_posts()) : the_post(); ?>
        <div class="ps ps--narrow">
            <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
        </div>
        <?php endwhile; ?>
    </div>
    <?php the_posts_navigation(); ?>
</div>
