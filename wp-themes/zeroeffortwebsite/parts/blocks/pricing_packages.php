<?php
if (!$block) {
   return;
}
$heading                    = $block['heading'];
$toggleHeadingText          = $block['toggle_heading_text'];
$toggleButton               = $block['toggle_button'];
$pricingPackageListRepeater = $block['pricing_package_list_repeater'];
$buttonLink                 = $block['button_link'];
$buttonSubtext              = $block['button_subtext'];
?>

<section class="pricingPlans <?php echo block_classes($block); ?>" id="<?php echo block_id($block); ?>">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-12">
            <?php if ($heading): ?>
               <div class="title">
                  <h2><?php echo $heading; ?></h2>
               </div>
            <?php endif; ?>
            <div class="text-center">
               <?php if ($toggleHeadingText) {
                  echo '<h5>' . $toggleHeadingText . '</h5>';
               } ?>
               <div class="custom-control custom-switch">
                  <div>
                     <label class="first-label <?php echo !$toggleButton ? 'bold' : 'normal'; ?>">Pay Monthly </label>
                  </div>
                  <div>
                     <input type="checkbox" class="custom-control-input" id="customSwitch1" <?php echo $toggleButton ? 'checked' : ''; ?>>
                     <label class="custom-control-label" for="customSwitch1"></label>
                  </div>
                  <div>
                     <label class="last-label <?php echo $toggleButton ? 'bold' : 'normal'; ?>">Pay Yearly</label>
                  </div>
                  <div class="showMobile">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/DiscountImageMobile.svg" class="DiscountImage" alt="DiscountImageMobile">
                  </div>
                  <div class="showDesktop">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/DiscountImage.svg" class="DiscountImage" alt="DiscountImage">
                  </div>
               </div>
            </div>
         </div>
         <?php if (!empty($pricingPackageListRepeater)): ?>
            <?php foreach ($pricingPackageListRepeater as $pricingPackage): ?>
               <div class="col-lg-4 col-md-6">
                  <div class="pricingPlans__packages <?php echo $pricingPackage['recommended_plan'] ? 'pricingPlans__packagesActive' : ''; ?>">
                     <?php if ($pricingPackage['top_title'] && $pricingPackage['recommended_plan']) {
                        echo '<small>' . $pricingPackage['top_title'] . '</small>';
                     } ?>
                     <?php if ($pricingPackage['title']) {
                        echo '<h4>' . $pricingPackage['title'] . '</h4>';
                     } ?>
                     <?php echo $pricingPackage['description']; ?>
                     <div class="pricingPlans__packages-monthly <?php echo !$toggleButton ? 'bold' : 'normal'; ?>">
                        <span><?php echo $pricingPackage['package_price_monthly']; ?> <small>+ <?php echo $pricingPackage['package_term_monthly']; ?></small></span>
                     </div>
                     <div class="pricingPlans__packages-yearly <?php echo $toggleButton ? 'bold' : 'normal'; ?>">
                        <span><?php echo $pricingPackage['package_price_yearly']; ?> <small>+ <?php echo $pricingPackage['package_term_yearly']; ?></small></span>
                     </div>
                     <?php if ($pricingPackage['button_link']): ?>
                        <div>
                           <?php if ($pricingPackage['recommended_plan']): ?>
                              <?php a_href_from_link($pricingPackage['button_link'], 'pricingPlans__packages-btn pricingPlans__packagesActive-btn'); ?>
                           <?php else: ?>
                              <?php a_href_from_link($pricingPackage['button_link'], 'pricingPlans__packages-btn'); ?>
                           <?php endif; ?>
                        </div>
                     <?php endif; ?>
                     <?php if (!empty($pricingPackage['features_list_repeater'])): ?>
                        <ul class="pricingPlans__packages-list <?php echo $pricingPackage['recommended_plan'] ? 'pricingPlans__packagesActive-list' : ''; ?>">
                           <?php foreach ($pricingPackage['features_list_repeater'] as $packageFeature): ?>
                              <li class="<?php echo $packageFeature['features_available'] ? 'active' : 'disabled'; ?>"><?php echo $packageFeature['title']; ?></li>
                           <?php endforeach; ?>
                        </ul>
                     <?php endif; ?>
                  </div>
               </div>
            <?php endforeach; ?>
         <?php endif; ?>
         <?php if ($buttonLink): ?>
            <div class="col-lg-12">
               <div class="pricingPlans__custom">
                  <h5>OR</h5>
                  <div>
                     <?php a_href_from_link($buttonLink, 'button-primary'); ?>
                  </div>
                  <?php if ($buttonSubtext) {
                     echo '<span>' . $buttonSubtext . '</span>';
                  } ?>
               </div>
            </div>
         <?php endif; ?>
      </div>
   </div>
</section>