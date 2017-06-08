<?php get_template_part('templates/speci', 'header'); ?>
<div class="wrapper">
  <div class="row column ps ps--narrow">
      <div class="speci__lead lead"><?= term_description(); ?></div>
  </div>
  <div class="row tablet-up-2">
  <?php while (have_posts()) : the_post(); ?>
      <div class="column ps ps--narrow">
        <?php get_template_part('templates/content', 'service'); ?>
      </div>
  <?php endwhile; ?>
    </div>
</div>
<style>
  .pagehead {
    background-color: <?= speccolor(get_queried_object()->term_id) ?>;
  }
  .banner__brand svg #firstletter {
    fill: <?= speccolor(get_queried_object()->term_id) ?>;
  }
  .menu--main .active > a:before {
    color: <?= speccolor(get_queried_object()->term_id) ?>;
  }
</style>
