<aside class="partners">
  <div class="row column">
    <h2 class="indentedtitle"><?= __('Proud to be partner with', 'airon') ?></h2>
    <div class="owl-carousel owl-plogos plogos">
        <?php for ($i=0; $i<12; $i++) : ?>
            <div class="plogos__item">
                <img class="plogos__img" src="http://placehold.it/<?= 240+($i%3)*40 ?>x120" alt="semmi">
            </div>
        <?php endfor; ?>
    </div>
  </div>
</aside>
<?php wp_reset_postdata(); ?>