<?php
if (!$block) {
   return;
}
$backgroundImage = $block['background_image'] ? 'style="background-image:' . $block["background_image"]["url"] . '"' : '';
$heading         = $block['heading'];
?>
<section class="secondaryHeroBanner <?php echo block_classes($block); ?>" id="<?php echo block_id($block); ?>" <?php echo $backgroundImage ?>>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <?php if ($heading) {
               echo '<h1>' . $heading . '</h1>';
            } ?>
         </div>
      </div>
   </div>
</section>