<?php
/**
* Template Name: PDF/DOC viewer iframe template
*/
?>
<?php while (have_posts()) : the_post(); ?>
<!-- <?php get_template_part('templates/page', 'header'); ?> -->


<?php if ($brochureid = get_field('file') ) : ?>
  <?php
      $file = get_attached_file($brochureid);
      $fileurl = wp_get_attachment_url($brochureid);
      $filetitle = get_the_title($brochureid)?get_the_title($brochureid):basename( $fileurl );
  ?>
<?php endif; ?>


<?php if ($brochureid ) : ?>
  <iframe class="docframe" src="https://docs.google.com/gview?url=<?= $fileurl;?>&embedded=true" frameborder="0"></iframe>
<?php endif; ?>

<div class="wrapper ps ps--narrow">
  <div class="row column">
      <?php if ($brochureid ) : ?>
          <a class="banner__cta button large" download href="<?= $fileurl; ?>">
              <?= $filetitle; ?>
              <em class="brdlbtn__fileinfo">
                  <?php _e('Download', 'airon'); ?> <span class="brdlbtn__extension"><?= pathinfo($file, PATHINFO_EXTENSION); ?></span>&nbsp;|&nbsp;<span class="brdlbtn__size"><?= size_format(filesize($file)) ?></span>
              </em>
          </a>
          <br>
      <?php endif; ?>
      <div class="lead">
          <?php the_content(); ?>
      </div>
  </div>
</div>




<?php endwhile; ?>
