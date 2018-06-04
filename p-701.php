<?php 
/*

Template Name: p-701

*/

get_header(); ?>

<div class="sub-banner">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <div class="top">
                    <h4>properties</h4>
                </div>
                <ul class="breadcrumbs">
                    <li>property details</li>
                    <li class="active">701 sq ft</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!--====  End of Section breadcrumb  ====-->


    <div class="wrap-gallery clearfix">
        <div class="container">
            <div class="row wow animated" style="visibility: visible;">
                <div class="page-title">
                    <h3 class="text-center mb40">package details of 701 sq ft</h3>
                </div>
                <div class="items-container col-xs-12 wow fadeInUp delay-07s" style="visibility: visible; animation-name: fadeInUp;">
                      
                    <?php 
                $groupo_sec_1 = cs_get_option('group_9');
                if(is_array($groupo_sec_1)){
                foreach ($groupo_sec_1 as  $group_value_1) { 

?>
                     <div class="item col-md-4 col-sm-4 col-xs-6" style="border: 1px solid">             
                        <div class="btn14">
                           <img src="<?php  echo wp_get_attachment_image_src($group_value_1['text_25'],'full')[0]; ?>" alt="" style="height: 200px">
                            <div class="ovrly"></div>
                            <div class="buttons">
                                <a href="<?php echo $group_value_1['text_27']; ?>" target="null" class="fa fa-link" ></a>
                                <a href="<?php  echo wp_get_attachment_image_src($group_value_1['text_26'],'full')[0]; ?>" data-fancybox="images" data-caption="My caption" class="fa fa-search"></a>
                            </div>  
                        </div>
                        
                        <h4><?php echo $group_value_1['text_24']; ?></h4>
                        <h4><a href="<?php echo $group_value_1['text_27']; ?>" target="null">View The Pdf File Here</a></h4>
                    </div>

                    <?php
                        }
                         }

                 ?>


                     

                     













                     
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    
    
    <?php get_footer(); ?>