<?php if (!$block) {
    return;
} ?>
<!-- TESTIMONIALS -->
<section class="testimonials <?php echo block_classes($block); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title">
                    <h2>
                        <?php echo $block["heading"]; ?>
                    </h2>
                    <h4>
                        <?php echo $block["sub_heading"]; ?>
                    </h4>
                    <?php echo a_href_from_link($block["button_link"], "button-secondary"); ?>
                </div>
            </div>

            <div class="col-lg-12">
                <?php if ($block['testimonial_type']): ?>
                    <div class="grid">
                        <?php
                        $userCard = $block["user_reviews"];
                        if ($userCard && !empty($userCard)) {
                            foreach ($userCard as $userData) {
                                ?>
                                <div class="grid-item">
                                    <div class="testimonials__details">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quoteLeft.png"
                                            alt="Quote Image" class="testimonials__quote-img" />
                                        <?php echo $userData['user_massage']; ?>
                                        <div class="testimonials__details-user">
                                            <div class="user-img">
                                                <img src="<?php echo $userData['user_image']['url']; ?>"
                                                    alt="<?php echo $userData['user_image']['alt']; ?>" />
                                            </div>
                                            <div class="user-info">
                                                <h5>
                                                    <?php echo $userData['user_name']; ?>
                                                </h5>
                                                <p class="small">
                                                    <?php echo $userData['user_profile']; ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                    <div class="col-lg-12">
                        <div class="testimonials__details-button">
                            <?php echo a_href_from_link($block["see_more"], "button-secondary"); ?>
                        </div>
                    </div>
                <?php else: ?>
                    <?php echo $block["testimonials_script"]; ?>
                <?php endif ?>
            </div>
        </div>
</section>
<!-- TESTIMONIALS -->