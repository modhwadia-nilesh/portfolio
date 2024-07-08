<?php if (!$block) {
    return;
} ?>

<!-- VIDEO -->
<section class="video <?php echo block_classes($block); ?>">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 px-0">
                <div class="video__box">
                    <video poster="<?php echo $block["video_poster"]; ?>" src="<?php echo $block["video_url"]; ?>"
                        id="video"></video>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/circlePlay.png" alt="Play Butoon Image" class="playBtn" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pause.png" alt="Pause Button Image" class="pauseBtn" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/volume.png" alt="Valume Button Image" class="volumeBtn" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mutedVolume.png" alt="Muted Volume Button Image" class="mutedVolumeBtn" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- VIDEO -->