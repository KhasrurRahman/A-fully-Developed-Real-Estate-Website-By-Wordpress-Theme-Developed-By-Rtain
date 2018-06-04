<?php 
/*

Template Name: layout

*/

get_header(); ?>

<body>
    <div class="clearfix"></div>


    <div class="sub-banner">
        <div class="overlay">
            <div class="container">
                <div class="breadcrumb-area">
                    <div class="top">
                        <h4>Gallery</h4>
                    </div>
                    <ul class="breadcrumbs">
                        <li>Home</li>
                        <li class="active">Project</li>
                        <li class="active">Project Layout</li>
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
                            <a class="active" data-group="all" href="#">Layout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row portfolio-items wow fadeInUp delay-08s" id="grid">
                <!-- b  -->
                <div class="col-lg-10 col-md-4 col-sm-6 col-xs-12" data-groups='["b"]'>
                    <div class="portfolio-item">
                        <a data-caption="My caption" data-fancybox="images" href="<?php  echo wp_get_attachment_image_src(cs_get_option( 'text_21' ),'full')[0]; ?>"><img alt="" src="<?php  echo wp_get_attachment_image_src(cs_get_option( 'text_21' ),'full')[0]; ?>">
                        <div class="portfolio-overlay">
                            <div class="caption">
                                Pjoject Layout <span></span>
                            </div>
                        </div></a>
                    </div>
                </div>
            </div>
            <div>
                <span></span>
                <div>
                    <span></span>
                    <h2><span><a href="<?php echo cs_get_option( 'text_22' ); ?>" target="null">Click Here to View In pdf Formate</a></span></h2><span></span>
                </div>
            </div>
        </div>
    </div>



    <?php get_footer(); ?>