<?php use Roots\Sage\Titles; ?>
<?php $headerimage = get_field('banner','specialization_'.get_queried_object()->term_id);?>
<section class="pagehead specihead" style="background-image: url(<?= $headerimage['url']  ?>)">
    <div class="container row column">
        <img class="pagehead__logo" src="<?= get_stylesheet_directory_uri(); ?>/dist/images/logoa.svg" alt="Airon">
        <h1 class="pagehead__title"><?= Titles\title(); ?></h1>
    </div>
</section>
<nav class="servicenav">
    <div class="container">
        <ul class="scrollmenu">
            <?php while (have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
    </div>
</nav>