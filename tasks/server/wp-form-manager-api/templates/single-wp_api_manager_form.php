<?php
/* Template for displaying single wp_api_manager_form posts */

get_header();

if (have_posts()) :
   while (have_posts()) :
      the_post(); ?>
      <main id="content" <?php post_class( 'site-main' ); ?>>
         <div class="post">
               <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            <div class="page-content">
               <?php the_content(); ?>

               <?php
               // Fetch and display the custom meta fields
               $email   = get_post_meta(get_the_ID(), '_form_email', true);
               $message = get_post_meta(get_the_ID(), '_form_message', true);

               if (!empty($email)) :
               ?>
                  <p><strong>Email:</strong> <?php echo esc_html($email); ?></p>
               <?php endif; ?>

               <?php if (!empty($message)) : ?>
                  <p><strong>Message:</strong></p>
                  <p><?php echo nl2br(esc_html($message)); ?></p>
               <?php endif; ?>
            </div>
         </div>
      </main>
   <?php
   endwhile;
else :
   echo '<p>No content found</p>';
endif;

get_footer();
