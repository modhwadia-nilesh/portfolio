<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 */
?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php
	$faviconIcon = get_field('favicon_icon', 'options');
	$faviconIcon = $faviconIcon ? $faviconIcon : get_template_directory_uri() . '/assets/img/favicon.ico';
	?>
	<link rel="shortcut icon" href="<?php echo $faviconIcon; ?>" type="image/x-icon">
	<?php wp_head(); ?>
	<?php echo get_field('header_scripts', 'options'); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php
	$headerLogoDesktop    = get_field('header_logo_desktop', 'options');
	$headerLogoMobile     = get_field('header_logo_mobile', 'options');
	$headerLogoDesktopUrl = $headerLogoDesktop ? $headerLogoDesktop : get_template_directory_uri() . '/assets/images/Logo.svg';
	$headerButtonLink     = get_field('button_link', 'options');
	?>

	<header>
		<nav class="navbar navbar-expand-lg fixed-top">
			<div class="container">
				<a class="navbar-brand" href="<?php echo home_url(); ?>">
					<img src="<?php echo $headerLogoDesktopUrl; ?>" class="d-none d-lg-block" alt="<?php echo bloginfo(); ?>">
					<img src="<?php echo $headerLogoMobile ? $headerLogoMobile : $headerLogoDesktopUrl; ?>" class="d-block d-lg-none" alt="<?php echo bloginfo(); ?>">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<div class="navbar-toggler-icon">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<?php
					wp_nav_menu(
						array(
							'menu'       => "Header Menu",
							'container'  => "",
							'menu_class' => "navbar-nav ms-auto",
						)
					);
					?>
					<?php if ($headerButtonLink): ?>
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">
								<?php a_href_from_link($headerButtonLink, 'button-primary nav-link'); ?>
							</li>
						</ul>
					<?php endif; ?>
				</div>
			</div>
		</nav>
	</header>