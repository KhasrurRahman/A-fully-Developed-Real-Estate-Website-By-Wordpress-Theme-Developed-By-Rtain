<?php 
/*
Template Name: flat
*/
get_header(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>
    </title>
  </head>
  <body>
    <div class="clearfix">
    </div>
    <!--========================================
=            Section breadcrumb            =
=========================================-->
    <div class="sub-banner">
      <div class="overlay">
        <div class="container">
          <div class="breadcrumb-area">
            <div class="top">
              <h4>Gallery
              </h4>
            </div>
            <ul class="breadcrumbs">
              <li>
                <a href="index-2.html">Home
                </a>
              </li>
              <li class="active">Gallery
              </li>
              <li class="active">Layout
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--====  End of Section breadcrumb  ====-->
    <!--=========================================
=            Section Gallery two            =
==========================================-->
    <div class="gallery pdt60 pdbt80">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul class="portfolio-sorting wow fadeInUp delay-08s">
              <li>
                <a class="active" data-group="all" href="#">Flat List
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row portfolio-items wow fadeInUp delay-08s" id="grid">
          <?php 
$groupo_sec_1 = cs_get_option('group_103');
if(is_array($groupo_sec_1)){
foreach ($groupo_sec_1 as  $group_value_1) { 
?>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-groups='[a]'>
            <div class="portfolio-item">
              <a data-caption="My caption" data-fancybox="images" href="<?php  echo wp_get_attachment_image_src($group_value_1['text_23'],'full')[0]; ?>">
                <img alt="" src="<?php  echo wp_get_attachment_image_src($group_value_1['text_23'],'full')[0]; ?>">
                <div class="portfolio-overlay">
                  <div class="caption">
                    <span>
                      <?php echo $group_value_1['text_24']; ?>
                    </span>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <?php
}
}
?>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>
