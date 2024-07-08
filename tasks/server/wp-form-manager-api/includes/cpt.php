<?php

/**
 * Register Custom Post Type
 */
function form_post_type()
{

   $labels = array(
      'name'                  => _x('Form', 'Post Type General Name', 'wp-form-manager-api'),
      'singular_name'         => _x('Form', 'Post Type Singular Name', 'wp-form-manager-api'),
      'menu_name'             => __('Forms', 'wp-form-manager-api'),
      'name_admin_bar'        => __('Forms', 'wp-form-manager-api'),
      'archives'              => __('Form Archives', 'wp-form-manager-api'),
      'attributes'            => __('Form Attributes', 'wp-form-manager-api'),
      'parent_item_colon'     => __('Parent Form:', 'wp-form-manager-api'),
      'all_items'             => __('All Forms', 'wp-form-manager-api'),
      'add_new_item'          => __('Add New Form', 'wp-form-manager-api'),
      'add_new'               => __('Add New', 'wp-form-manager-api'),
      'new_item'              => __('New Form', 'wp-form-manager-api'),
      'edit_item'             => __('Edit Form', 'wp-form-manager-api'),
      'update_item'           => __('Update Form', 'wp-form-manager-api'),
      'view_item'             => __('View Form', 'wp-form-manager-api'),
      'view_items'            => __('View Forms', 'wp-form-manager-api'),
      'search_items'          => __('Search Form', 'wp-form-manager-api'),
      'not_found'             => __('Not found', 'wp-form-manager-api'),
      'not_found_in_trash'    => __('Not found in Trash', 'wp-form-manager-api'),
      'featured_image'        => __('Featured Image', 'wp-form-manager-api'),
      'set_featured_image'    => __('Set featured image', 'wp-form-manager-api'),
      'remove_featured_image' => __('Remove featured image', 'wp-form-manager-api'),
      'use_featured_image'    => __('Use as featured image', 'wp-form-manager-api'),
      'insert_into_item'      => __('Insert into Form', 'wp-form-manager-api'),
      'uploaded_to_this_item' => __('Uploaded to this Form', 'wp-form-manager-api'),
      'items_list'            => __('Forms list', 'wp-form-manager-api'),
      'items_list_navigation' => __('Forms list navigation', 'wp-form-manager-api'),
      'filter_items_list'     => __('Filter Forms list', 'wp-form-manager-api'),
   );
   $args   = array(
      'label'               => __('Form', 'wp-form-manager-api'),
      'labels'              => $labels,
      'supports'            => array('title'),
      'hierarchical'        => true,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-email-alt',
      'show_in_admin_bar'   => true,
      'show_in_nav_menus'   => true,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'page',
      'show_in_rest'       => true,
   );
   register_post_type('wp_api_manager_form', $args);

}
add_action('init', 'form_post_type', 0);
