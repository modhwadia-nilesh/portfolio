<?php
if (!$block) {
   return;
}
$heading              = $block['heading'];
$description          = $block['description'];
$counterBoxesRepeater = $block['counter_boxes_repeater'];
?>
<section class="howItWorks <?php echo block_classes($block); ?>" id="<?php echo block_id($block); ?>">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <?php if ($heading): ?>
               <div class="title">
                  <h2 class="white"><?php echo $heading; ?></h2>
               </div>
            <?php endif; ?>
            <?php if ($description) {
               echo '<h5>' . $description . '</h5>';
            } ?>
         </div>
         <?php if (!empty($counterBoxesRepeater)): ?>
            <?php $counter = 1; ?>
            <?php foreach ($counterBoxesRepeater as $counterBox): ?>
               <div class="col-lg-3 col-md-6">
                  <div class="howItWorks__steps">
                     <span><?php echo sprintf("%02d", $counter); ?></span>
                     <h4><?php echo $counterBox['title']; ?></h4>
                     <?php echo $counterBox['description']; ?>
                     <?php if ($counter != count($counterBoxesRepeater)): ?>
                        <?php if ($counter % 2 == 0): ?>
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/StepsArrowTwo.svg" alt="StepsArrowOne">
                        <?php else: ?>
                           <img src="<?php echo get_template_directory_uri(); ?>/assets/images/StepsArrowOne.svg" alt="StepsArrowOne">
                        <?php endif; ?>
                     <?php endif; ?>
                  </div>
               </div>
               <?php $counter++; ?>
            <?php endforeach; ?>
         <?php endif; ?>
      </div>
   </div>
</section>