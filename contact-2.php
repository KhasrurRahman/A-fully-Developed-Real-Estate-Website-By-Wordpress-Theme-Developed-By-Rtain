<?php 
/*
Template Name: Projecct location
*/
get_header(); ?>
<body>
  <div class="clearfix">
  </div>
  <div class="sub-banner">
    <div class="overlay">
      <div class="container">
        <div class="breadcrumb-area">
          <div class="top">
            <h4>Contact Us
            </h4>
          </div>
          <ul class="breadcrumbs">
            <li>Home
            </li>
            <li class="active">project Location
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css">
    .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
      padding: 8px;
      line-height: 1.42857143;
      vertical-align: top;
      border-top: 1px solid #4e4b4b;
    }
  </style>
  <div class="col-md-10" style="margin-left: 10%">
    <h1 style="margin-left: 25%; border-bottom: 6px solid; margin-right: 39%;">Contact Information
    </h1>
    <table class="table table-hover">
      <thead>
      </thead>
      <tbody>



 <?php 
                $groupo_sec_1 = cs_get_option('group_102');
                if(is_array($groupo_sec_1)){
                foreach ($groupo_sec_1 as  $group_value_1) { 

?>

        <tr>
          <td>
            <h2><?php echo $group_value_1['text_84']; ?>
            </h2>
          </td>
          <td>
            <h5><?php echo $group_value_1['text_85']; ?>
            </h5>
          </td>
        </tr>

 <?php
                        }
                         }

?>


        






      </tbody>
    </table>
    <table class="table table-bordered table-dark">
      <thead>
      </thead>
    </table>
  </div>
  <div class="clearfix">
  </div>
  <div class="map">
    <iframe allowfullscreen frameborder="0" height="450" src="<?php echo cs_get_option( 'text_20' ); ?>">
    </iframe>
  </div>
  <div class="clearfix">
  </div>
  <?php get_footer(); ?>
