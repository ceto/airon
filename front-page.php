<?php while (have_posts()) : the_post(); ?>
    <div class="ps">
        <div class="ps">
            <div class="ps">
                Helló
            </div>
        </div>
    </div>
    <div class="covered">
        <?php get_template_part('templates/content', 'page'); ?>
    </div>
<?php endwhile; ?>
