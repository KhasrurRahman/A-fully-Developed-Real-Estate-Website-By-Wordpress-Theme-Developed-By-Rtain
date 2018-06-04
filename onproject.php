<?php 
/*

Template Name: onproject

*/

get_header(); ?>





    <div class="clearfix"></div>
    <div class="sub-banner">
        <div class="overlay">
            <div class="container">
                <div class="breadcrumb-area">
                    <div class="top">
                        <h4>Project</h4>
                    </div>
                    <ul class="breadcrumbs">
                        <li>Home</li>
                        <li class="active">Ongoing Project</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


<br>
<br>

    <div class="clearfix"></div>

    <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div role="tabpanel" class="paddt20">
                                               
                        
                           
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <section>

 <?php 
                $groupo_sec_1 = cs_get_option('group_15');
                if(is_array($groupo_sec_1)){
                foreach ($groupo_sec_1 as  $group_value_1) { 

?>

<div class="property-listing-list wow fadeInDown delay-07s" style="visibility: visible; animation-name: fadeInDown;">
    <a>
        <div class="col-xs-12 col-sm-12 col-md-6 nopadd">
            
            <img class="img-responsive " src="<?php  echo wp_get_attachment_image_src($group_value_1['text_38'],'full')[0]; ?>">
     
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 nopadd">
            <div class="content-block">
               
                <h4>
                    <?php echo $group_value_1['text_39']; ?>
                </h4>
            </div>
            
        </div>
    </a>
</div>
 <?php
                        }
                         }

 ?>

                                    </section>
                                </div>
                            </div>                        
                    </div>
                </div>

            </div>
        </div>


            <div class="clearfix"></div>


<?php get_footer(); ?>