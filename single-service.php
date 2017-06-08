<?php get_template_part('templates/service', 'header'); ?>
<?php while (have_posts()) : the_post(); ?>
<article <?php post_class('wrapper ps ps--narrow'); ?>>
        <div class="row">
            <div class="columns tablet-8">
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
            <div class="columns tablet-4">
                <aside class="sidebar sidebar--service">
                    <p>sidebar comes here lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure incidunt necessitatibus voluptatum at voluptas eum, soluta esse delectus cum quos explicabo porro minima velit, dolorem maxime excepturi neque totam quam....</p>
                </aside>
            </div>
        </div>
</article>
<aside class="container ps ps--narow ps--light">
    <div class="row tablet-up-3">
        <div class="column"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ratione dolorum fugiat quia voluptatibus recusandae maiores fuga beatae animi autem velit harum, ipsa architecto, nesciunt? Molestiae minus, tempore sapiente earum!</p></div>
        <div class="column"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ratione dolorum fugiat quia voluptatibus recusandae maiores fuga beatae animi autem velit harum, ipsa architecto, nesciunt? Molestiae minus, tempore sapiente earum!</p></div>
        <div class="column"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio ratione dolorum fugiat quia voluptatibus recusandae maiores fuga beatae animi autem velit harum, ipsa architecto, nesciunt? Molestiae minus, tempore sapiente earum!</p></div>
    </div>
</aside>
<?php endwhile; ?>
<?php
  $specializations = get_the_terms( $post->ID, 'specialization' );
  $speci=$specializations[0];
?>
<style>
  .pagehead {
    background-color: <?= speccolor($speci->term_id) ?>;
  }
  .banner__brand svg #firstletter {
    fill: <?= speccolor($speci->term_id) ?>;
  }
  .menu--main .active > a:before,
  .scrollmenu .active > a  {
    color: <?= speccolor($speci->term_id) ?>;
  }
</style>

