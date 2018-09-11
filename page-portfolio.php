<?php get_header();?>
<br>

<div  class="project-title">
  <h4>Projects</h4>
</div>
  <div class="project-slider">
    <div id="slide1" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/projects/richardson-university-project.png') ?>);">
      <div class="slider-element">
        <i class="fa fa-arrow-left back-project" aria-hidden="true"></i>
        <div class="project-description">
          <h5>Richardon University</h5>
          <p>A wordpress website for an imaginary university designed to extend our portfolio.</p>
        </div>
        <div class="view-link">
          <p class="view"><a href="http://scottier.sgedu.site" target="_blank">Check It Out!</a></p>
        </div>
        <i class="fa fa-arrow-right next-project" aria-hidden="true"></i>
      </div>
    </div>
    <div id="slide2" class="hidden" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/projects/scottierichardson-project.png') ?>);">
      <div class="slider-element">
        <i class="fa fa-arrow-left back-project" aria-hidden="true"></i>
        <div class="project-description">
          <h5>scottierichardson.com</h5>
          <p>The blog site of our founder!</p>
        </div>
        <div class="view-link">
          <p class="view"><a href="http://www.scottierichardson.com" target="_blank">Check It Out!</a></p>
        </div>
        <i class="fa fa-arrow-right next-project" aria-hidden="true"></i>
      </div>
    </div>
    <div id="slide3" class="hidden" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/projects/portfolio-pic-3.png') ?>);">
      <div class="slider-element">
        <i class="fa fa-arrow-left back-project" aria-hidden="true"></i>
        <div class="project-description">
          <h5>Comming Soon!</h5>
          <p>PROJECT DESCRIPTION</p>
        </div>
        <div class="view-link">
          <p class="view"><a href="#" target="_blank">Coming Soon!</a></p>
        </div>
        <i class="fa fa-arrow-right next-project" aria-hidden="true"></i>
      </div>
    </div>
    <div id="slide4" class="hidden" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/projects/portfolio-pic-4.png') ?>);">
      <div class="slider-element">
        <i class="fa fa-arrow-left back-project" aria-hidden="true"></i>
        <div class="project-description">
          <h5>Comming Soon!</h5>
          <p>PROJECT DESCRIPTION</p>
        </div>
        <div class="view-link">
          <p class="view"><a href="#" target="_blank">Coming Soon!</a></p>
        </div>
        <i class="fa fa-arrow-right next-project" aria-hidden="true"></i>
      </div>
    </div>
  </div>

  <div class="call-to-action">
    <p>Ready to get started on your new exciting project? <a href="<?php echo esc_url(home_url('/')); ?>contact"><strong>Get in touch!</strong></a></p>
  </div>
<?php get_footer(); ?>