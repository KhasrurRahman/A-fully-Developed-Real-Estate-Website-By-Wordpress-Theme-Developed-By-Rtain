
<?php get_header(); ?>
<div class="spinner-wrapper">
  <div class="sk-folding-cube">
    <div class="sk-cube1 sk-cube">
    </div>
    <div class="sk-cube2 sk-cube">
    </div>
    <div class="sk-cube4 sk-cube">
    </div>
    <div class="sk-cube3 sk-cube">
    </div>
  </div>
  <p>Please wait ....
  </p>
</div>  
<?php include("slider.php"); ?>
<div class="wrap-catagory pdt60 pdbt60">
  <div class="container">
    <div class="row wow">
      <div class="title-head">
        <h3 class="text-center mb30 wow fadeInRight delay-07s">current feature
        </h3>
        <div class="c-line c-line-center c-line-short c-dot c-bg-yellow c-bg-after-yellow">
        </div>
      </div>
      <div class="col-sm-4 col-md-4 wow fadeInDown delay-07s">
        <a class="catagory-locations property-cat-apartments" href="/offer/" target="null">
          <div class="locations-overlay">
            <div class="locations-text">
              <h3>current offer
              </h3>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-4 col-md-4 wow fadeInDown delay-07s">
        <a class="catagory-locations property-cat-location" href="/project-location/" target="null">
          <div class="locations-overlay">
            <div class="locations-text">
              <h3>project location
              </h3>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-4 col-md-4 wow fadeInDown delay-07s">
        <a class="catagory-locations property-cat-house" href="/product/" target="null">
          <div class="locations-overlay">
            <div class="locations-text">
              <h3>Our Product
              </h3>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-4 col-md-4 wow fadeInDown delay-07s">
        <a class="catagory-locations property-cat-ruko wow fadeInUp delay-04s" href="faq.php" target="null">
          <div class="locations-overlay">
            <div class="locations-text">
              <h3>Terms and Conditions
              </h3>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-4 col-md-4 wow fadeInUp delay-07s">
        <a class="catagory-locations property-cat-notie" href="/update_notice/" target="null">
          <div class="locations-overlay">
            <div class="locations-text">
              <h3>Update Notice
              </h3>
            </div>
          </div>
        </a>
      </div>
      <div class="col-sm-4 col-md-4 wow fadeInUp delay-07s">
        <a class="catagory-locations property-cat-gallary" href="/layout/" target="null">
          <div class="locations-overlay">
            <div class="locations-text">
              <h3>Project Layout
              </h3>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="clearfix">
</div>
<div class="clearfix">
</div>
<div class="wrap-features">
  <div class="row wow">
    <div class="col-xs-12 col-sm-12 col-md-6 pull-right nopadd">
      <div class="right-redbox">
        <div class="row padd50 text-white">
          <h3 class="text-center mb30 nopadd">
            <b>Our Vision
            </b>
          </h3>
          <div class="col-xs-12 col-sm-6 col-md-6 wrap-features-listing padd20 wow fadeInRight delay-07s">
            <i class="fa fa-home fa-4x">
            </i>
            <h3>Our Profile
            </h3>
            <p>"Shapla City Ltd." has become a trusted name in the real estate sector in Bangladesh. From its very inception, the company has won the confidence & good will of its clients activities & satisfaction. Within a short span of time, Shapla City Ltd.
            </p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 wrap-features-listing padd20 wow fadeInRight delay-07s">
            <i class="fa fa-building fa-4x">
            </i>
            <h3>Our Mission
            </h3>
            <p>To work as confidence 1. To develop quality residential zone with high standard at effordable prices and achieve customer satisfaction with a vision of quality living. 2. To provide a quality real estate service for the people who desire to have secured abode with utility service.
            </p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 wrap-features-listing padd20 wow fadeInLeft delay-07s">
            <i class="fa fa-users fa-4x">
            </i>
            <h3>Why choose us
            </h3>
            <p>To work as confidence 1. To develop quality residential zone with high standard at effordable prices and achieve customer satisfaction with a vision of quality living.
            </p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 wrap-features-listing padd20 wow fadeInLeft delay-07s">
            <i class="fa fa-cogs fa-4x">
            </i>
            <h3>Contact
            </h3>
            <p>Corporate Office: Sara Tower (17th Floor), 11/A, Toyenbee Circular Road, Shapla Chattar, Motijheel C/A, Dhaka-1000 Project Office: North Manda, Ending Side of Manda Road (Opposite to Ethical Garments), Mugda,
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix">
</div>
<!--==============================================
=              Your Long Journey      =
===============================================-->
<div class="bg-default wrap-recent-property pdt40 pdbt80 wow fadeInUp delay-08s" style="background: #f3f3f3">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h3>A long Journey from 2011 to 2018
        </h3>
        <div class="recent-property owl-carousel owl-theme">
          <?php 
$groupo_sec_1 = cs_get_option('group_1');
if(is_array($groupo_sec_1)){
foreach ($groupo_sec_1 as  $group_value_1) { 
?>
          <div class="item">
            <a>
              <div class="listing-item compact">
                <div class="listing-img-container">
                  <div class="listing-img-content">
                    <span class="listing-compact-title">
                      <?php echo $group_value_1['text_1']; ?>
                    </span>
                    <ul class="listing-hidden-content">
                      <li>
                        <h1>
                          <?php echo $group_value_1['text_2']; ?>
                        </h1>
                      </li>
                    </ul>
                  </div>
                  <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/v1.jpg">
                </div>
              </div>
            </a>
          </div>
          <?php
}
}
?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix">
</div> 
<!--==============================================
=              MD message    =
===============================================-->
<div class="wrap-agent-home" style="background-color: #e3bde5">
  <div class="container">
    <div class="row wow">
      <div class="col-md-12 padd50 wow fadeInRight delay-07s">
        <div class="text-agent">
          <h2>MD message
          </h2>
        </div>
        <div class="agent-profile">
          <h3>
            <em>Md. Badroddoza
            </em>
          </h3>
        </div>
        <div class="profile-desc">
          <p>
            <?php echo cs_get_option( 'text_3' );?>
          </p>
        </div>
        <div class="info">
          <a class="faa-parent animated-hover">
            <i class="fa fa-envelope faa-passing">
            </i>shaplacityltd@gmail.com
          </a>
        </div>
      </div>
      <div class="hidden-md hidden-lg col-xs-12">
        <div class="agent-img paddt40">
          <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/businessman.png">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix">
</div>
<!--==============================================
=             What client say
===============================================-->

<div class="testimonial-section">
    <div class="paralax-overlay">
    </div>
    <div class="testimonial-content">
        <div class="container">
            <div class="row wow animated" style="visibility: visible;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInDown delay-07s" style="visibility: visible; animation-name: fadeInDown;">
                    <div class="section-title">
                        <h3 style="color: white">
                           What 
                            
                                Client Says
                            
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-push-2 col-md-8 wow fadeInUp delay-07s" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="carousel slide" data-ride="carousel" id="indecator">
                        <ol class="carousel-indicators">
                            <li class="" data-slide-to="0" data-target="#indecator">
                            </li>
                            <li class="" data-slide-to="1" data-target="#indecator">
                            </li>
                            <li class="active" data-slide-to="2" data-target="#indecator">
                            </li>
                        </ol>
                        <div class="carousel-inner full_display" role="listbox">
                             <?php 
                $groupo_sec_1 = cs_get_option('group_12');
                if(is_array($groupo_sec_1)){
                foreach ($groupo_sec_1 as  $group_value_1) { 

?>
    
                            <div class="item sngl-testimonial">
                                <div class="sngle-tsmt">
                                    <div class="client-dsc">
                                        <p style="color: white">
                                           <?php echo $group_value_1['text_38']; ?>
                                        </p>
                                    </div>
                                    <img alt="" src="<?php  echo wp_get_attachment_image_src($group_value_1['text_37'],'full')[0]; ?>">
                                        <div class="client-dsc">
                                            <h2 style="color: white">
                                                <?php echo $group_value_1['text_36']; ?>
                                            </h2>
                                            <h6>
                                               <?php echo $group_value_1['text_50']; ?>
                                            </h6>
                                        </div>
                                </div>
                            </div>
 <?php
                        }
                         }

                 ?>

                            <div class="item sngl-testimonial active">
                                <div class="sngle-tsmt">
                                    <div class="client-dsc">
                                        <p style="color: white">
                                            Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec.Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec ac nec.
                                        </p>
                                    </div>
                                    <img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-06.jpg">
                                        <div class="client-dsc">
                                            <h2 style="color: white">
                                                Alexandar
                                            </h2>
                                            <h6>
                                                Managing Director
                                            </h6>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <a class="left left_twit_crousel_btn" data-slide="prev" href="#indecator" role="button">
                            <i class="fa fa-angle-left">
                            </i>
                            <span class="sr-only">
                                Previous
                            </span>
                        </a>
                        <a class="right right_twit_crousel_btn" data-slide="next" href="#indecator" role="button">
                            <i class="fa fa-angle-right">
                            </i>
                            <span class="sr-only">
                                Next
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        </div>
    </div>
</div>



<!--==============================================
=              Our Approval               =
===============================================-->
<section class="clients pdt60 pdbt80 wow fadeInUp delay-08s">
  <div class="container">
    <div class="row">
      <h4 class="title mb30">Our Approval
      </h4>
      <div class="clients-slider owl-carousel owl-theme">
        <?php 
$groupo_sec_1 = cs_get_option('group_2');
if(is_array($groupo_sec_1)){
foreach ($groupo_sec_1 as  $group_value_1) { 
?>
        <div class="client item">
          <img alt="" src="<?php  echo wp_get_attachment_image_src($group_value_1['text_4'],'full')[0]; ?>">
        </div>
        <?php
}
}
?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>


​

