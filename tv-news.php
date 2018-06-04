<?php 
/*

Template Name: tvnews

*/

get_header(); ?>




    <div class="clearfix"></div><!--========================================
=            Section breadcrumb            =
=========================================-->
    <div class="sub-banner">
        <div class="overlay">
            <div class="container">
                <div class="breadcrumb-area">
                    <div class="top">
                        <h4>Gallery</h4>
                    </div>
                    <ul class="breadcrumbs">
                        <li>Home</li>
                        <li class="active">News</li>
                        <li class="active">Tv News</li>
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
                            <a data-group="c" href="#">Tv News</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row portfolio-items wow fadeInUp delay-08s" id="grid">


                


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

               


               


                


               
            </div>
        </div>
    </div>




        <?php get_footer(); ?>