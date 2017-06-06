<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('wrapper ps ps--narrow'); ?>>
  <div class="row">
    <div class="columns tablet-3 large-2 text-right">
      <?php get_template_part('templates/entry-meta'); ?>
    </div>
    <div class="columns tablet-9 large-8 large-pull-2">
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      </footer>
      <?php comments_template('/templates/comments.php'); ?>
    </div>
  </div>
</article>
<?php endwhile; ?>