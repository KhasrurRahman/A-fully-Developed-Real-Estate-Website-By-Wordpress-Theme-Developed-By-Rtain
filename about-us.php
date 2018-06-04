<?php 
/*
Template Name: aboutus
*/
get_header(); ?>
<div class="clearfix">
</div>
<div class="sub-banner">
  <div class="overlay">
    <div class="container">
      <div class="breadcrumb-area">
        <div class="top">
          <h4>ABOUT US
          </h4>
        </div>
        <ul class="breadcrumbs">
          <li>Home
          </li>
          <li class="active">About Us
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<section class="about-us margin-top-30">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6">
        <div class="profile wow fadeInRight delay-07s" style="visibility: visible; animation-name: fadeInRight;">
          <h3>
            <span>About Us
            </span>
          </h3>
          <p style="font-size: 18px;">
            <?php echo cs_get_option( 'text_5' ); ?>
          </p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6">
        <div class="profile-img wow fadeInRight delay-07s" style="visibility: visible; animation-name: fadeInRight;">
          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/abouts.jpg">
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
<?php get_footer(); ?>
