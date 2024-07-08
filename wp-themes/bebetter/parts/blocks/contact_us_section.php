<?php if (!$block) {
    return;
} ?>

<!-- CONTACT US -->
<section class="contact__us <?php echo block_classes($block); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="contact__us-image">
                    <img src="<?php echo $block['contact_image']["url"] ?>" alt="<?php echo $block['contact_image']["alt"] ?>" />
                    <div class="contact__us-imgText">
                        <p>
                            <?php echo $block['image_content'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="contact__us-details">
                    <h3>
                        <?php echo $block['contact_heading'] ?>
                    </h3>
                    <p>
                        <?php echo $block['contact_content'] ?>
                    </p>
                    <?php

                    $contactShortCode = $block['contact_form_shortcode'];
                    echo do_shortcode($contactShortCode); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACT US -->