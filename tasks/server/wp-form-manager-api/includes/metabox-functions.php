<?php

/*
 * Register Meta Boxes for MetaFields
 */
function add_form_meta_boxes()
{
   add_meta_box(
      'form_meta_box',
      'Form Details',
      'form_meta_box_html',
      'wp_api_manager_form'
   );
}
add_action('add_meta_boxes', 'add_form_meta_boxes');


/* 
 * Register the meta fields 
 */
function register_form_meta_fields()
{
   register_post_meta('wp_api_manager_form', '_form_email', [
      'show_in_rest' => true,
      'single'       => true,
      'type'         => 'string',
   ]);

   register_post_meta('wp_api_manager_form', '_form_message', [
      'show_in_rest' => true,
      'single'       => true,
      'type'         => 'string',
   ]);
}
add_action('init', 'register_form_meta_fields');

/* 
 * From Meta Box Html 
 */
function form_meta_box_html($post)
{
   $email   = get_post_meta($post->ID, '_form_email', true);
   $message = get_post_meta($post->ID, '_form_message', true);

   ?>
               <label for="form_email">Email:</label>
               <input type="text" name="form_email" value="<?php echo esc_attr($email); ?>" class="widefat" />
               <br><br>
               <label for="form_message">Message:</label>
               <textarea name="form_message" class="widefat"><?php echo esc_textarea($message); ?></textarea>
               <?php
}

/* 
 * Save From Submission Data into Post Meta
 */
function save_form_meta_box($post_id)
{
   if (array_key_exists('form_email', $_POST)) {
      update_post_meta($post_id, '_form_email', sanitize_email($_POST['form_email']));
   }

   if (array_key_exists('form_message', $_POST)) {
      update_post_meta($post_id, '_form_message', sanitize_textarea_field($_POST['form_message']));
   }
}
add_action('save_post', 'save_form_meta_box');
