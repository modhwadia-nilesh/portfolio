<?php
if (!$block) {
   return;
}

$backgroundImage = $block['background_image'] ? 'style="background-image: url(' . $block["background_image"]["url"] . ')"' : '';
$image           = $block['image'];
?>

<section class="heroBanner <?php echo block_classes($block); ?>" id="<?php echo block_id($block); ?>" <?php echo $backgroundImage ?>>
   <div class="container">
      <div class="row align-items-center rowResponsiveReverse">
         <div class="col-lg-7 col-md-7">
            <?php if ($block['top_heading']) {
               echo '<h3>' . $block['top_heading'] . '</h3>';
            } ?>
            <?php if ($block['heading']) {
               echo '<h1>' . $block['heading'] . '</h1>';
            } ?>
            <?php echo $block['description']; ?>
            <?php if ($block['button_link']): ?>
               <div>
                  <?php a_href_from_link($block['button_link'], 'button-primary'); ?>
               </div>
            <?php endif; ?>
         </div>
         <div class="col-lg-5 col-md-5">
            <?php if ($block['image']): ?>
               <div class="heroBanner__PreviewImg">
                  <img src="<?php echo $block['image']['url']; ?>" alt="<?php echo $block['image']['alt']; ?>">
               </div>
            <?php endif; ?>
         </div>
         <div class="col-lg-12">
            <div class="heroBanner__scrollToSection">
               <a href="#oneStopWebSolution">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ScrollToSection.svg" alt="ScrollToSection">
               </a>
            </div>
         </div>
      </div>
   </div>
</section>