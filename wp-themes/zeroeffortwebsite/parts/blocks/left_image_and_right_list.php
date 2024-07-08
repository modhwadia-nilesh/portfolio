<?php
if (!$block) {
   return;
}
?>
<section class="oneStopWebSolution <?php echo block_classes($block); ?>" id="<?php echo block_id($block); ?>">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <?php if ($block['heading']): ?>
               <div class="title">
                  <h2><?php echo $block['heading']; ?></h2>
               </div>
            <?php endif; ?>
         </div>
         <div class="col-lg-6 col-md-6">
            <?php if ($block['image']): ?>
               <div class="oneStopWebSolution__previewImg">
                  <img src="<?php echo $block['image']['url']; ?>" alt="<?php echo $block['image']['alt']; ?>">
               </div>
            <?php endif; ?>
         </div>
         <div class="col-lg-6 col-md-6">
            <?php if ($block['title']) {
               echo '<h3>' . $block['title'] . '</h3>';
            } ?>
            <?php if (!empty($block['content_list_repeater'])): ?>
               <ul class="oneStopWebSolution__listing">
                  <?php foreach ($block['content_list_repeater'] as $contentList): ?>
                     <li>
                        <?php echo $contentList['title']; ?>
                        <?php echo $contentList['description']; ?>
                     </li>
                  <?php endforeach; ?>
               </ul>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>