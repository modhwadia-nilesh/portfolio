<?php
/**
 * The template for displaying the footer
 *
 */
?>
<?php
$footerLogo              = get_field('footer_logo', 'options');
$footerDescription       = get_field('footer_description', 'options');
$socialLinksRepeater     = get_field('social_links_repeater', 'options');
$footerLinksColumnFirst  = get_field('footer_links_column_first', 'options');
$footerLinksColumnSecond = get_field('footer_links_column_second', 'options');
$footerLinksColumnThird  = get_field('footer_links_column_third', 'options');
$footerLinksColumnFourth = get_field('footer_links_column_fourth', 'options');
$footerCopyrights        = get_field('footer_copyrights', 'options');
?>
<footer>
   <section class="footer">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-md-4">
               <div class="footer__logo">
                  <?php if ($footerLogo): ?>
                     <img src="<?php echo $footerLogo['url']; ?>" alt="<?php echo bloginfo(); ?>">
                  <?php endif; ?>
                  <?php echo $footerDescription; ?>
                  <?php if (!empty($socialLinksRepeater)): ?>
                     <ul>
                        <?php foreach ($socialLinksRepeater as $socialLink): ?>
                           <?php if ($socialLink['icon'] && $socialLink['link']): ?>
                              <li>
                                 <a href="<?php echo $socialLink['link']['url']; ?>" target="<?php echo $socialLink['link']['target'] ? $socialLink['link']['target'] : '_self'; ?>">
                                    <img src="<?php echo $socialLink['icon']['url']; ?>" alt="<?php echo $socialLink['icon']['alt']; ?>">
                                 </a>
                              </li>
                           <?php endif; ?>
                        <?php endforeach; ?>
                     </ul>
                  <?php endif; ?>
               </div>
            </div>
            <div class="col-lg-8 col-md-8">
               <div class="row">
                  <?php if ($footerLinksColumnFirst['title'] || !empty($footerLinksColumnFirst['footer_links_repeater'])): ?>
                     <div class="col-lg-3 col-sm-6">
                        <div class="footer__links">
                           <?php if ($footerLinksColumnFirst['title']) {
                              echo '<h5>' . $footerLinksColumnFirst['title'] . '</h5>';
                           } ?>
                           <?php if (!empty($footerLinksColumnFirst['footer_links_repeater'])): ?>
                              <ul>
                                 <?php foreach ($footerLinksColumnFirst['footer_links_repeater'] as $footerLinks): ?>
                                    <li>
                                       <?php a_href_from_link($footerLinks['link']); ?>
                                    </li>
                                 <?php endforeach; ?>
                              </ul>
                           <?php endif; ?>
                        </div>
                     </div>
                  <?php endif; ?>
                  <?php if ($footerLinksColumnSecond['title'] || !empty($footerLinksColumnSecond['footer_links_repeater'])): ?>
                     <div class="col-lg-3 col-sm-6">
                        <div class="footer__links">
                           <?php if ($footerLinksColumnSecond['title']) {
                              echo '<h5>' . $footerLinksColumnSecond['title'] . '</h5>';
                           } ?>
                           <?php if (!empty($footerLinksColumnSecond['footer_links_repeater'])): ?>
                              <ul>
                                 <?php foreach ($footerLinksColumnSecond['footer_links_repeater'] as $footerLinks): ?>
                                    <li>
                                       <?php a_href_from_link($footerLinks['link']); ?>
                                    </li>
                                 <?php endforeach; ?>
                              </ul>
                           <?php endif; ?>
                        </div>
                     </div>
                  <?php endif; ?>
                  <?php if ($footerLinksColumnThird['title'] || !empty($footerLinksColumnThird['footer_links_repeater'])): ?>
                     <div class="col-lg-3 col-sm-6">
                        <div class="footer__links">
                           <?php if ($footerLinksColumnThird['title']) {
                              echo '<h5>' . $footerLinksColumnThird['title'] . '</h5>';
                           } ?>
                           <?php if (!empty($footerLinksColumnThird['footer_links_repeater'])): ?>
                              <ul>
                                 <?php foreach ($footerLinksColumnThird['footer_links_repeater'] as $footerLinks): ?>
                                    <li>
                                       <?php a_href_from_link($footerLinks['link']); ?>
                                    </li>
                                 <?php endforeach; ?>
                              </ul>
                           <?php endif; ?>
                        </div>
                     </div>
                  <?php endif; ?>
                  <?php if ($footerLinksColumnFourth['title'] || !empty($footerLinksColumnFourth['footer_links_repeater'])): ?>
                     <div class="col-lg-3 col-sm-6">
                        <div class="footer__links">
                           <?php if ($footerLinksColumnFourth['title']) {
                              echo '<h5>' . $footerLinksColumnFourth['title'] . '</h5>';
                           } ?>
                           <?php if (!empty($footerLinksColumnFourth['footer_links_repeater'])): ?>
                              <ul>
                                 <?php foreach ($footerLinksColumnFourth['footer_links_repeater'] as $footerLinks): ?>
                                    <li>
                                       <?php a_href_from_link($footerLinks['link']); ?>
                                    </li>
                                 <?php endforeach; ?>
                              </ul>
                           <?php endif; ?>
                        </div>
                     </div>
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php if ($footerCopyrights): ?>
      <section class="footer__copyright">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="footer__copyright">
                     <span><?php echo $footerCopyrights; ?></span>
                  </div>
               </div>
            </div>
         </div>
      </section>
   <?php endif; ?>
</footer>

<?php wp_footer(); ?>
<?php echo get_field("footer_scripts", "options"); ?>
</body>

</html>