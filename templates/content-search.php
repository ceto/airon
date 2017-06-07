<article <?php post_class(); ?>>
  <div class="container">
  <header>
    <h2 class="hentry__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if (get_post_type() === 'post') { get_template_part('templates/entry-meta'); } ?>
  </header>
  <div class="hentry__summary">
    <?php the_excerpt(); ?>
  </div>
  </div>
</article>
