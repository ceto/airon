<?php
$specs = get_terms([
'taxonomy' => 'specialization',
'hide_empty' => false,
]);
?>
<?php while (have_posts()) : the_post(); ?>

<section class="hero">
    <div class="hero__content container">
        <img class="hero__logo" src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logostar.svg" alt="Airon">
        <h3 class="hero__title"><?= __('We Solve.', 'airon') ?></h3>
        <p class="hero__lead"><?= __('Comprehensive Business Services in Hungary.', 'airon') ?></p>
        <div class="hero__actions" data-magellan>
            <a href="#homecontent" class="hero__action"><?= __('Learn more', 'airon') ?>&hellip;</a>
        </div>
    </div>
</section>
<div class="homedividedspec ps ps--narrow ps--dark">
    <div class="container">
        <div class="row column">
            <h2 class="indentedtitle"><?= __('Providing Business Services', 'airon') ?></h2>
        </div>
        <?php get_template_part('templates/homedivi' ); ?>
    </div>
</div>

<div id="homecontent" class="wrapper wrapper--narrow ps ps--wide" data-magellan-target="homecontent">
    <div class="row column">
            <h2><?php the_title() ?></h2>
            <div class="lead">
                <?php the_content(); ?>
            </div>
    </div>
</div>
<div class="homespecs ps ps--narrow ps--dark">
    <div class="container">
        <div class="row column">
            <h2 class="indentedtitle"><?php _e('Specs & Services', 'airon') ?></h2>
        </div>
    </div>
    <br>
    <div class="container awrapper awrapper--narrow">
        <div class="row column">
        <ul class="servicepromogrid" data-equalizer data-equalize-on="tablet">
            <?php foreach ($specs as $key => $speci) : ?>
            <?php
                $args = array(
                    'post_type' => array('service'),
                    'order'               => 'ASC',
                    'orderby'             => 'menu_order',
                    'posts_per_page'         => -1,
                    'tax_query' => array(
                    array(
                        'taxonomy'         => 'specialization',
                        'field'            => 'id',
                        'terms'            => $speci->term_id,
                    )),
                );
                $services = new WP_Query( $args );
            ?>
            <li>
                <div class="specicard" style="background-color: <?= speccolor($speci->term_id) ?>" data-equalizer-watch>
                    <h3 class="specicard__title"><a href="<?= get_term_link($speci) ?>"><?= $speci->name ?></a></h3>
                    <ul class="specicard__list">
                        <?php while ($services->have_posts()) : $services->the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                    <?php $content_arr = get_extended ( get_term($speci)->description ); //var_dump($content_arr); ?>
                    <div class="specicard__summary">
                      <?= apply_filters('the_content', preg_replace('/<img[^>]+./','',$content_arr['main'])); ?>
                    </div>
                    <a href="<?= get_term_link($speci) ?>" class="specicard__action"><?= __('Show','airon') ?> <?= $speci->name ?> <?= __('Services','airon') ?></a>
                </div>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php wp_reset_postdata(); ?>
        </div>
    </div>
    <br><br>
</div>
<div class="hometests aps--light">
    <div class="container ps ps--narrow">
        <?php get_template_part('templates/testimonials'); ?>
    </div>
</div>

<div class="homenews ps ps--light ps--bordered aps--narrow">
    <div class="wrapper wrapper--narrow">
      <div class="row column">
          <aside class="promoposts homenews__promoposts">
              <h2 class="indentedtitle"><?= __('From Our Blog', 'airon') ?></h2>
              <?php get_template_part('templates/promopost'); ?>
              <a class="promoposts__action" href="<?php the_permalink(get_option( 'page_for_posts' )); ?>"><?= __('See all posts','airon') ?>&hellip;</a>
          </aside>
        </div>
    </div>
</div>
<div class="homepartners">
    <div class="container ps ps--narrow">
        <?php get_template_part('templates/partners'); ?>
    </div>
</div>

<?php endwhile; ?>
