<?php if (!$block) {
    return;
} ?>

<!-- OUR TEAM -->
<section class="our__team <?php echo block_classes($block); ?>">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="our__team-image">
            <img src="<?php echo $block['image']; ?>" alt="image" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- OUR TEAM -->