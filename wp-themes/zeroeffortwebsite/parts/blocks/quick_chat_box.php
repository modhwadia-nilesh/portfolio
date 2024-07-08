<?php
if (!$block) {
   return;
}
$heading      = $block['heading'];
$content      = $block['content'];
$quickChatUrl = $block['quick_chat_url'];
?>
<section class="ZeroObligationsChat <?php echo block_classes($block); ?>" id="<?php echo block_id($block); ?>">
   <div class="container">
      <?php if ($heading): ?>
         <div class="row">
            <div class="col-lg-12">
               <div class="title">
                  <h2><?php echo $heading; ?></h2>
               </div>
            </div>
         </div>
      <?php endif; ?>
      <div class="row">
         <div class="col-lg-12">
            <?php if ($content): ?>
               <div class="ZeroObligationsChat__content">
                  <?php echo $content; ?>
               </div>
            <?php endif; ?>
            <?php if ($quickChatUrl): ?>
               <div class="calendly-inline-widget" data-url="<?php echo $quickChatUrl; ?>"></div>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>