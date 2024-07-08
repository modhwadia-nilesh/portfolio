<?php
if (!$block) {
   return;
}
$heading         = $block['heading'];
$title           = $block['title'];
$boxListRepeater = $block['box_list_repeater'];
$image           = $block['image'];
?>

<section class="whyChoose <?php echo block_classes($block); ?>" id="<?php echo block_id($block); ?>">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <?php if ($heading): ?>
               <div class="title">
                  <h2><?php echo $heading; ?></h2>
               </div>
            <?php endif; ?>
         </div>
      </div>
      <div class="row rowResponsiveReverse">
         <div class="col-lg-6 col-md-6">
            <?php if ($title) {
               echo '<h4>' . $title . '</h4>';
            } ?>

            <?php if (!empty($boxListRepeater)): ?>
               <?php foreach ($boxListRepeater as $box): ?>
                  <div class="whyChoose__sections">
                     <?php if ($box['title']) {
                        echo '<h3>' . $box['title'] . '</h3>';
                     } ?>
                     <?php echo $box['description']; ?>
                  </div>
               <?php endforeach; ?>
            <?php endif; ?>
         </div>

         <div class="col-lg-6 col-md-6">
            <?php if ($image): ?>
               <div class="whyChoose__Image">
                  <div class="text-end">
                     <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/WhyChooseFloatOne.webp" class="FloatOne" alt="WhyChooseFloatOne">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/WhyChooseFloatTwo.webp" class="FloatTwo" alt="WhyChooseFloatTwo">
                  </div>
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>