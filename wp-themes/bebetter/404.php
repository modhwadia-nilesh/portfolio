<?php get_header();
$errorImage = get_field('error_image', 'options');
$errorButtonLink = get_field('error_button_link', 'options');
?>
<section class="pageNotFound padding-t-150 padding-b-50 ">
    <div class="container">
        <?php if ($errorImage) {
            echo '<img src="' . $errorImage['url'] . '" alt="' . $errorImage['alt'] . '">';
        }
        ?>
        <?php a_href_from_link($errorButtonLink, 'button-primary'); ?>
    </div>
</section>
<?php get_footer(); ?>