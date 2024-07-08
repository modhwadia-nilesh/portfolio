<?php

/*
 * Disable emoji scripts
 */
function theme_disable_scripts_styles()
{
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('init', 'theme_disable_scripts_styles');


/**
 * Theme setup
 */
function theme_setup()
{
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support('automatic-feed-links');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 */
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(1568, 9999);

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu', THEME_TEXTDOMAIN),
		)
	);

	// Add support for responsive embedded content.
	add_theme_support('responsive-embeds');

	/**
	 * Add custom image sizes
	 */
	//add_image_size( '1600x720', 1600, 720, true );
}
add_action('after_setup_theme', 'theme_setup');


/*
 * Remove Editor support from admin. ACF Blocks everywhere
 */
function theme_admin_hide_editor()
{
	remove_post_type_support('post', 'editor');
	remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'theme_admin_hide_editor');

/*
 * Disable Block Editor
 */
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);

/*
 * Contact Form 7 Auto p Tag Disabled
 */
add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Enqueue scripts and styles for front-end.
 *
 */
function theme_scripts_styles()
{
	// Loads our main stylesheet.
	wp_enqueue_style('style', get_stylesheet_uri(), [], filemtime(get_theme_file_path('/style.css')));
	wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', [], '5.2.3');
	wp_enqueue_style('theme-css', get_template_directory_uri() . '/assets/css/style.css', [], filemtime(get_theme_file_path('/assets/css/style.css')));

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.7.1.min.js', [], '3.7.1', false);
	wp_enqueue_script('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', ['jquery'], '5.2.3', true);
	wp_enqueue_script('popper', '//cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', ['jquery'], '2.11.6', true);
	wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], filemtime(get_theme_file_path('/assets/js/main.js')), true);
}
add_action('wp_enqueue_scripts', 'theme_scripts_styles');



/**
 * Add ACF theme options support
 */
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(
		array(
			'page_title' => 'Theme Settings',
			'menu_title' => 'Theme Settings',
			'menu_slug' => 'theme-settings',
			'capability' => 'edit_posts',
			'redirect' => true,
			'position' => '2',
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title' => 'Theme Header Settings',
			'menu_title' => 'Header',
			'parent_slug' => 'theme-settings',
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title' => 'Theme Footer Settings',
			'menu_title' => 'Footer',
			'parent_slug' => 'theme-settings',
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title' => 'Theme General Settings',
			'menu_title' => 'General',
			'parent_slug' => 'theme-settings',
		)
	);

}


/*
 * Add SVG upload support
 */
function add_svg_to_upload_mimes($uploadMimes)
{
	$uploadMimes['svg'] = 'image/svg+xml';
	$uploadMimes['svgz'] = 'image/svg+xml';

	return $uploadMimes;
}
add_filter('upload_mimes', 'add_svg_to_upload_mimes');

/*
 * Remove admin bar
 */
//add_filter('show_admin_bar', '__return_false');

/*
 * On Mouseover Toggle Admin Bar
 */
add_action('wp_head', 'toggle_admin_bar_mouseover');
function toggle_admin_bar_mouseover()
{
	?>
	<script>
		$(document).ready(function () {
			if ($('#wpadminbar').length > 0) {
				$('html').attr('style', 'margin-top: 0px !important');
				$('#wpadminbar').css('background', 'rgba(29, 35, 39, 0)').find('#wp-toolbar').hide();

				$('#wpadminbar').on('mouseout mouseover', function (event) {
					$(this).css('background', event.type === 'mouseout' ? 'rgba(29, 35, 39, 0)' : '#1d2327');
					$(this).find('#wp-toolbar').toggle(event.type === 'mouseover');
				});

				$(window).on('load resize', function () {
					$('#wpadminbar').toggle($(window).width() >= 1024);
				});
			}
		});
	</script>
	<?php
}

/**
 *  Changed Admin Logo
 */
function my_login_logo()
{
	$logoUrl = get_field('header_logo', 'options');
	$logoUrl = $logoUrl ? $logoUrl : get_template_directory_uri() . '/assets/images/logo.svg';
	?>
	<style type="text/css">
		#login h1 a,
		.login h1 a {
			background-image: url(<?php echo $logoUrl; ?>);
			height: 65px;
			width: 320px;
			background-size: 320px 65px;
			background-repeat: no-repeat;
			padding-bottom: 30px;
		}
	</style>
	<?php
}

add_action('login_enqueue_scripts', 'my_login_logo');

/***
 * Admin logo URL
 */
function admin_logo_url()
{
	return home_url();
}
add_filter('login_headerurl', 'admin_logo_url');

/*
 * ACF Fields Work as do_shortcode
 */
add_filter('acf/format_value/type=text', 'do_shortcode');
add_filter('acf/format_value/type=textarea', 'do_shortcode');

/*
 * a href from ACF Link
 */
function a_href_from_link($link, $class = '')
{
	if ($link && $link['title'] && $link['url']) {
		$target = '_self';
		if ($link['target']) {
			$target = $link['target'];
		}
		echo '<a href="' . $link['url'] . '" target="' . $target . '" class="' . $class . '">' . $link['title'] . '</a>';
	}
}

/*******************************
 Trim Content By Character Count
 *******************************/

function trim_content($excerpt, $maxCharacter = '50', $htmlTag = '')
{
	if ($htmlTag) {
		echo '<' . $htmlTag . '>';
	}
	if ($excerpt) {
		echo (strlen(strip_tags($excerpt)) > $maxCharacter) ? substr(strip_tags($excerpt), 0, $maxCharacter) . "..." : substr(strip_tags($excerpt), 0, $maxCharacter);
	}
	if ($htmlTag) {
		echo '</' . $htmlTag . '>';
	}
}

/*
 * ACF Relationship Fields Show Only Published Posts
 */
function filter_acf_relationship($args, $field, $post_id)
{
	$args['post_status'] = 'publish';
	return $args;
}

add_filter('acf/fields/relationship/query', 'filter_acf_relationship', 10, 3);

/**
 *  Add Wp Nav Menu sub-menu Ul Class
 */
function my_nav_menu_submenu_css_class($classes, $args, $depth)
{
	if ($args->menu == 'header-menu') {
		unset($classes[array_search("sub-menu", $classes)]);
		$classes[] = 'dropdown-menu';
	}

	if ($args->menu == 'Mobile Header Menu') {
		unset($classes[array_search("sub-menu", $classes)]);
		$classes[] = 'wpsub-menu';
	}
	return $classes;
}
add_filter('nav_menu_submenu_css_class', 'my_nav_menu_submenu_css_class', 10, 3);

/**
 *  Add Wp Nav Menu li Class
 */
function special_nav_class($classes, $menu_item, $args, $depth)
{
	if ($args->menu == 'Header Menu') {
		$classes[] = 'nav-item';
		if (in_array('current-menu-item', $classes)) {
			$classes[] = 'active ';
		}
	}
	$args->link_after = '';
	if (in_array('menu-item-has-children', $classes)) {
		$args->link_after = ' +';
	}
	return $classes;
}
// add_filter('nav_menu_css_class', 'special_nav_class', 10, 4);

/**
 *  Add Wp Nav Menu anchor Tag Class
 */
function add_specific_menu_location_atts($atts, $item, $args)
{
	if ($args->menu == 'Mobile Header Menu') {
		$atts['class'] = 'nav-link';
	}
	return $atts;
}
// add_filter('nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3);



// Add class to <li> tags
function custom_nav_menu_css_class($classes, $item, $args, $depth)
{
	$classes[] = 'nav-item'; // Add your custom class for <li>
	if (in_array('menu-item-has-children', $classes)) {
		$classes[] = 'dropdown';
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'custom_nav_menu_css_class', 10, 4);

// Add class to <a> tags
function custom_nav_menu_link_attributes($atts, $item, $args, $depth)
{
	$atts['class'] = 'nav-link menu-link'; // Add your custom class for <a>
	return $atts;
}
add_filter('nav_menu_link_attributes', 'custom_nav_menu_link_attributes', 10, 4);
