<article <?php post_class(); ?>>
        <header>
            <div class="hentry__meta">
              <?php get_template_part('templates/entry-meta'); ?>
            </div>
            <h2 class="hentry__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </header>
        <div class="hentry__summary">
            <?php the_excerpt(); ?>
        </div>
        <a class="readmore" href="<?php the_permalink(); ?>"><?= __('Learn more','airon'); ?></a>
</article>