<?php 
/*

Template Name: product

*/

get_header(); ?>
    <div class="clearfix"></div>
    <div class="sub-banner">
        <div class="overlay">
            <div class="container">
                <div class="breadcrumb-area">
                    <div class="top">
                        <h4>Product</h4>
                    </div>
                    <ul class="breadcrumbs">
                        <li>Home</li>
                        <li class="active">Product</li>
                        <li class="active">Oue Product</li>
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
                            <a class="active" data-group="all" href="#">Our Product</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row portfolio-items wow fadeInUp delay-08s" id="grid">
                <!-- b  -->
                <div class="col-lg-12 col-md-4 col-sm-6 col-xs-12">
                    <h3>An Exclusive Luxurious Flat at a Satellite city near Motijheel, 5 minutes driving distance form Shapla Chattar. Two types of flats are available here.</h3>
                    <hr>


                    <dl style="font-size: 20px">
                        <dt>A,</dt>
                        <dd><?php echo cs_get_option( 'text_87' ); ?></dd>
                        <dt>
                            <a href="/p-701/">More Info</a>
                        </dt>
                        <dt><br></dt>
                        <dt>B,</dt>
                        <dd><?php echo cs_get_option( 'text_88' ); ?></dd>
                        <dt>
                            <a href="/1091-2/">More Info</a>
                        </dt>
                    </dl>
                </div>
            </div>
        </div>


        <?php get_footer(); ?>