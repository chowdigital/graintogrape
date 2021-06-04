<?php /* Template Name: Services*/ get_header(); ?>
<div class="page-img-header d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

  <div class="mask gradient-custom" style="width: 100%; height: 100%;">

    </div>
  </div>



  <main id="primary" class="site-main container  pt-6 pb-6">
  <div class="z-depth-3">
  <div class="menu-content-box col-12">

  <header class="entry-header">
  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
  <!--Grid row-->
  <div class="row wow fadeIn gx-5">
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
     
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex flex-column">
        <a href="<?php echo get_permalink() ?>">
     
            <!--Featured image-->
          
            <div class="view overlay hm-white-slight rounded mb-4 thumb-wrapper square-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
            </div>

            <div>
           <h2 class="mb-3 font-weight-bold">
              <?php the_title(); ?> 
            </h2>
          
          
            <p class="grey-text"><?php the_excerpt(); ?></p>
            </div>
            <div class="mt-auto">
           
            </div>
            </a>
            <a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-light">Find out More </button></a>
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
</main>

<?php get_footer(); ?>