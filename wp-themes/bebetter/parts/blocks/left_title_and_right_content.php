<?php if (!$block) {
    return;
} ?>

<!-- ABOUT US ONE -->
<section class="about__us <?php echo block_classes($block); ?>">
    <div class="container">
        <div class="row justify-content-end">
            <?php if ($block['title']): ?>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <h1>
                        <?php echo $block['title']; ?>
                    </h1>
                </div>
            <?php endif; ?>
            <div class="col-lg-12">
                <div class="about__us-info">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <?php if ($block['left_title']): ?>
                                <div class="about__us-teamInfo">
                                    <h4>
                                        <?php echo $block['left_title']; ?>
                                    </h4>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9">
                            <div class="about__us-teamInfo">
                                <?php echo $block['content']; ?>
                                <?php a_href_from_link($block["button_link"], 'button-secondary'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ABOUT US ONE -->