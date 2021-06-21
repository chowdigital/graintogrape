<?php /* Template Name: ACF About*/ get_header(); ?>

<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
<div class="mask gradient-custom" style="width: 100%; height: 100%;">

  </div>
</div>


<main id="primary" class="site-main container  pt-6 pb-6">

<div class="z-depth-3">
<div class="default-content-box col-12 overlap-cover"> 


<header class="entry-header">
<h1>VALUES<h1>
  </header><!-- .entry-header -->

  <!-- Block 7 >> -->
<div class="pt-6 pb-6">
    <div class="container pt-5 pb-5">
      <div class="row content-box-7">
  
        <!--  section  -->
        <section class="col-10 offset-1 offset-sm-0 col-sm-6 col-lg-3">
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url(<?php the_field('v1_img'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
          <?php the_field('v1_copy'); ?>

          </div>   
        </section>
        <!--  section  -->
        <section class="col-10 offset-1 offset-sm-0 col-sm-6 col-lg-3">
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url(<?php the_field('v2_img'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
          <?php the_field('v2_copy'); ?>

          </div>   
        </section>
        <!--  section  -->
        <section class="col-10 offset-1 offset-sm-0 col-sm-6 col-lg-3">
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url(<?php the_field('v3_img'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
          <?php the_field('v3_copy'); ?>

          </div>   
        </section>
        <!--  section  -->
        <section class="col-10 offset-1 offset-sm-0 col-sm-6 col-lg-3">
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url(<?php the_field('v4_img'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
          <?php the_field('v4_copy'); ?>

          </div>   
        </section>
        <!--  section  -->

      </div>
    </div>
  </div>
<!-- << Block 4 -->



 

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );
			

			

		endwhile; // End of the loop.
		?>

	</div>
  <div class="call-to-action text-center">
  <a href="../lets-talk/"><button type="button" class="btn btn-primary">Let's Talk</button></a>
  </div>
	</main><!-- #main -->


<?php

get_footer();
