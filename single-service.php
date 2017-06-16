<?php get_template_part('templates/service', 'header'); ?>
<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('wrapper'); ?>>
        <div class="row">
            <div class="columns tablet-8 ps ps--narrow">
                <header>
                    <h1 class="service__title"><?php the_title(); ?></h1>
                    <div class="service__lead"><?php the_excerpt(); ?></div>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <footer class="service__footer">
                    <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
                </footer>
                <?php comments_template('/templates/comments.php'); ?>
            </div>
            <div class="columns tablet-4 ps ps--narrow">
                <aside class="sidebar sidebar--service">
                    <p>sidebar comes here lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure incidunt necessitatibus voluptatum at voluptas eum, soluta esse delectus cum quos explicabo porro minima velit, dolorem maxime excepturi neque totam quam....</p>
                </aside>
            </div>
        </div>
</article>
<aside class="wrapper service__relposts ps ps--narrow">
    <div class="row column">
      <?php get_template_part('templates/relposts'); ?>
    </div>
</aside>
<?php endwhile; ?>
<?php
  $specializations = get_the_terms( $post->ID, 'specialization' );
  $speci=$specializations[0];
?>
<style>
  .pagehead, .menutoggler:after {
    background-color: <?= speccolor($speci->term_id) ?>;
  }
  .banner__brand svg #firstletter {
    fill: <?= speccolor($speci->term_id) ?>;
  }
  .menu--main .active > a:before,
  .menu--mobile .active > a:before,
  .footer__specilist .active>a:after,
  .scrollmenu .active > a  {
    color: <?= speccolor($speci->term_id) ?>;
  }
  .menutoggler:after {
     box-shadow: 0 10px 0 <?= speccolor($speci->term_id) ?>, 0 20px 0 <?= speccolor($speci->term_id) ?>;
  }
</style>

