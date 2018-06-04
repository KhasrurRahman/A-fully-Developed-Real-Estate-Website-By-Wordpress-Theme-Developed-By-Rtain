<?php 
/*

Template Name: news

*/

get_header(); ?>

<body>
    <div class="clearfix"></div>
    <div class="sub-banner">
        <div class="overlay">
            <div class="container">
                <div class="breadcrumb-area">
                    <div class="top">
                        <h4>News</h4>
                    </div>
                    <ul class="breadcrumbs">
                        <li>Home</li>
                        <li class="active">News</li>
                        <li class="active">Event news</li>
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
                            <a class="active" data-group="all" href="#">Event</a>
                        </li>
                        <li style="list-style: none"><br>
                        <br>
                        <br></li>
                    </ul>
                </div>
            </div>
        </div>




 <div class="container">
        <div class="row portfolio-items wow fadeInUp delay-08s" id="grid">

            <?php 

                $groupo_sec_1 = cs_get_option('group_4');
                if(is_array($groupo_sec_1)){
                foreach ($groupo_sec_1 as  $group_value_1) { 

                ?>


            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-groups='[a]'>
                <div class="portfolio-item">
                    <a data-caption="My caption" data-fancybox="images" href="<?php  echo wp_get_attachment_image_src($group_value_1['text_15'],'full')[0]; ?>">
                        <img alt="" src="<?php  echo wp_get_attachment_image_src($group_value_1['text_15'],'full')[0]; ?>">
                        <div class="portfolio-overlay">
                            <div class="caption">
                                <span><?php echo $group_value_1['text_14']; ?></span>
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