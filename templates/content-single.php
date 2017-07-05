<?php while (have_posts()) : the_post(); ?>
<?php  get_template_part('templates/post', 'header'); ?>
<article <?php post_class('thepost wrapper ps ps--narrow'); ?>>
  <div class="row">
    <div class="columns tablet-9 tablet-push-3 xlarge-8 xlarge-push-2">
      <h1 class="thepost__title"><?php the_title(); ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="columns tablet-3 xlarge-2 tablet-text-right">
      <aside class="thepost__aside">
        <dl class="metadef">
          <dt><?= __('Author','airon'); ?></dt>
          <dd><a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></dd>
          <dt><?= __('Date','airon'); ?></dt>
          <dd><time class="meta__updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time></dd>
          <dt><?= __('Category','airon'); ?></dt>
          <dd><?php echo get_the_category_list( ', '); ?></dd>
        </dl>
      </aside>
    </div>
    <div class="columns tablet-9 xlarge-8 xlarge-pull-2">
      <header class="thepost__header">
        <?php if ( has_excerpt() != '' ) :?>
          <div class="thepost__lead"><?php the_excerpt(); ?></div>
        <?php endif; ?>
      </header>
    </div>
  </div>
  <div class="row">
    <div class="columns tablet-9 tablet-push-3 xlarge-8 xlarge-push-2">
      <div class="thepost__content content">
        <?php the_content(); ?>
      </div>
      <footer class="thepost__footer">
        <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      </footer>
      <?php comments_template('/templates/comments.php'); ?>
    </div>
  </div>
</article>
<?php endwhile; ?>