<?php 
/*

Template Name: notice

*/

get_header(); ?>

<body>
  <div class="clearfix"></div>
  <div class="sub-banner">
    <div class="overlay">
      <div class="container">
        <div class="breadcrumb-area">
          <div class="top">
            <h4>Notice</h4>
          </div>
          <ul class="breadcrumbs">
            <li>Notice</li>
            <li class="active">Update notice</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container pdt80 pdbt80">
    <div class="row">
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            
            <th colspan="2" scope="col">File Name</th>
            <th scope="col">Date</th>
            <th scope="col">Download</th>
          </tr>
        </thead>
        <tbody>




 <?php 
                $groupo_sec_1 = cs_get_option('group_11');
                if(is_array($groupo_sec_1)){
                foreach ($groupo_sec_1 as  $group_value_1) { 

?>

          <tr>
             <td colspan="2">
              <a href="<?php  echo wp_get_attachment_image_src($group_value_1['text_34'],'full')[0]; ?>" target="null"><?php echo $group_value_1['text_33']; ?></a>
            </td>
            <td><?php echo $group_value_1['text_32']; ?></td>
            <td>
             <a href="<?php echo $group_value_1['text_35']; ?>" target="null">Download</a>
            </td>
          </tr>


<?php
            }
       }

 ?>









         
        </tbody>
      </table>
    </div>
  </div>
  <div class="clearfix"></div>



  <?php get_footer(); ?>
