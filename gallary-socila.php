<?php 
/*
Template Name: gsocial
*/
get_header(); ?>
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
          <li>Home
          </li>
          <li class="active">Gallery
          </li>
          <li class="active">Socila Media
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
            <a class="active" data-group="" href="#">
              All Photo
            </a>
          </li>
          <?php 
$groupo_sec_1 = cs_get_option('group_95');
if(is_array($groupo_sec_1)){
foreach ($groupo_sec_1 as  $group_value_1) { 
?>
          <li>
            <a data-group="<?php echo $group_value_1['text_92']; ?>" href="#">
              <?php echo $group_value_1['text_93']; ?>
            </a>
          </li>
          <?php
}
}
?>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row portfolio-items wow fadeInUp delay-08s" id="grid">
      <!-- b  -->
      <?php 
$groupo_sec_1 = cs_get_option('group_95');
if(is_array($groupo_sec_1)){
foreach ($groupo_sec_1 as  $group_value_1) { 
?>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-groups='<?php echo $group_value_1['text_92']; ?>'>
        <div class="portfolio-item">
          <a data-caption="My caption" data-fancybox="images" href="<?php  echo wp_get_attachment_image_src($group_value_1['text_94'],'full')[0]; ?>">
            <img alt="" src="<?php  echo wp_get_attachment_image_src($group_value_1['text_94'],'full')[0]; ?>">
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-groups='<?php echo $group_value_1['text_92']; ?>'>
        <div class="portfolio-item">
          <a data-caption="My caption" data-fancybox="images" href="<?php  echo wp_get_attachment_image_src($group_value_1['text_95'],'full')[0]; ?>">
            <img alt="" src="<?php  echo wp_get_attachment_image_src($group_value_1['text_95'],'full')[0]; ?>">
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-groups='<?php echo $group_value_1['text_92']; ?>'>
        <div class="portfolio-item">
          <a data-caption="My caption" data-fancybox="images" href="<?php  echo wp_get_attachment_image_src($group_value_1['text_96'],'full')[0]; ?>">
            <img alt="" src="<?php  echo wp_get_attachment_image_src($group_value_1['text_96'],'full')[0]; ?>">
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-groups='<?php echo $group_value_1['text_92']; ?>'>
        <div class="portfolio-item">
          <a data-caption="My caption" data-fancybox="images" href="<?php  echo wp_get_attachment_image_src($group_value_1['text_97'],'full')[0]; ?>">
            <img alt="" src="<?php  echo wp_get_attachment_image_src($group_value_1['text_97'],'full')[0]; ?>">
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-groups='<?php echo $group_value_1['text_92']; ?>'>
        <div class="portfolio-item">
          <a data-caption="My caption" data-fancybox="images" href="<?php  echo wp_get_attachment_image_src($group_value_1['text_78'],'full')[0]; ?>">
            <img alt="" src="<?php  echo wp_get_attachment_image_src($group_value_1['text_78'],'full')[0]; ?>">
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-groups='<?php echo $group_value_1['text_92']; ?>'>
        <div class="portfolio-item">
          <a data-caption="My caption" data-fancybox="images" href="<?php  echo wp_get_attachment_image_src($group_value_1['text_78'],'full')[0]; ?>">
            <img alt="" src="<?php  echo wp_get_attachment_image_src($group_value_1['text_78'],'full')[0]; ?>">
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


