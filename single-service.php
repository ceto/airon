<?php get_template_part('templates/service', 'header'); ?>
<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('wrapper ps ps--notop'); ?>>
        <div class="row">
            <div class="columns tablet-8 ps--narrow">
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
            <div class="columns tablet-4 ps--narrow">
                <aside class="sidebar sidebar--service">
                    <p>sidebar comes here lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure incidunt necessitatibus voluptatum at voluptas eum, soluta esse delectus cum quos explicabo porro minima velit, dolorem maxime excepturi neque totam quam....</p>
                </aside>
            </div>
        </div>
</article>
<aside class="container ps ps--narow ps--light">
  <div class="wrapper">
    <div class="row tablet-up-2">
        <div class="column"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ratione dolorum fugiat quia voluptatibus recusandae maiores fuga beatae animi autem velit harum, ipsa architecto, nesciunt? Molestiae minus, tempore sapiente earum!</p></div>
        <div class="column"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ratione dolorum fugiat quia voluptatibus recusandae maiores fuga beatae animi autem velit harum, ipsa architecto, nesciunt? Molestiae minus, tempore sapiente earum!</p></div>
        <div class="column"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ratione dolorum fugiat quia voluptatibus recusandae maiores fuga beatae animi autem velit harum, ipsa architecto, nesciunt? Molestiae minus, tempore sapiente earum!</p></div>
    </div>
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

