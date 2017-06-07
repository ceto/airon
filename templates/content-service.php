<article <?php post_class(); ?>>
    <header>
        <h2 class="hentry__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header>
    <div class="hentry__summary">
        <?php the_excerpt(); ?>
    </div>
</article>