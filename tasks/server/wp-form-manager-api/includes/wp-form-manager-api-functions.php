<?php

/* 
 * Register Rest API route
 */
function register_contact_form_endpoint()
{
    register_rest_route('/v1', '/contact-form', [
        'methods'             => 'POST',
        'callback'            => 'handle_form_submission',
        'permission_callback' => 'handle_check_user_permission',
    ]);
}
add_action('rest_api_init', 'register_contact_form_endpoint');

/* 
 * Handle Check User Permission for Form Submission
 */
function handle_check_user_permission($post_id)
{
    return current_user_can('edit_post', $post_id);
}

/* 
 * Handle For Form Submission
 */
function handle_form_submission($request)
{
    $params = $request->get_json_params();

    $required_fields = ['name', 'email', 'message'];

    foreach ($required_fields as $field) {
        if (!isset($params[$field])) {
            return new WP_Error('missing_fields', __('Missing fields', 'wp-form-manager-api'), ['status' => 422]);
        }
    }

    $name    = sanitize_text_field($params['name']);
    $email   = sanitize_email($params['email']);
    $message = sanitize_textarea_field($params['message']);

    if (!is_email($email)) {
        return new WP_Error('invalid_email', __('Invalid email', 'wp-form-manager-api'), ['status' => 422]);
    }

    $existing_post = get_posts([
        'post_type'  => 'wp_api_manager_form',
        'meta_query' => [
            [
                'key'     => '_form_email',
                'value'   => $email,
                'compare' => '='
            ],
            [
                'key'     => '_form_submission_time',
                'value'   => strtotime('-1 hour'),
                'compare' => '>'
            ]
        ]
    ]);

    if ($existing_post) {
        return new WP_Error('duplicate_submission', __('Duplicate submission', 'wp-form-manager-api'), ['status' => 429]);
    }

    $post_id = wp_insert_post([
        'post_title'  => $name,
        'post_type'   => 'wp_api_manager_form',
        'post_status' => 'publish',
    ]);

    if (is_wp_error($post_id)) {
        return $post_id;
    }

    update_post_meta($post_id, '_form_email', $email);
    update_post_meta($post_id, '_form_message', $message);
    update_post_meta($post_id, '_form_submission_time', current_time('timestamp'));

    return new WP_REST_Response(['success' => true], 200);
}

function load_custom_template($template) {
	global $post;

	if ($post->post_type == 'wp_api_manager_form' && locate_template(array('single-wp_api_manager_form.php')) !== $template) {
		 // Check if the template file exists in the plugin directory
		 $plugin_template = plugin_dir_path(__FILE__) . '../templates/single-wp_api_manager_form.php';
		 if (file_exists($plugin_template)) {
			  return $plugin_template;
		 }
	}

	return $template;
}
add_filter('template_include', 'load_custom_template');