<?php 
/*
Template Name: video
*/
get_header(); ?>
<div class="clearfix">
</div>

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
          <li class="active">Video
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="gallery pdt60 pdbt80">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="portfolio-sorting wow fadeInUp delay-08s">
          <li>
            <a class="active" data-group="a" href="#">All Video
            </a>
          </li>
          <li>
            <a data-group="b" href="#">project work in progress
            </a>
          </li>
          <li>
            <a data-group="c" href="#">Tv News
            </a>
          </li>
          <li>
            <a data-group="d" href="#">Shapla City Ltd. Advertising
            </a>
          </li>
          <li>
            <a data-group="e" href="#">Shapla City Documentary
            </a>
          </li>
          <li>
            <a data-group="f" href="#">Others
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row portfolio-items wow fadeInUp delay-08s" id="grid">
      <!-- b  -->
      <?php 
$groupo_sec_1 = cs_get_option('group_5');
if(is_array($groupo_sec_1)){
foreach ($groupo_sec_1 as  $group_value_1) { 
?>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-groups='["b"]'>
        <div class="portfolio-item">
          <?php echo $group_value_1['text_16']; ?>
        </div>
      </div>
      <?php
}
}
?>
      <!-- c -->
      <?php 
$groupo_sec_1 = cs_get_option('group_6');
if(is_array($groupo_sec_1)){
foreach ($groupo_sec_1 as  $group_value_1) { 
?>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-groups='["c"]'>
        <div class="portfolio-item">
          <?php echo $group_value_1['text_17']; ?>
        </div>
      </div>
      <?php
}
}
?>
      <!-- d -->
      <?php 
$groupo_sec_1 = cs_get_option('group_7');
if(is_array($groupo_sec_1)){
foreach ($groupo_sec_1 as  $group_value_1) { 
?>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-groups='["d"]'>
        <div class="portfolio-item">
          <?php echo $group_value_1['text_18']; ?>
        </div>
      </div>
      <?php
}
}
?>
      <!-- e -->
      <?php 
$groupo_sec_1 = cs_get_option('group_8');
if(is_array($groupo_sec_1)){
foreach ($groupo_sec_1 as  $group_value_1) { 
?>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-groups='["e"]'>
        <div class="portfolio-item">
          <?php echo $group_value_1['text_19']; ?>
        </div>
      </div>
      <?php
}
}
?>

      <!-- f -->
            <?php 
$groupo_sec_1 = cs_get_option('group_55');
if(is_array($groupo_sec_1)){
foreach ($groupo_sec_1 as  $group_value_1) { 
?>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-groups='["f"]'>
        <div class="portfolio-item">
          <?php echo $group_value_1['text_95']; ?>
        </div>
      </div>
      <?php
}
}
?>


    </div>
  </div>
</div>
<!-- /choose best rooms -->
<?php get_footer(); ?>
