<?php /* Template Name: ACF Home*/ get_header(); ?>


<!-- Full Page Intro -->
<!-- Full Page Intro -->

<div class="view full-page-intro z-depth-3">

<div class="view full-page-intro" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
 
		 </div>
<!-- Mask & flexbox options-->

<div class="mask d-flex justify-content-center align-items-center">

  <!-- Content -->
  <div class="container">

    <!--Grid row-->
    <div class="col-8 offset-2 col-lg-6 offset-lg-3">
 
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gtg_logo_onDark.svg" alt="Grain To Grape Logo">
  <h1 class="header-text">Creating Wine Legends</h1>
      
    </div>
    <!--Grid row-->

  </div>
  <!-- Content -->

  

</div>
<!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro --> 






<main>
	 <!-- Side Modal Top Right -->

<div class="modal fade right" id="sideModalTR" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Add class .modal-side and then add class .modal-top-right (or other classes from list above) to set a position to the modal -->
  <div class="modal-dialog modal-side modal-bottom-right" role="document">


    <div class="modal-content">
     
      <div class="modal-body">
      <?php echo do_shortcode("[stu alias='popup_home']"); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Side Modal Top Right -->
<!-- Block 1 >> -->
<div class="container">
    <div class="pt-6 pb-6">
      <div class="row">
        <div class="image-box-1 col-12 col-lg-6 z-depth-2 right-box-wonky" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/g2g_02.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
        
        </div>
        <div class="content-box-1 col-12 col-lg-6 d-flex flex-column justify-content-center z-depth-2 left-box-wonky">

        <header class="entry-header">
                <?php the_title( '<h2>', '</h2>' ); ?>
        </header><!-- .entry-header -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
            endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
            <a href="lets-talk"><button type="button" class="btn btn-primary waves-effect waves-light">Let's Talk</button></a>

        </div>
      </div>
    </div>
  </div>
<!-- << Block 1 -->
<!-- Block 2 >> -->
<div class="pt-5 triangle-top"></div>
  <div class="content-box-2">
    <div class="container pt-5 pb-5">
      <div class="row">
      <header class="entry-header text-center">
             <h2 class="display-3">So here's the problem...</h2>
        </header><!-- .entry-header -->
        <!--  section  -->
        <section class="col-10 offset-1 col-md-4 offset-md-0">
		
 <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url(<?php the_field('p_1_img'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
          <div>
                <?php the_field('p_1_copy'); ?>
          </div>   
        </section>
        <!--  section  -->
        <section class="col-10 offset-1 col-md-4 offset-md-0">
		
 <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url(<?php the_field('p_2_img'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
          <div>
                <?php the_field('p_2_copy'); ?>
          </div>   
        </section>
         <!--  section  -->
		   <!--  section  -->
        <section class="col-10 offset-1 col-md-4 offset-md-0">
		
 <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url(<?php the_field('p_3_img'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
          <div>
                <?php the_field('p_3_copy'); ?>
          </div>   
        </section>
         <!--  section  -->
         
      </div>
    </div>
  </div>
  <div class="pt-5 triangle-bottom"></div>

<!-- << Block 2 -->
<!-- Block 3 >> -->
<div class="container">
<div class="pt-6 pb-6">
    <div class="row">
    <div class="image-box-1 col-12 col-lg-6 z-depth-2 right-box-wonky" style="background-image: url('<?php the_field('purple_img'); ?>'); background-repeat: no-repeat; background-position: center; background-size: cover;">
      
      </div>
      <div class="content-box-3 col-12 col-lg-6 d-flex flex-column justify-content-center z-depth-2 left-box-wonky">
      <?php the_field('purple_copy'); ?>
      
          <a href="lets-talk"><button type="button" class="btn btn-primary waves-effect waves-light">Let's Talk</button></a>

      </div>
    </div>
  </div>
          </div>
<!-- << Block 3 -->
<!-- Block 4 >> -->
<div class="pt-6 pb-6">
    <div class="container pt-5 pb-5">
      <div class="row content-box-5">
      <header class="entry-header text-center">
             <h2 class="display-5">Here’s what other legends said…</h2>
        </header><!-- .entry-header -->
        <!--  section  -->
        <section class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 offset-md-0  col-lg-2 ">
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url(<?php the_field('q_1_img'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
          <i class="text-primary fas fa-quote-left fa-2x mb-3"></i>
          <?php the_field('q_1_copy'); ?>

          </div>   
        </section>
        
        <!--  section  -->  
        <section class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 offset-md-0  col-lg-2 ">
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url(<?php the_field('q_2_img'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
          <i class="text-primary fas fa-quote-left fa-2x mb-3"></i>
          <?php the_field('q_2_copy'); ?>

          </div>   
        </section>
        
        <!--  section  -->  
        <section class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 offset-md-0  col-lg-2 ">
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url(<?php the_field('q_3_img'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
          <i class="text-primary fas fa-quote-left fa-2x mb-3"></i>
          <?php the_field('q_3_copy'); ?>

          </div>   
        </section>
        
        <!--  section  -->  
        <section class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 offset-md-0  col-lg-2 ">
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url(<?php the_field('q_4_img'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
          <i class="text-primary fas fa-quote-left fa-2x mb-3"></i>
          <?php the_field('q_4_copy'); ?>

          </div>   
        </section>
        
        <!--  section  -->  
        <section class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 offset-md-0  col-lg-2 ">
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url(<?php the_field('q_5_img'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
          <i class="text-primary fas fa-quote-left fa-2x mb-3"></i>
          <?php the_field('q_5_copy'); ?>

          </div>   
        </section>
        
        <!--  section  -->  
        <section class="col-10 offset-1 offset-sm-0 col-sm-6 col-md-4 offset-md-0  col-lg-2 ">
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url(<?php the_field('q_6_img'); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
          <i class="text-primary fas fa-quote-left fa-2x mb-3"></i>
          <?php the_field('q_6_copy'); ?>

          </div>   
        </section>
        
        <!--  section  -->  
      </div>
    </div>
  </div>
<!-- << Block 4 -->
<!-- Block 5 >> -->
<div class="container">
  <div class="pt-6 pb-6">
   
  <!--Grid row-->
  <div class="row wow fadeIn content-box-5">
      <header class="entry-header text-center">
             <h2 class="display-5">What we do</h2>
        </header><!-- .entry-header -->
        

        <!-- E LEARN --> 
        <div class="col-6 col-md-4 col-lg-2 d-flex flex-column">
        
     
        <!--Featured image-->
      
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/icon/modern.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">
        </div>

        <div>
       <h2 class="mb-3 font-weight-bold">
          E-learning
        </h2>
      
      
        </div>
        <div class="mt-auto">
       
        </div>
        
        <a href="https://graintogrape.co.uk/e-learning/"><button type="button" class="btn btn-primary">Find out More </button></a>
    </div>
    <!--Grid column-->
        <!-- E LEARN --> 

        
    <?php
    // The Query
    $the_query = new WP_Query( 'cat=2&posts_per_page=6' );
    //posts_per_page=5'


    // The Loop
        if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $category = get_the_category(); 
            ?>		


        <!--Grid column-->
     
        <div class="col-6 col-md-4 col-lg-2 d-flex flex-column">
        
     
            <!--Featured image-->
          
            <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>

            <div>
           <h2 class="mb-3 font-weight-bold">
              <?php the_title(); ?> 
            </h2>
          
          
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
</div>
<!-- << Block 5 -->
</main><!-- #main -->


<?php

get_footer();
