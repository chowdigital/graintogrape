<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Wordpress-bootstrap-starter-theme
 */

get_header();
?>



</div>

		<main id="primary" class="site-main container  pt-6 pb-6">
		<div class="post-thumb z-depth-2" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
</div>
		<div class="z-depth-3">
		
		<div class="default-content-box overlap-post">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			

			

		endwhile; // End of the loop.
		?>
			
</div>
<div class="call-to-action text-center">
  <a href="../lets-talk/"><button type="button" class="btn btn-primary">Let's Talk</button></a>
  </div>
	</div>

	</main><!-- #main -->

<?php

get_footer();
