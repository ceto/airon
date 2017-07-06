  <div class="membercard">
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