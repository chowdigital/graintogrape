<?php /* Template Name: Gtg Home*/ get_header(); ?>

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
<!-- Block 1 >> -->
<div class="container">
    <div class="pt-6 pb-6 z-depth-3">
      <div class="row">
        <div class="image-box-1 col-12 col-lg-6" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/g2g_02.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
        
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
            <a href="lets-talk"><button type="button" class="btn btn-primary waves-effect waves-light">Let's Talk</button></a>

        </div>
      </div>
    </div>
  </div>
<!-- << Block 1 -->
<!-- Block 2 >> -->
  <div class="pt-6 pb-6 content-box-2 z-depth-3">
    <div class="container pt-5 pb-5">
      <div class="row">
      <header class="entry-header text-center">
             <h2 class="display-3">So here's the problem...</h2>
        </header><!-- .entry-header -->
        <!--  section  -->
        <section class="col-10 offset-1 col-md-4 offset-md-0">
          <img class="pr-5" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/decline.svg"  alt="Grain to Grape Logo" loading="lazy"/>
          <div>
            <h3 class="mt-5 mb-3 font-weight-bold">
              Wine consumption is in decline
            </h3>
              <p>
                You’ve probably heard of the drinking less but drinking better trend, right? Well it’s true, pre Covid-19 saw a year-on-year decline amongst guests visiting the on-trade. Guests are drinking less but with the right approach from your team they will drink better 
              </p>
          </div>   
        </section>
         <!--  section  -->
         <section class="col-10 offset-1 col-md-4 offset-md-0">
          <img class="pr-5" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/Enhancing.svg"  alt="Grain to Grape Logo" loading="lazy"/>
          <div>
            <h3 class="mt-5 mb-3 font-weight-bold">
            Re-training
            </h3>
              <p>
              Re-training your team & training a new generation of hospitality staff post-pandemic and Brexit.
            </p>
          </div>   
        </section>
         <!--  section  -->
         <section class="col-10 offset-1 col-md-4 offset-md-0">
          <img class="pr-5" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/Tracking.svg"  alt="Grain to Grape Logo" loading="lazy"/>
          <div>
            <h3 class="mt-5 mb-3 font-weight-bold">
            Tracking your training
            </h3>
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
    <div class="image-box-1 col-12 col-lg-6" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/g2g_03.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
      
      </div>
      <div class="content-box-3 col-12 col-lg-6 d-flex flex-column justify-content-center">

      <header class="entry-header">
      <h2>Confidence beats knowledge: getting your best wines on to the table</h2>
	    </header><!-- .entry-header -->
         <p>Wine training is information overload for your team.  </p>
         <p>People buy from people and confidence beats knowledge when it comes to serving wine. </p>
         <p>We want to make sure that your team is confident, knowledgeable and engaging when it comes to getting your best wines on to the table. </p>
         <p>Our e-learning solution will make your team ‘wine confident’, after that, it’s all about becoming a legend and enhancing the guest experience. </p>
         <p>No more red trousers & tweed please. This is real training for real people</p>
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
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/other_logo1.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
          <i class="text-primary fas fa-quote-left fa-2x mb-3"></i>
              <p>
              Harry’s approach is first class- engaging with fantastic ongoing support. Our teams learnt how to recommend & sell our premium wines whilst meeting guest expectations. We have already started to see some impressive results. I highly recommend Grain to Grape”</p>
           
              <i>- David Booth, Head of Operations, Tapas Revolution</i>
          </div>   
        </section>
        <!--  section  -->
        <section class="col-10 offset-1 offset-sm-0 col-sm-6  col-md-4 offset-md-0 col-lg-2 ">
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/other_logo2.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div> 
        <div>
          <i class="text-primary fas fa-quote-left fa-2x mb-3"></i>
              <p>
              Harry’s methods ensured that we saw growth in average spend in a declining market by leveraging the engagement of the people that really matter- the teams
</p>
           
              <i>- Simon Potts, Managing Director, The Alchemist</i>
          </div>   
        </section>
        <!--  section  -->
        <section class="col-10 offset-1 offset-sm-0 col-sm-6  col-md-4 offset-md-0 col-lg-2 ">
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/other_logo3.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>        
            <div>
          <i class="text-primary fas fa-quote-left fa-2x mb-3"></i>
              <p>
              Harry has been recognised not only for his excellent communication, but for his groundbreaking Grain to Grape project</p>           
              <i>- Martin Williams, CEO, Gaucho & M Restuarants</i>
          </div>   
        </section>
        <!--  section  -->
        <section class="col-10 offset-1 offset-sm-0 col-sm-6  col-md-4 offset-md-0 col-lg-2 ">
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/other_logo4.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>       
             <div>
          <i class="text-primary fas fa-quote-left fa-2x mb-3"></i>
              <p>
              Harry’s relaxed, engaging approach to wine training is unlike anyone else in the trade. He not only gives staff the knowledge they need, but the confidence to talk about wine to guests. Most importantly he has put the team in a position to upsell our best wines to customers & maximise guest experience</p>
           
              <i>- Jason Myers, Co-Founder of Red Lion Holdings, Splendid Management Services, Above & Beyond Hospitality</i>
          </div>    
        </section>
        <!--  section  -->
        <section class="col-10 offset-1 offset-sm-0 col-sm-6  col-md-4 offset-md-0 col-lg-2 ">
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/other_logo5.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>         
            <div>
          <i class="text-primary fas fa-quote-left fa-2x mb-3"></i>
              <p>
              Often people don’t know where to start when it comes to the world of wine. It can be overwhelming, however Harry is so great at breaking down the basics and making wine accessible to all. He has great knowledge and I’ve really enjoyed working with him on various projects</p>           
              <i>- Ethan Boroian, Champagne Ambassador, Moet Hennessy</i>
          </div>    
        </section>
        <!--  section  -->   
          <!--  section  -->
          <section class="col-10 offset-1 offset-sm-0 col-sm-6  col-md-4 offset-md-0 col-lg-2 ">
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/other_logo6.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>         
            <div>
          <i class="text-primary fas fa-quote-left fa-2x mb-3"></i>
              <p>
              Grain to Grape is Harry’s brainchild. Simple, yet very much needed. It’s perfectly crafted & delivered with his signature enthusiasm & true desire to educate”
            </p>
              <i>- Chris Dennis, Beverage Director, Heads + Tails, Consultant</i>
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
  <div class="row wow fadeIn gx-5 content-box-5">
      <header class="entry-header text-center">
             <h2 class="display-5">What we do</h2>
        </header><!-- .entry-header -->
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
