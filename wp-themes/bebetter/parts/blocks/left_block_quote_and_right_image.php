<?php if (!$block) {
    return;
} ?>

<!-- QUOTE -->
<section class="quote <?php echo block_classes($block); ?>">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="quote__info">
            <h3>
              <?php echo $block['quote_content'];?>
            </h3>
            <h4><?php echo $block['quote_author'];?></h4>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="quote__image">
            <img src="<?php echo $block['right_image'];?>" alt="image" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- QUOTE -->