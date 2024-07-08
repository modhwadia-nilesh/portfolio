<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php $faviconIcon = get_field('favicon_icon', 'options'); ?>
	<link rel="shortcut icon" href="<?php echo $faviconIcon; ?>" type="image/x-icon">
	<?php wp_head(); ?>
	<?php the_field('header_scripts', 'options'); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php $headerLogoUrl = get_field('header_logo', 'options'); ?>
	<header class="site__header">
		<div class="container">
			<nav class="navbar navbar-expand-lg">
				<a href="<?php echo site_url(); ?>" class="logo">
					<img src="<?php echo $headerLogoUrl; ?>" alt="<?php echo bloginfo(); ?>">
				</a>
				<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- DESKTOP NAVIGATIONBAR-LIST -->
				<div class="collapse navbar-collapse" id="navbarContent">
					<?php
					wp_nav_menu(
						array(
							'menu' => 'header-menu', // Display the desktop menu
							'menu_class' => 'navbar-nav ms-auto',
							'container' => '',
							'menu_id' => '',
							'link_class' => 'nav-link'
						)
					);
					?>
					<?php $buttonLink = get_field('button_link', 'options'); ?>
					<?php if ($buttonLink && $buttonLink['title']):
						$linkTarget = $buttonLink['target'] ? $buttonLink['target'] : "_self"; ?>
						<a class="button-primary" href="<?php echo $buttonLink['url']; ?>"
							target="<?php echo $linkTarget; ?>">
							<svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_182_15)">
									<path
										d="M5.79727 1.66886C5.52656 1.01495 4.81289 0.666906 4.13086 0.853234L1.03711 1.69698C0.425391 1.86573 0 2.4212 0 3.05402C0 11.7517 7.05234 18.804 15.75 18.804C16.3828 18.804 16.9383 18.3786 17.107 17.7669L17.9508 14.6732C18.1371 13.9911 17.7891 13.2775 17.1352 13.0068L13.7602 11.6005C13.1871 11.3614 12.5227 11.5267 12.1324 12.0083L10.7121 13.7415C8.23711 12.5708 6.2332 10.5669 5.0625 8.09191L6.7957 6.67511C7.27734 6.28136 7.44258 5.62042 7.20352 5.04737L5.79727 1.67237V1.66886Z"
										fill="white" />
								</g>
								<defs>
									<clipPath id="clip0_182_15">
										<rect width="18" height="18" fill="white" transform="translate(0 0.804199)" />
									</clipPath>
								</defs>
							</svg>
							<?php echo $buttonLink["title"]; ?>
						</a>
					<?php endif; ?>

				</div>
				<!-- DESKTOP NAVIGATIONBAR-LIST -->
			</nav>
		</div>
	</header>