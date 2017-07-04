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
                There are some errors in your form.
            </p>
            <label class="smartlabel">
                <input type="text" placeholder="Full name*" aria-describedby="exampleHelpText" required>
                <span class="smartlabel__text">Full name*</span>
                <span class="form-error">
                    Name is required!
                </span>
            </label>
            <label class="smartlabel">
                <input type="text" placeholder="Business name" aria-describedby="exampleHelpText">
                <span class="smartlabel__text">Business name*</span>
            </label>
            <label class="smartlabel">
                <input type="email" id="password" placeholder="E-mail address*" aria-describedby="exampleHelpText" required pattern="email">
                <span class="smartlabel__text">E-mail address*</span>
                <span class="form-error">
                    E-mail is required!
                </span>
            </label>
            <label class="smartlabel">
                <input type="email" id="password" placeholder="Phone*" aria-describedby="exampleHelpText" required >
                <span class="smartlabel__text">Phone*</span>
                <span class="form-error">
                    Phone is required!
                </span>
            </label>
            <label class="smartlabel">
                <textarea name="message" id="" rows="7" placeholder="How can we help?"></textarea>
                <span class="smartlabel__text">How can we help?</span>
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