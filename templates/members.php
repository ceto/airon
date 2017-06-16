<aside class="members">
<h2 class="indentedtitle"><?= __('Meet the team', 'airon') ?></h2>
<?php
  $the_members = new WP_Query( array(
    'posts_per_page'      => -1,
    'post_type' => array('member'),
  )); ?>
<div class="row small-up-2 medium-up-3 tablet-up-4 large-up-4 xlarge-up-5">
<?php while ($the_members->have_posts() ) : $the_members->the_post(); ?>
  <div class="column">
  <div class="membercard">
    <?php the_post_thumbnail(); ?>
    <h3 class="memebercard__name"><?php the_title(); ?></h3>
    <p class="membercard__prof"><?= get_field('profession') ?></p>
    <div class="membercard__bio">
      <?php the_content() ?>
    </div>
    <p class="membercard__contact">
      <a href="tel:<?= get_field('phone') ?>"><?= get_field('phone') ?></a><br>
      <a href="mailto:<?= get_field('email') ?>"><?= get_field('email') ?></a>
    </p>
  </div>
  </div>
<?php endwhile; ?>
</div>
</aside>
<?php wp_reset_query(); ?>