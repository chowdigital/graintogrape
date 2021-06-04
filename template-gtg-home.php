<?php /* Template Name: Gtg Home*/ get_header(); ?>

<!-- Full Page Intro -->

<div class="view full-page-intro z-depth-3">

<div class="view full-page-intro" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/g2g_01.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
 
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
<!-- Block 1 >> -->
<div class="container">
    <div class="pt-6 pb-6 z-depth-3">
      <div class="row">
        <div class="image-box-1 col-12 col-lg-6 z-depth-3" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/g2g_01.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
        
        </div>
        <div class="content-box-1 col-12 col-lg-6 d-flex flex-column justify-content-center">

        <header class="entry-header">
                <?php the_title( '<h2>', '</h2>' ); ?>
        </header><!-- .entry-header -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
            endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
            <a href="at-home"><button type="button" class="btn btn-primary waves-effect waves-light">find out more</button></a>

        </div>
      </div>
    </div>
  </div>
<!-- << Block 1 -->
<!-- Block 2 >> -->
  <div class="pt-6 pb-6 content-box-2">
    <div class="container pt-5 pb-5">
      <div class="row">
      <header class="entry-header">
             <h2>So here's the problem...</h2>
        </header><!-- .entry-header -->
        <!--  section  -->
        <section class="col-10 offset-1 col-md-4 offset-md-0">
          <img class="p-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/decline.svg"  alt="Grain to Grape Logo" loading="lazy"/>
          <div>
            <h2 class="mt-5 mb-3 font-weight-bold">
              Wine consumption is in decline
            </h2>
              <p>
                You’ve probably heard of the drinking less but drinking better trend, right? Well it’s true, pre Covid-19 saw a year-on-year decline amongst guests visiting the on-trade. Guests are drinking less but with the right approach from your team they will drink better 
              </p>
          </div>   
        </section>
         <!--  section  -->
         <section class="col-10 offset-1 col-md-4 offset-md-0">
          <img class="p-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/Enhancing.svg"  alt="Grain to Grape Logo" loading="lazy"/>
          <div>
            <h2 class="mt-5 mb-3 font-weight-bold">
            Re-training
            </h2>
              <p>
              Re-training your team & training a new generation of hospitality staff post-pandemic and Brexit.
            </p>
          </div>   
        </section>
         <!--  section  -->
         <section class="col-10 offset-1 col-md-4 offset-md-0">
          <img class="p-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/Tracking.svg"  alt="Grain to Grape Logo" loading="lazy"/>
          <div>
            <h2 class="mt-5 mb-3 font-weight-bold">
            Tracking your training
            </h2>
              <p>
              Ensuring progress and retention and keeping the educational relationship going between your customers and your producers.               </p>
          </div>   
        </section>

         <!--  section  -->
         
      </div>
    </div>
  </div>
<!-- << Block 2 -->
<!-- Block 3 >> -->
<div class="container">
<div class="pt-6 pb-6 z-depth-3">
    <div class="row">
      <div class="image-box-3 col-12 col-lg-6 z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
      
      </div>
      <div class="content-box-3 col-12 col-lg-6 d-flex flex-column justify-content-center">

      <header class="entry-header">
	          	<?php the_title( '<h2>', '</h2>' ); ?>
	    </header><!-- .entry-header -->
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
          <a href="at-home"><button type="button" class="btn btn-primary waves-effect waves-light">find out more</button></a>

      </div>
    </div>
  </div>
          </div>
<!-- << Block 3 -->
<!-- Block 4 >> -->
<div class="container">
<div class="pt-6 pb-6 z-depth-3">
    <div class="row">
      <div class="image-box-1 col-12 col-lg-6 z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
      
      </div>
      <div class="content-box-1 col-12 col-lg-6 d-flex flex-column justify-content-center">

      <header class="entry-header">
	          	<?php the_title( '<h2>', '</h2>' ); ?>
	    </header><!-- .entry-header -->
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
          <a href="at-home"><button type="button" class="btn btn-primary waves-effect waves-light">find out more</button></a>

      </div>
    </div>
  </div>
          </div>
<!-- << Block 4 -->
<!-- Block 5 >> -->
<div class="container">
<div class="pt-6 pb-6 z-depth-3">
    <div class="row">
      <div class="image-box-1 col-12 col-lg-6 z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
      
      </div>
      <div class="content-box-1 col-12 col-lg-6 d-flex flex-column justify-content-center">

      <header class="entry-header">
	          	<?php the_title( '<h2>', '</h2>' ); ?>
	    </header><!-- .entry-header -->
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
          <a href="at-home"><button type="button" class="btn btn-primary waves-effect waves-light">find out more</button></a>

      </div>
    </div>
  </div>
          </div>
<!-- << Block 5 -->
</main><!-- #main -->


<?php

get_footer();
