<?php /* Template Name: About*/ get_header(); ?>

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
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/icon/bulb.svg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
     <h4>PROFITABLE</h4>
              <p>
              Wine training and consultancy that increases your average spend and has a direct impact on your bottom line.
</p>           
          </div>   
        </section>
        <!--  section  -->
        <section class="col-10 offset-1 offset-sm-0 col-sm-6 col-lg-3">
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/icon/bulb.svg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
     <h4>NURTURING</h4>
              <p>
              Learning and communication that champions guest happiness, motivates your team and creates wine legends in your business.
</p>           
          </div>   
        </section>
        <!--  section  -->
        <section class="col-10 offset-1 offset-sm-0 col-sm-6 col-lg-3">
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/icon/bulb.svg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
     <h4>ENGAGING</h4>
              <p>
              Our e-learning platform is designed with animation & gamification that instils winning mentality & adds value through interaction.
</p>           
          </div>   
        </section>
        <!--  section  -->
        <section class="col-10 offset-1 offset-sm-0 col-sm-6 col-lg-3">
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/icon/bulb.svg'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
     <h4>MODERN</h4>
              <p>
              Relevant training designed to put your team in a ‘wine confident’ state of mind, grow your average spends & increase customer happiness.
</p>           
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
	</main><!-- #main -->


<?php

get_footer();
