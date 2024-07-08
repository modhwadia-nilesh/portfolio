<?php
if (!$block) {
   return;
}
$title               = $block['title'];
$email               = $block['email'];
$phoneNumber         = $block['phone_number'];
$socialLinksRepeater = $block['social_links'];
$formTitle           = $block['form_title'];
$formShortcode       = $block['form_shortcode'];
?>

<section class="contactUs <?php echo block_classes($block); ?>" id="<?php echo block_id($block); ?>">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-5 col-md-5">
            <?php if ($title) {
               echo '<h2>' . $title . '</h2>';
            } ?>
            <?php if ($email || $phoneNumber): ?>
               <ul class="contactUs__reachOut">
                  <?php if ($email): ?>
                     <li class="active">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MailWhiteIcon.svg" class="offHover" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MailBlueIcon.svg" class="onHover" alt="">
                        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                     </li>
                  <?php endif; ?>
                  <?php if ($phoneNumber): ?>
                     <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/PhoneWhiteIcon.svg" class="offHover" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/PhoneBlueIcon.svg" class="onHover" alt="">
                        <a href="tel:<?php echo $phoneNumber; ?>"><?php echo $phoneNumber; ?></a>
                     </li>
                  <?php endif; ?>
               </ul>
            <?php endif; ?>
            <?php if ($socialLinksRepeater): ?>
               <ul class="contactUs__socialIcons">
                  <?php foreach ($socialLinksRepeater as $socialLink): ?>
                     <li>
                        <a href="<?php echo $socialLink['link']['url']; ?>" target="<?php echo $socialLink['link']['target'] ? $socialLink['link']['target'] : ''; ?>">
                           <?php getInlineSvg($socialLink['icon']['url']); ?>
                        </a>
                     </li>
                  <?php endforeach; ?>
               </ul>
            <?php endif; ?>
         </div>

         <div class="col-lg-7 col-md-7">
            <div class="contactUs__form">
               <?php if ($formTitle) {
                  echo '<h3>' . $formTitle . '</h3>';
               } ?>
               <?php echo $formShortcode; ?>
            </div>
         </div>
      </div>
   </div>
</section>