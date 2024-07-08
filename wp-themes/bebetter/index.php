<?php

/**
 * The main template file
 *
 */

get_header();
?>

<?php
$blocks = get_field('template_blocks');
set_query_var('blocks', $blocks);
get_template_part('parts/flexible-blocks');
?>


<?php get_footer(); ?>