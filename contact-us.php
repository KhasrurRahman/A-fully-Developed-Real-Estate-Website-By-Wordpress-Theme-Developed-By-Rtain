<?php 
/*
Template Name: contact-us
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
            <li class="active">Contact Us
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
        <tr>
          <td>
            <h2 style="color: red">Hotline:
            </h2>
          </td>
          <td>
            <h2 style="color: red"><?php echo cs_get_option( 'text_80' ); ?>
            </h2>
          </td>
        </tr>


        
 <?php 
                $groupo_sec_1 = cs_get_option('group_101');
                if(is_array($groupo_sec_1)){
                foreach ($groupo_sec_1 as  $group_value_1) { 

?>

        <tr>
          <td>
            <h2><?php echo $group_value_1['text_82']; ?>
            </h2>
          </td>
          <td>
            <h5><?php echo $group_value_1['text_83']; ?>
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
    <iframe allowfullscreen frameborder="0" height="450" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9830.80336046123!2d90.41355766389016!3d23.72946117571874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85ab39d5375%3A0x324e7b26e3b9eb0d!2sShapla+City+Ltd.!5e1!3m2!1sen!2sus!4v1523981236072" style="border:0;width: 100%" width="600">
    </iframe>
  </div>
  <div class="clearfix">
  </div>   
  <?php get_footer(); ?>
