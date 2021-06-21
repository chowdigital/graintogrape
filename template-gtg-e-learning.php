<?php /* Template Name: E - Learning*/ get_header(); ?>

<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
<div class="mask gradient-custom" style="width: 100%; height: 100%;">

  </div>
</div>


<main id="primary" class="site-main container  pt-6 pb-6">

<div class="z-depth-3">
<div class="default-content-box col-12 overlap-cover"> 




 

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );
			

			

		endwhile; // End of the loop.
		?>

	


<header class="entry-header pt-5">
<h1>E-learning with a focus on…<h1>
  </header><!-- .entry-header -->

  <!-- Block 7 >> -->
<div class="pb-6">
    <div class="container pt-5 pb-5">
      <div class="row content-box-7">
  
        <!--  section  -->
        <section class="col-10 offset-1 offset-sm-0 col-sm-6 col-lg-3">
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/icon/psychology.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
     <h4>  SALES PSYCHOLOGY</h4>
              <p>Training your team on the ‘Three Stages of Upselling’. </p>
<p>Proven to increase average spend 
(circa +10% ave spend growth BTB/BTG)
</p>           
          </div>   
        </section>
        <!--  section  -->
        <section class="col-10 offset-1 offset-sm-0 col-sm-6 col-lg-3">
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/icon/profit.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
     <h4>PROFITABILITY</h4>
              <p>
              Focuses on growing your profits.</p>
<p>
Bespoke upsell strategy and cheat sheet integration to your portal.
</p>           
          </div>   
        </section>
        <!--  section  -->
        <section class="col-10 offset-1 offset-sm-0 col-sm-6 col-lg-3">
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/icon/engagement.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
     <h4>CONFIDENCE</h4>
              <p>
              Improves team wine knowledge making them ‘wine confident’ & creating legends within your business.
</p>           
          </div>   
        </section>
        <!--  section  -->
        <section class="col-10 offset-1 offset-sm-0 col-sm-6 col-lg-3">
        
        <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/icon/enhancing.png'); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>
       
          <div>
     <h4>ENHANCING</h4>
              <p>
              Motivate the team to enhance customer service by offering quality recommendations and getting your best wines on to the table.

</p>           
          </div>   
        </section>
        <!--  section  -->

      </div>
    </div>
  </div>
<!-- << Block 4 -->

  <div class="call-to-action text-center">
  <a href="../lets-talk/"><button type="button" class="btn btn-primary">Let's Talk</button></a>
  </div>
  </div>
	</main><!-- #main -->


<?php

get_footer();
