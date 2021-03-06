<?php 
/*

Template Name: update_notice

*/

get_header(); ?>
    <div class="clearfix"></div>
    <div class="sub-banner">
        <div class="overlay">
            <div class="container">
                <div class="breadcrumb-area">
                    <div class="top">
                        <h4>ABOUT US</h4>
                    </div>
                    <ul class="breadcrumbs">
                        <li>Home</li>
                        <li class="active">Update Notice</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="about-us margin-top-30">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="profile wow fadeInRight delay-07s" style="visibility: visible; animation-name: fadeInRight;">
                        <h3><span>Update Notice</span></h3>
                        <p><?php echo cs_get_option( 'text_61' ); ?></p>

                       <button><a href="/notice/">More Info</a></button> 
                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="profile-img wow fadeInRight delay-07s" style="visibility: visible; animation-name: fadeInRight;"><img alt="S-widodo.com Digital Marekting" class="img-responsive" src="<?php  echo wp_get_attachment_image_src(cs_get_option( 'text_62' ),'full')[0]; ?>">



                    </div>
                </div>
            </div>
        </div>
    </section>



   <?php get_footer(); ?>>