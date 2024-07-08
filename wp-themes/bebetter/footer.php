<?php
/**
 * The template for displaying the footer
 *
 */
?>
<!-- FOOTER -->
<?php $footerBackgroundType = get_field('footer_background_type'); ?>
<footer class="padding-t-50 padding-b-50 <?php echo $footerBackgroundType ? 'bg-white' : ''; ?>">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="footer__top">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="footer__left">
								<?php $footerLogoUrl = get_field('footer_logo', 'options'); ?>

								<a href="<?php echo site_url(); ?>" class="logo">
									<img src="<?php echo $footerLogoUrl; ?>" alt="<?php echo bloginfo(); ?>">
								</a>
								<p>
									<?php $footerCon = get_field('footer_content', 'options');
									echo $footerCon;
									?>
								</p>
								<?php
								$footerIcons = get_field('footer_social_icons', 'options');
								if ($footerIcons && !empty($footerIcons)) {
									echo '<ul class="footer__socialIcon">';
									foreach ($footerIcons as $footerIcon) {
										if (!empty($footerIcon['social_icon']) && !empty($footerIcon['social_icon']['url'])) {
											echo '<li>';
											echo '<a href="' . $footerIcon['social_link'] . '" target="_blank">';
											echo '<img src="' . $footerIcon['social_icon']['url'] . '" alt="' . $footerIcon['social_icon']['alt'] . '"/>';
											echo '</a>';
											echo '</li>';
										}
									}
									echo '</ul>';
								}
								?>

							</div>
						</div>
						<div class="col-lg-6 col-md-6">

							<?php
							$footerQuickLinks = get_field('footer_quick_links', 'options');
							if ($footerQuickLinks && !empty($footerQuickLinks)) {
								echo '<ul class="footer__links">';
								foreach ($footerQuickLinks as $quickLink) {
									echo '<li>';
									$link_url = $quickLink['quick_link']['url'];
									$link_title = $quickLink['quick_link']['title'];
									$link_target = $quickLink['quick_link']['target'];
									echo '<a href="' . $link_url . '" target="' . $link_target . '">';
									echo $link_title;
									echo '</a>';
									echo '</li>';
								}
								echo '</ul>';
							}
							?>

						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="footer__bottom">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="footer__left">
								<div class="footer__email">
									<?php
									$subscribeContent = get_field('subscribe_content', 'options');
									$formShortCode = get_field('form_shortcode', 'options');
									?>
									<h6>
										<?php echo $subscribeContent; ?>
									</h6>
									<div class="footer__email">
										<?php echo do_shortcode($formShortCode); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="footer__copyright">
								<p>
									<?php echo get_field("footer_copyrights", 'options'); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- FOOTER -->

<?php wp_footer(); ?>
<?php the_field('footer_scripts', 'options'); ?>
</body>

</html>