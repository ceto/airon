<aside class="testimonials">
<h2 class="indentedtitle"><?= __('Recommended by Our lovely clients', 'airon') ?></h2>
<br><br><br><br><br>
<p>some testimonial goes here...</p>
<br><br><br><br><br>
<?php
  $the_partners = new WP_Query( array(
    'posts_per_page'      => 5,
    'post_type' => 'array(partner)',
  )); ?>

<?php while ($the_partners->have_posts() ) : $the_partners->the_post(); ?>

<?php endwhile; ?>

</aside>
<?php wp_reset_query(); ?>