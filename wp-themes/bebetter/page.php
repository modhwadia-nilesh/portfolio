<?php
get_header();


$blocks = get_field('template_blocks');
set_query_var('blocks', $blocks);
get_template_part('parts/flexible-blocks');


get_footer();
