<?php
if (!$block) {
   return;
}
$heading               = $block['heading'];
$accordionListRepeater = $block['accordion_list_repeater'];
?>
<section class="faq <?php echo block_classes($block); ?>" id="<?php echo block_id($block); ?>">
   <div class="container">
      <div class="row ">
         <div class="col-lg-12">
            <?php if ($heading): ?>
               <div class="title">
                  <h2><?php echo $heading; ?></h2>
               </div>
            <?php endif; ?>

            <?php if (!empty($accordionListRepeater)): ?>
               <div class="row justify-content-center">
                  <div class="col-lg-9">
                     <div class="accordion" id="accordionExample">
                        <?php $counter = 1; ?>
                        <?php foreach ($accordionListRepeater as $accordionItem): ?>
                           <?php
                           $collapsedClass = $counter == 1 ? '' : 'collapsed';
                           $showClass      = $counter == 1 ? 'show' : '';
                           ?>
                           <div class="accordion-item">
                              <h2 class="accordion-header" id="headingOne">
                                 <button class="accordion-button <?php echo $collapsedClass; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $counter; ?>" aria-expanded="true" aria-controls="collapseOne">
                                    <?php echo $accordionItem['title']; ?>
                                 </button>
                              </h2>
                              <div id="collapse<?php echo $counter; ?>" class="accordion-collapse collapse <?php echo $showClass; ?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <?php echo $accordionItem['description']; ?>
                                 </div>
                              </div>
                           </div>
                           <?php $counter++; ?>
                        <?php endforeach; ?>
                     </div>
                  </div>
               </div>
            <?php endif; ?>
         </div>
      </div>
   </div>
</section>