<?php
/**
* Template Name: Contact Form Template
*/
?>


<?php
    $the_services = new WP_Query(array(
        'post_type' => array('service'),
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    ));
?>
<?php while (have_posts()) : the_post(); ?>
<section class="hero hero--bigcontent">
    <div class="hero__content">
        <?php the_content(); ?>
        <form id="contact_form" class="contactform" action="<?= get_template_directory_uri(); ?>/lib/contact.php"
            method="post" data-abide novalidate>
            <p data-abide-error class="abide-formerror" style="display: none;">
                <?= _e('There are some errors in your form.', 'airon') ?>
            </p>
            <label class="smartlabel">
                <input type="text" placeholder="<?= _e('Full name*', 'airon') ?>" required id="message_name"
                    name="message_name" value="<?php echo $_POST['message_name']; ?>">
                <span class="smartlabel__text"><?= _e('Full name*', 'airon') ?></span>
                <span class="form-error">
                    <?= _e('Name is required!', 'airon') ?>
                </span>
            </label>
            <label class="smartlabel">
                <input type="text" placeholder="<?= _e('Business name', 'airon') ?>" id="message_bname"
                    name="message_bname" value="<?php echo $_POST['message_bname']; ?>">
                <span class="smartlabel__text"><?= _e('Business name*', 'airon') ?></span>
            </label>
            <label class="smartlabel">
                <input type="email" id="password" placeholder="<?= _e('E-mail address*', 'airon') ?>" required
                    id="message_email" name="message_email" value="<?php echo $_POST['message_email']; ?>"
                    pattern="email">
                <span class="smartlabel__text"><?= _e('E-mail address*', 'airon') ?></span>
                <span class="form-error">
                    <?= _e('E-mail is required!', 'airon') ?>
                </span>
            </label>
            <label class="smartlabel">
                <input type="text" id="message_tel" name="message_tel" value="<?php echo $_POST['message_tel']; ?>"
                    placeholder="<?= _e('Phone*', 'airon') ?>" required>
                <span class="smartlabel__text"><?= _e('Phone*', 'airon') ?></span>
                <span class="form-error">
                    <?= _e('Phone is required!', 'airon') ?>
                </span>
            </label>

            <label class="smartlabel" for="message_service">
                <select id="message_service" name="message_service">
                    <option value="Nincs megadva"><?php _e('Specify topic','airon'); ?></option>
                    <?php while ($the_services->have_posts()) : $the_services->the_post(); ?>
                    <?php setup_postdata( $post ); ?>
                    <option value="<?php the_title(); ?>"><?php the_title(); ?></option>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </select>
                <!-- <span class="smartlabel__text"><?= _e('Service', 'airon') ?></span> -->
            </label>
            <label class="smartlabel">
                <textarea id="" rows="7" placeholder="<?= _e('How can we help?', 'airon') ?>" id="message_text"
                    name="message_text"><?php if ($_POST['message_text']!='') { echo $_POST['message_text']; }?></textarea>
                <span class="smartlabel__text"><?= _e('How can we help?', 'airon') ?></span>
            </label>

            <label class="checkboxlabel small" for="message_acceptpolicy">
                <input type="checkbox" id="message_acceptpolicy" name="message_acceptpolicy" required>
                <?= __('I have read and understood the content of the <a target="_blank" href="https://airon.hu/privacy-statement/">Privacy Policy.</a>', 'viarent'); ?>
                <span class="form-error">It's required.</span>
            </label>
            <label class="checkboxlabel small" for="message_acceptprocessing">
                <input type="checkbox" id="message_acceptprocessing" name="message_acceptprocessing" required>
                <?= __('I agree to the processing of my personal data in accordance with the provisions of the Privacy Policy.', 'viarent'); ?>
                <span class="form-error">It's required.</span>
            </label>
            <div class="formactions text-center">
                <div id="result"></div>
                <input type="hidden" name="ap_id" value="<?php echo $subjecto; ?>">
                <input type="hidden" name="message_page" value="<?php the_title(); ?>">
                <input type="hidden" name="message_human" value="2">
                <input type="hidden" name="submitted" value="1">
                <button id="contact_submit" type="submit"
                    class="button large expanded"><?php _e('Submit form','airon'); ?></button>
            </div>
        </form>
    </div>
</section>
<?php endwhile; ?>

<?php
/*
    Thank you for contacting us! We will get back to you as soon as possible!
*/
?>
