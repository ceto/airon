<article <?php post_class(); ?>>
        <header>
            <div class="hentry__meta">
              <?php get_template_part('templates/entry-meta'); ?>
            </div>
            <h2 class="hentry__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </header>
        <div class="hentry__summary">
            <?php $content_arr = get_extended ( $post->post_content ); ?>
                <?php if (has_excerpt()) :?>
                  <?php the_excerpt(); ?>
                <?php elseif ($content_arr['extended']!='') :  ?>
                  <?= apply_filters('the_content', $content_arr['main']); ?>
                <?php else: ?>
                  <?php the_excerpt(); ?>
                <?php endif; ?>
            </header>

        </div>
        <a class="readmore" href="<?php the_permalink(); ?>"><?= __('Learn more','airon'); ?></a>
</article>
