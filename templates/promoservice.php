<?php $relservices = get_field('relatedservices'); ?>
<?php if ( is_array($relservices) ) : ?>
  <div class="container ps ps--narrow ps--inverse">
      <div class="row">
          <div class="columns tablet-10 tablet-centered large-8">
              <h2 class="indentedtitle"><?= __('Learn more about', 'airon') ?></h2>
              <h3><?= __('<em>our</em> Services related', 'airon'); ?></h3>
              <ul class="divispeclist">
              <?php foreach ( $relservices as $key => $post) : ?>
                <?php setup_postdata( $post ); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php endforeach; ?>
              </ul>
              <?php wp_reset_postdata(); ?>
          </div>
      </div>
  </div>
<?php endif; ?>