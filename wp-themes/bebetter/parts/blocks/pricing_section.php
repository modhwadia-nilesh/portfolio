<?php if (!$block) {
   return;
} ?>

<!-- PRICING -->
<section class="pricing <?php echo block_classes($block); ?>">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="title">
               <h2>
                  <?php echo $block['pricing_heading']; ?>
               </h2>
               <p>
                  <?php echo $block['pricing_content'] ?>
                  <span>
                     <?php echo $block['pricing_sub_content'] ?>
                  </span>
               </p>
            </div>
         </div>
         <?php
         $cardDetails = $block['pricing_card'];
         if (is_array($cardDetails) && !empty($cardDetails)) {
            foreach ($cardDetails as $data) {
               ?>
               <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="pricing__info">
                     <h5>
                        <?php echo $data['heading']; ?>
                     </h5>
                     <h3>
                        <?php echo $data['pricing']; ?>
                        <span>/
                           <?php echo $data['duration']; ?>
                        </span>
                     </h3>
                     <p>
                        <?php echo $data['description']; ?>
                     </p>
                     <h6>Includes:</h6>
                     <?php
                     $cardList = $data['pricing_list'];
                     if ($cardList && !empty($cardList)) {
                        echo '<ul class="pricing__list">';
                        foreach ($cardList as $list) {
                           if (is_array($list) && $list['list']) {
                              echo '<li>' . $list['list'] . '</li>';
                           }
                        }
                        echo '</ul>';
                     }
                     ?>
                     <?php a_href_from_link($block['pricing_card'][0]["button_link"], "button-secondary"); ?>
                  </div>
               </div>
               <?php
            }
         }
         ?>
      </div>
   </div>
</section>

<!-- PRICING -->