<?php get_header(); ?>

<div class="jumbo-dark stretchy-text">
    <h4>Contact us to get started on your project!</h4>
</div>
<div class="form-container">
  <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
</div>

<?php get_footer(); ?>