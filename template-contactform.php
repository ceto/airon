<?php
/**
* Template Name: Contact Form Template
*/
?>
<?php while (have_posts()) : the_post(); ?>
<section class="hero hero--bigcontent">
    <div class="hero__content">
        <?php the_content(); ?>
        <form data-abide novalidate>
            <p data-abide-error class="abide-formerror" style="display: none;">
                <?= _e('There are some errors in your form.', 'airon') ?>
            </p>
            <label class="smartlabel">
                <input type="text" placeholder="<?= _e('Full name*', 'airon') ?>" required>
                <span class="smartlabel__text"><?= _e('Full name*', 'airon') ?></span>
                <span class="form-error">
                    <?= _e('Name is required!', 'airon') ?>
                </span>
            </label>
            <label class="smartlabel">
                <input type="text" placeholder="<?= _e('Business name', 'airon') ?>">
                <span class="smartlabel__text"><?= _e('Business name*', 'airon') ?></span>
            </label>
            <label class="smartlabel">
                <input type="email" id="password" placeholder="<?= _e('E-mail address*', 'airon') ?>" required pattern="email">
                <span class="smartlabel__text"><?= _e('E-mail address*', 'airon') ?></span>
                <span class="form-error">
                    <?= _e('E-mail is required!', 'airon') ?>
                </span>
            </label>
            <label class="smartlabel">
                <input type="email" id="password" placeholder="<?= _e('Phone*', 'airon') ?>" required >
                <span class="smartlabel__text"><?= _e('Phone*', 'airon') ?></span>
                <span class="form-error">
                    <?= _e('Phone is required!', 'airon') ?>
                </span>
            </label>
            <label class="smartlabel">
                <textarea name="message" id="" rows="7" placeholder="<?= _e('How can we help?', 'airon') ?>"></textarea>
                <span class="smartlabel__text"><?= _e('How can we help?', 'airon') ?></span>
            </label>
            <button class="button large expanded" type="submit"><?= _e('Submit form', 'airon') ?></button>
        </form>
    </div>
</section>
<?php endwhile; ?>

<?php
/*
    Thank you for contacting us! We will get back to you as soon as possible!
*/
?>