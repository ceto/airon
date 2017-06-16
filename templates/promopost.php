<aside class="promoposts">
<h2 class="indentedtitle"><?= __('From Our Blog', 'airon') ?></h2>
<?php
  //$sticky = get_option( 'sticky_posts' );
  $the_stickyposts = new WP_Query( array(
    'posts_per_page'      => 3,
    //'post__in'            => $sticky,
    //'ignore_sticky_posts' => 1,
  )); ?>
<ul class="promopost">
<?php while ( /*$sticky[0] && -*/ $the_stickyposts->have_posts() ) : $the_stickyposts->the_post(); ?>
  <li class="promopost__item">
        <time class="promopost__updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
        <h3 class="promopost__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  </li>

<?php endwhile; ?>
</ul>
<a class="promoposts__action" href="<?php the_permalink(get_option( 'page_for_posts' )); ?>"><?= __('Show all') ?>&hellip;</small></a>
</aside>
<?php wp_reset_query(); ?>