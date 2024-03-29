<?php while (have_posts()) : the_post(); ?>
<?php  get_template_part('templates/post', 'header'); ?>
<article <?php post_class('thepost wrapper ps'); ?>>
    <div class="row">
        <div class="columns tablet-8 ps ps--narrow content">
            <h1 class="thepost__title"><?php the_title(); ?></h1>
            <div class="hentry__meta">
              <?php get_template_part('templates/entry-meta'); ?>
            </div>
            <hr>
            <dl class="metadef">
                <div class="double">
                  <dt><?= __('Category','airon'); ?></dt>
                  <dd><?php echo get_the_category_list( ', '); ?></dd>
                </div>
            </dl>
            <br>
            <?php $content_arr = get_extended ( $post->post_content ); ?>
            <header class="thepost__header">
                <?php if ($content_arr['extended']!='') : ?>
                <div class="thepost__lead"><?= apply_filters('the_content', $content_arr['main']); ?></div>
                <?php endif; ?>
            </header>
            <?php if (FALSE && has_post_thumbnail() ) : ?>
            <figure class="thepost_featimage">
                <?php the_post_thumbnail('medium_Large' ); ?>
            </figure>
            <?php endif; ?>
            <div class="thepost__content content ps ps--narrow ps--notop">
                <?php if ($content_arr['extended']!='') : ?>
                  <?= apply_filters('the_content', $content_arr['extended']); ?>
                <?php else: ?>
                  <?php the_content(); ?>
                <?php endif; ?>
            </div>
            <footer class="thepost__footer">
                <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
            </footer>
            <?php get_template_part('templates/relposts'); ?>
            <?php comments_template('/templates/comments.php'); ?>
        </div>

        <div class="columns tablet-4 ps ps--narrow">
            <aside class="sidebar sidebar--service">
                <section class="callexpert">
                    <h3 class="callexpert__title"><?= __('Our Expert is here to help You','airon') ?></h3>
                    <?php $themembers = get_field('contactmember'); ?>
                    <?php foreach ($themembers as $key => $post) : ?>
                    <?php setup_postdata( $post ); ?>
                    <div class="membercard membercard--theonly">
                        <figure class="membercard__fig">
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        <h3 class="membercard__name"><?php the_title(); ?></h3>
                        <p class="membercard__prof"><?= get_field('profession') ?></p>
                        <p class="membercard__contact">
                            <a href="tel:<?= get_field('phone') ?>"><?= get_field('phone') ?></a><br>
                            <a href="mailto:<?= get_field('email') ?>"><?= get_field('email') ?></a>
                        </p>
                    </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                    <a href="<?php the_permalink(4990485); ?>" class="button medium expanded"><?= __('Ask a Question','airon'); ?></a>
                </section>
            </aside>
        </div>
    </div>
</article>
<?php get_template_part('templates/promoservice'); ?>
<?php endwhile; ?>
