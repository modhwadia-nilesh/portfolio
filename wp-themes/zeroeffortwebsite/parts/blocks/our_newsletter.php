<?php
if (!$block) {
   return;
}
$title         = $block['title'];
$description   = $block['description'];
$formShortcode = $block['form_shortcode'];
?>
<section class="newsLetter <?php echo block_classes($block); ?>" id="<?php echo block_id($block); ?>">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="newsLetter__wrap">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <?php if ($title) {
                        echo '<h4>' . $title . '</h4>';
                     } ?>
                     <?php if ($description) {
                        echo '<h6>' . $description . '</h6>';
                     } ?>
                  </div>
                  <div class="col-lg-6">
                     <?php echo $formShortcode; ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>