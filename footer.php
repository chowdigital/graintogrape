<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress-bootstrap-starter-theme
 */

?>



<!-- Footer -->
<footer class="page-footer font-small dark-background">

<div class="container">
  <div class="row">
  <div class="col-md-6">

  <h3 class="sign-up">Sign up for news, exclusive events & special offers</h3>

  <!-- Begin Mailchimp Signup Form -->
  <div id="mc_embed_signup">
    <form action="https://grapetimes.us16.list-manage.com/subscribe/post?u=de2d2aef3b3b355b984de3655&amp;id=23c44a1538" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
      <div id="mc_embed_signup_scroll">
              <div class="row">
                    <div class="md-form mb-0">
                  
                  <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
                  <label for="mce-EMAIL" class="mdbInput fc-wide">Email <span class="asterisk">*</span></label>
                  </div>
                </div>
                  <div class="row">
                    <div class="col-md-6">
                          <div class="md-form mb-0">
                                <input type="text" value="" name="FNAME" class="required form-control" id="mce-FNAME">
                                <label for="mce-FNAME" class="mdbInput">First Name  <span class="asterisk">*</span></label>
                            
                        </div>
                    </div>
                  
                    <div class="col-md-6">
                          <div class="md-form mb-0">
                        
                          <input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME">
                          <label for="mce-LNAME"  class="mdbInput">Last Name </label>
                        </div>
                    </div>
                  </div>




                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_de2d2aef3b3b355b984de3655_23c44a1538" tabindex="-1" value="">
                    </div>
                  <div class="clear mt-3">
                      <h5> <input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="button ">
                    </h5>
                  </div>
      </div>
    </form>
  </div>

      <!--End mc_embed_signup-->


      </div>
      <div class="col-md-6">
      <!-- Grid row info -->
      <div class="col-sm-10 offset-1 col-md-10 offset-md-2">

  
  

   

    
    
    <div class="row">
        <div class="mr-5 mb-3 pr-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gtg_logo_white.svg" class="img-fluid" alt="Grain to Grape" >
        </div>
    </div>
        <div class="row mb-3">
                     <div class="col-1 text-center"> <a href="https://www.instagram.com/graintogrape/?hl=en" class="greenHover"><i class="fab fa-instagram fa-2x"></i></a></div>
                     <div class="offset-1 col-1 text-center"> <a href="https://www.facebook.com/graintogrape" class="greenHover"><i class="fab fa-facebook-square fa-2x"></i> </a></div>
                     <div class="offset-1 col-1 text-center"> <a href="https://twitter.com/graintogrape" class="greenHover"><i class="fab fa-twitter fa-2x"></i></i></a></div>
                     <div class="offset-1 col-1 text-center"> <a href="https://www.linkedin.com/in/harryjcrowther" class="greenHover"><i class="fab fa-linkedin-in fa-2x"></i></a></div>

         </div>
         <div class="row">
              <div class="col-1 text-center"><i class="fa fa-phone fa-lg"></i></div>
              <div class="offset-1 col-10"><p> xxx xxxx xxx</p></div>
          </div>
           <div class="row">
                     <div class="col-1 text-center"><i class="fa fa-envelope fa-lg"></i></div>
                     <div class="offset-1 col-10"> xxxx@graintogrape.co.uk</p></div>
           </div>
                 
                  
                   <div class="row mt-5">
                     <div class="col-1 text-center"> <i class="fas fa-copyright fa-lg"></i></div>
                     <div class="offset-1 col-10">  <p>COPYRIGHT GRAIN TO GRAPE 2021</p></div>
                   </div>
                  
  

                   </div>
    </div>
    </div>
    <!-- Grid row info -->

    </div>

     <!-- Cloudsdale -->
     <div class="mt-5 text-center py-3 black-background"> 
    <a href="https://cloudsdale.co.uk/">   <img src="https://cloudsdale.co.uk/wp-content/themes/Cloudsdale_2.0/assets/img/cloudsdale_logo.svg" alt="Cloudsdale" style="height:20px">
</a>
  </div>

  <!-- Cloudsdale -->
</footer>

     

<?php wp_footer(); ?>

</body>
</html>
