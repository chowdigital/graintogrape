<?php /* Template Name: ACF - Services*/ get_header(); ?>
<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

  <div class="mask gradient-custom" style="width: 100%; height: 100%;">

    </div>
  </div>




  <main id="primary" class="site-main container  pt-6 pb-6">
  <div class="z-depth-3">
  <div class="default-content-box col-12  overlap-cover"> 
  

  <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );
			

			

		endwhile; // End of the loop.
		?>


  <!--Grid row-->
  <div class="row wow fadeIn gx-5 col-lg-10 offset-lg-1 pt-5">
  <!-- e learning -->
  
  <div class="col-lg-4 col-md-6 col-sm-12 mb-5 d-flex flex-column">
        <a href="https://graintogrape.co.uk/e-learning/">
     
            <!--Featured image-->
          
            <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url(<?php the_field('e_img'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>

            <div>
           <h2 class="mb-3 font-weight-bold text-primary">
           E-Learning
            </h2>
       
          </a>
          
            <p class="grey-text"><?php the_field('e_copy'); ?></p>
            </div>
            <div class="mt-auto">
           
            </div>
           
            <a href="https://graintogrape.co.uk/e-learning/"><button type="button" class="btn btn-primary">Find out More </button></a>
        </div>
  <!-- e learning -->
    <?php
    // The Query
    $the_query = new WP_Query( 'cat=2&posts_per_page=24' );
    //posts_per_page=5'


    // The Loop
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $category = get_the_category(); 
            ?>		


        <!--Grid column-->
     
        <div class="col-lg-4 col-md-6 col-sm-12 mb-5 d-flex flex-column">
        <a href="<?php echo get_permalink() ?>">
     
            <!--Featured image-->
          
            <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>

            <div>
           <h2 class="mb-3 font-weight-bold text-primary">
              <?php the_title(); ?> 
            </h2>
       
          </a>
          
            <p class="grey-text"><?php the_excerpt(); ?></p>
            </div>
            <div class="mt-auto">
           
            </div>
           
            <a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-primary">Find out More </button></a>
        </div>
        <!--Grid column-->

      <?php
      
      $counter++;
      } // end while
      } // end if
      wp_reset_postdata(); 
      ?>
     </div>
    <!--Grid row-->

    </div>
    <div class="call-to-action text-center">
  <a href="../lets-talk/"><button type="button" class="btn btn-primary">Let's Talk</button></a>
  </div>
    </div>
  
</main>

<?php get_footer(); ?>