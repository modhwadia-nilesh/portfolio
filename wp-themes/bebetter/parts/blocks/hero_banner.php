<?php if (!$block) {
    return;
} ?>
<!-- HERO BANNER -->
<section class="hero__banner <?php echo block_classes($block); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero__banner-info">
                    <h1>
                        <?php echo $block["heading"]; ?>
                    </h1>
                    <p>
                        <?php echo $block["description"]; ?>
                    </p>
                    <?php a_href_from_link($block["button_link"], "button-secondary"); ?>
                </div>
            </div>
        </div>
        <div class="hero__banner-backgroundImage">
            <?php if ($block['background_type']): ?>
                <video src="<?php echo $block["background_video"]['url']; ?>" playsinline autoplay muted loop></video>
            <?php else: ?>
                <img src="<?php echo $block["background_image"]['url']; ?>" alt="<?php echo $block['background_image']['alt'] ?>"/>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- HERO BANNER -->