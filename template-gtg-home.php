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






<main class="container">
<!-- Block 1 >> -->

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
<!-- << Block 1 -->
<!-- Block 2 >> -->
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
<!-- << Block 2 -->
<!-- Block 3 >> -->
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
<!-- << Block 3 -->
<!-- Block 4 >> -->
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
<!-- << Block 4 -->
<!-- Block 5 >> -->
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
<!-- << Block 5 -->
</main><!-- #main -->


<?php

get_footer();
