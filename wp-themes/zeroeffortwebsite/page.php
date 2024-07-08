<?php get_header(); ?>


<main>
   <?php
   $blocks = get_field('template_blocks');
   set_query_var('blocks', $blocks);
   get_template_part('parts/flexible-blocks');
   ?>
</main>


<?php get_footer();
