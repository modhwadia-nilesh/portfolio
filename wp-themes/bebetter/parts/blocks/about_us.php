<?php if (!$block) {
  return;
}
?>

<!-- ABOUT US -->

<section class="about <?php echo block_classes($block); ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-7">
        <div class="about__info">
          <h2>
            <?php echo $block["heading"]; ?>
          </h2>
          <?php echo $block["description"]; ?>
          <?php a_href_from_link($block["button_link"], "button-secondary"); ?>
        </div>
      </div>
      <div class="col-lg-5 col-md-5 px-0">
        <div class="about__user-image">
          <img src="<?php echo $block["image"]["url"]; ?>" alt="<?php echo $block["image"]["alt"]; ?>" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ABOUT US -->