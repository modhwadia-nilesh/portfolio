<?php
if (!$block) {
    return;
}
$content = $block['content'];
?>
<section class="sectionPrivacyPolicy <?php echo block_classes($block); ?>" id="<?php echo block_id($block); ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</section>