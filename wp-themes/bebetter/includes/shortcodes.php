<?php

add_shortcode('CURRENT_YEAR', 'shortcode_current_year_output');
function shortcode_current_year_output() {
	ob_start();
	echo date('Y');
	return ob_get_clean();
}
