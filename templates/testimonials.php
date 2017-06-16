<aside class="testimonials ps ps--narrow">
<?php
  $the_partners = new WP_Query( array(
    'posts_per_page'      => 1,
    'post_type' => array(testimonial),
  )); ?>

<?php while ($the_partners->have_posts() ) : $the_partners->the_post(); ?>
  <div class="testi">
    <blockquote class="testi__quote">
      <?php the_content(); ?>
      <cite class="cite--testi">
        <span class="cite__name"><?php the_title(); ?></span>
        <span class="cite__role"><?= get_field('role') ?></span>
        <span class="cite__company"><a target="_blank" href="<?= get_field('url') ?>"><?= get_field('company') ?></a></span>
      </cite>
    </blockquote>
  </div>
<?php endwhile; ?>

</aside>
<?php wp_reset_query(); ?>