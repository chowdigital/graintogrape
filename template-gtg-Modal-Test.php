<?php /* Template Name: Modal Test */ get_header(); ?>




  <main id="primary" class="site-main container  pt-6 pb-6">

  <!-- Side Modal Top Right -->

<!-- Button trigger modal
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#sideModalTR">
  Launch demo modal
</button> -->

<!-- To change the direction of the modal animation change .right class -->
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
</main>

<?php get_footer(); ?>
