<?php /* Template Name: Pagination*/ get_header(); ?>
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

			get_template_part( 'template-parts/content', get_post_type() );

			

			

		endwhile; // End of the loop.
		?>

 
 
  <!--Grid row-->
  <div class="row wow fadeIn">
  <!--- my loop with Pagenation -->
  <?php 
  //get the current page
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  //pagination fixes prior to loop
  $temp =  $query;
  $query = null;

  //custom loop using WP_Query
  $query = new WP_Query( array( 
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC' 
  ) ); 

 //set our query's pagination to $paged
 $query -> query('cat=1&posts_per_page=24'.'&paged='.$paged);
 
 if ( $query->have_posts() ) : 
   while ( $query->have_posts() ) : $query->the_post();
    ?>
        
        <!--Grid column-->
     
        <div class="col-lg-3 col-md-6 col-sm-12 mb-5 d-flex flex-column">
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
           
            <a href="<?php echo get_permalink() ?>"><button type="button" class="btn btn-primary">Read More </button></a>
        </div>
        <!--Grid column-->
  <?php endwhile;?>

  <?php //pass in the max_num_pages, which is total pages ?>
  <div class="pagenav">
    <div class="alignleft"><?php previous_posts_link('Previous', $query->max_num_pages) ?></div>
    <div class="alignright"><?php next_posts_link('Next', $query->max_num_pages) ?></div>
  </div>

<?php endif; ?>

<?php //reset the following that was set above prior to loop
$query = null; $query = $temp; ?>
<!--- my loop with Pagenationend  -->

   </div>
   <div class="call-to-action text-center">
  <a href="../lets-talk/"><button type="button" class="btn btn-primary">Let's Talk</button></a>
  </div>
</main>

<?php get_footer(); ?>