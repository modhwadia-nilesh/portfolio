<?php get_header(); ?>
<?php $backgroundImage = get_field('error_background_image', 'options') ? "style='background-image:url(" . get_field('error_background_image', 'options')['url'] . ")' " : ""; ?>
<section class="secondaryHeroBanner sectionPaddingTop-200 sectionPaddingBottom-200" <?php echo $backgroundImage; ?>>
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h1 class="mb-4"><?php echo get_field('error_title', 'options'); ?></h1>
            <p class="mb-4"><?php echo get_field('error_description', 'options'); ?></p>
            <div>
               <?php a_href_from_link(get_field('error_button_link', 'options'), 'button-primary'); ?>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>