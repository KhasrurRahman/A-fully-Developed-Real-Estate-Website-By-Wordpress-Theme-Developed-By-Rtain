<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Admin Panal',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Codestar Framework <small>by Codestar</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// Home Page
// -----------------------------------------------------------------------------------------------
// ===============================================================================================



$options[]      = array(
  'name'        => 'home-page',
  'title'       => 'Home',
  'icon'        => 'fa fa-home',
  'sections'      => array(

// begin: long journey
array(
  'name'        => 'journey',
  'title'       => 'Journey From 2011 to now',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_1',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(

    array(
      'id'      => 'text_2',
      'type'    => 'number',
      'title'   => 'Year- ',
    ),
    array(
      'id'      => 'text_1',
      'type'    => 'textarea',
      'title'   => 'Description- ',
    ),
      ),
    ),
  ),
  ),

// begin: md massage
 array(

  'name'        => 'MD_message',
  'title'       => 'MD message',
  'icon'        => 'fa fa-star',
      

      'fields'=>array(

    array(
      'id'      => 'text_3',
      'type'    => 'textarea',
      'title'   => 'message- ',
    ),
   
      ),
    ),

// begin: Our Approval
array(
  'name'        => 'Approval',
  'title'       => 'Our Approval',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_2',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(

    array(
      'id'      => 'text_4',
      'type'    => 'image',
      'title'   => 'Select image- ',
    ),
      ),
    ),
  ),
  ),

// begin: what client say
array(
  'name'        => 'client',
  'title'       => 'What client say',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_12',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(

    array(
      'id'      => 'text_36',
      'type'    => 'text',
      'title'   => 'client name- ',
    ),
    array(
      'id'      => 'text_37',
      'type'    => 'image',
      'title'   => 'client image- ',
    ),
    array(
      'id'      => 'text_38',
      'type'    => 'textarea',
      'title'   => 'Description[3line]- ',
    ),
    array(
      'id'      => 'text_50',
      'type'    => 'text',
      'title'   => 'designation- ',
    ),
      ),
    ),
  ),
  ),

// begin: upcumming project
array(
  'name'        => 'upcumming',
  'title'       => 'upcumming project',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_14',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(

    array(
      'id'      => 'text_35',
      'type'    => 'image',
      'title'   => 'Select image- ',
    ),
    array(
      'id'      => 'text_36',
      'type'    => 'textarea',
      'title'   => 'Description- ',
    ),
      ),
    ),
  ),
  ),
// begin: ongoing project
array(
  'name'        => 'ongoing',
  'title'       => 'ongoing project',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_15',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(

    array(
      'id'      => 'text_38',
      'type'    => 'image',
      'title'   => 'Select image- ',
    ),
    array(
      'id'      => 'text_39',
      'type'    => 'textarea',
      'title'   => 'Description- ',
    ),
      ),
    ),
  ),
  ),
// begin: complete project
array(
  'name'        => 'compelte',
  'title'       => 'Complete project',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_60',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(

    array(
      'id'      => 'text_70',
      'type'    => 'image',
      'title'   => 'Select image- ',
    ),
    array(
      'id'      => 'text_71',
      'type'    => 'textarea',
      'title'   => 'Description- ',
    ),
      ),
    ),
  ),
  ),

// begin: offer
 array(

  'name'        => 'Offer',
  'title'       => 'Current Offer',
  'icon'        => 'fa fa-star',
      

      'fields'=>array(

    array(
      'id'      => 'text_59',
      'type'    => 'textarea',
      'title'   => 'Description- ',
    ),
    array(
      'id'      => 'text_60',
      'type'    => 'image',
      'title'   => 'Select Image- ',
    ),
   
      ),
    ),

 // begin: Update Notice 
 array(

  'name'        => 'upnotice',
  'title'       => 'Update Notice',
  'icon'        => 'fa fa-star',
      

      'fields'=>array(

    array(
      'id'      => 'text_61',
      'type'    => 'textarea',
      'title'   => 'Description- ',
    ),
    array(
      'id'      => 'text_62',
      'type'    => 'image',
      'title'   => 'Select Image- ',
    ),
   
      ),
    ),

 // begin: Our Product
 array(

  'name'        => 'product',
  'title'       => 'Our Product',
  'icon'        => 'fa fa-star',
      

      'fields'=>array(

    array(
      'id'      => 'text_87',
      'type'    => 'textarea',
      'title'   => 'For Group "A":- ',
    ),
     array(
      'id'      => 'text_88',
      'type'    => 'textarea',
      'title'   => 'For Group "B":- ',
    )

   
   
      ),
    ),




),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// about Page
// -----------------------------------------------------------------------------------------------
// ===============================================================================================



$options[]      = array(
  'name'        => 'page-about',
  'title'       => 'About-us',
  'icon'        => 'fa fa-home',
  'sections'      => array(

// begin: About-us
 array(

  'name'        => 'aboutus',
  'title'       => 'About_us',
  'icon'        => 'fa fa-star',
      

      'fields'=>array(

    array(
      'id'      => 'text_5',
      'type'    => 'textarea',
      'title'   => 'Description- ',
    ),
   
      ),
    ),



// begin: Aboutus>news>event

 array(
  'name'        => 'event',
  'title'       => 'Aboutus>news>event',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_4',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(

    array(
      'id'      => 'text_14',
      'type'    => 'text',
      'title'   => 'Date- ',
    ),
    array(
      'id'      => 'text_15',
      'type'    => 'image',
      'title'   => 'upload event image[850x1300]- ',
    ),
      ),
    ),
  ),
  ),










),
);


// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// video Page
// -----------------------------------------------------------------------------------------------
// ===============================================================================================

$options[]      = array(
  'name'        => 'home-video',
  'title'       => 'Video',
  'icon'        => 'fa fa-home',
  'sections'      => array(

// begin: video


    // begin: Shapla City Piling work video
array(
  'name'        => 'video-1',
  'title'       => 'Shapla City Piling work video',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_5',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(
    array(
      'id'      => 'text_16',
      'type'    => 'textarea',
      'title'   => 'youtube video link- ',
    ),
      ),
    ),
  ),
  ),

// begin: Tv News
array(
  'name'        => 'video-2',
  'title'       => 'Tv News',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_6',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(
    array(
      'id'      => 'text_17',
      'type'    => 'textarea',
      'title'   => 'youtube video link- ',
    ),
      ),
    ),
  ),
  ),

//begin: Tv Shapla City Ltd. Advertising
array(
  'name'        => 'video-3',
  'title'       => 'Shapla City Ltd. Advertising',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_7',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(
    array(
      'id'      => 'text_18',
      'type'    => 'textarea',
      'title'   => 'youtube video link- ',
    ),
      ),
    ),
  ),
  ),

//begin: Shapla City Documentary
array(
  'name'        => 'video-4',
  'title'       => 'Shapla City Documentary',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_8',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(
    array(
      'id'      => 'text_19',
      'type'    => 'textarea',
      'title'   => 'youtube video link- ',
    ),
      ),
    ),
  ),
  ),


//begin: Other
array(
  'name'        => 'video-6',
  'title'       => 'Others',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_55',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(
    array(
      'id'      => 'text_95',
      'type'    => 'textarea',
      'title'   => 'youtube video link- ',
    ),
      ),
    ),
  ),
  ),




),
);




// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// Project Page
// -----------------------------------------------------------------------------------------------
// ===============================================================================================

$options[]      = array(
  'name'        => 'home-projectlocaton',
  'title'       => 'Project',
  'icon'        => 'fa fa-home',
  'sections'      => array(




// begin: project location
 array(

  'name'        => 'project-location',
  'title'       => 'project-location',
  'icon'        => 'fa fa-star',
      

      'fields'=>array(

    array(
      'id'      => 'text_20',
      'type'    => 'textarea',
      'title'   => 'google map link[ifream]- ',
    ),
   
      ),
    ),
// begin: project layout
 array(

  'name'        => 'project-layout',
  'title'       => 'project-layout',
  'icon'        => 'fa fa-star',
      

      'fields'=>array(

  
    array(
      'id'      => 'text_21',
      'type'    => 'image',
      'title'   => 'Layout Image- ',
    ),
    array(
      'id'      => 'text_22',
      'type'    => 'upload',
      'title'   => 'upload pdf- ',
    ),
   
      ),
    ),

 // ===============================================================================================
// -----------------------------------------------------------------------------------------------
// flat page
// -----------------------------------------------------------------------------------------------
// ===============================================================================================


  array(
  'name'        => 'Flat',
  'title'       => 'project>price list>flat',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_103',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(
      array(
      'id'      => 'text_105',
      'type'    => 'text',
      'title'   => 'set a id- ',
    ),
    array(
      'id'      => 'text_23',
      'type'    => 'image',
      'title'   => 'select image- ',
    ),
    array(
      'id'      => 'text_24',
      'type'    => 'text',
      'title'   => 'set a short description- ',
    ),
      ),
    ),
  ),
  ),




),
);







// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// Gallary Page
// -----------------------------------------------------------------------------------------------
// ===============================================================================================

$options[]      = array(
  'name'        => 'gallary',
  'title'       => 'Gallary page',
  'icon'        => 'fa fa-home',
  'sections'      => array(

// begin: photo
array(
  'name'        => 'photo-2',
  'title'       => 'Project work status',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_3',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(

    array(
      'id'      => 'text_6',
      'type'    => 'text',
      'title'   => 'group name[a-z]- ',
    ),
       array(
      'id'      => 'text_13',
      'type'    => 'text',
      'title'   => 'About The Project- ',
    ),
    array(
      'id'      => 'text_7',
      'type'    => 'image',
      'title'   => 'Image 1 - ',
    ),
        array(
      'id'      => 'text_8',
      'type'    => 'image',
      'title'   => 'Image 2 - ',
    ),
       array(
      'id'      => 'text_9',
      'type'    => 'image',
      'title'   => 'Image 3 - ',
    ),
       array(
      'id'      => 'text_10',
      'type'    => 'image',
      'title'   => 'Image 4 - ',
    ),
       array(
      'id'      => 'text_11',
      'type'    => 'image',
      'title'   => 'Image 5 - ',
    ),
     array(
      'id'      => 'text_12',
      'type'    => 'image',
      'title'   => 'Image 6 - ',
    ),
      ),
    ),
  ),
  ),


// begin: event photo
array(
  'name'        => 'photo-242',
  'title'       => 'Event/Programm',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_50',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(

    array(
      'id'      => 'text_51',
      'type'    => 'text',
      'title'   => 'group name[a-z]- ',
    ),
       array(
      'id'      => 'text_52',
      'type'    => 'text',
      'title'   => 'About The Project- ',
    ),
    array(
      'id'      => 'text_53',
      'type'    => 'image',
      'title'   => 'Image 1 - ',
    ),
        array(
      'id'      => 'text_54',
      'type'    => 'image',
      'title'   => 'Image 2 - ',
    ),
       array(
      'id'      => 'text_55',
      'type'    => 'image',
      'title'   => 'Image 3 - ',
    ),
       array(
      'id'      => 'text_56',
      'type'    => 'image',
      'title'   => 'Image 4 - ',
    ),
       array(
      'id'      => 'text_57',
      'type'    => 'image',
      'title'   => 'Image 5 - ',
    ),
     array(
      'id'      => 'text_58',
      'type'    => 'image',
      'title'   => 'Image 6 - ',
    ),
      ),
    ),
  ),
  ),



// begin: Social Media
array(
  'name'        => 'photosocial',
  'title'       => 'Social Media',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_95',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(

    array(
      'id'      => 'text_92',
      'type'    => 'text',
      'title'   => 'group name[a-z]- ',
    ),
       array(
      'id'      => 'text_93',
      'type'    => 'text',
      'title'   => 'About The Project- ',
    ),
    array(
      'id'      => 'text_94',
      'type'    => 'image',
      'title'   => 'Image 1 - ',
    ),
        array(
      'id'      => 'text_95',
      'type'    => 'image',
      'title'   => 'Image 2 - ',
    ),
       array(
      'id'      => 'text_96',
      'type'    => 'image',
      'title'   => 'Image 3 - ',
    ),
       array(
      'id'      => 'text_97',
      'type'    => 'image',
      'title'   => 'Image 4 - ',
    ),
       array(
      'id'      => 'text_78',
      'type'    => 'image',
      'title'   => 'Image 5 - ',
    ),
     array(
      'id'      => 'text_79',
      'type'    => 'image',
      'title'   => 'Image 6 - ',
    ),
      ),
    ),
  ),
  ),







),
);




// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// properteas Page
// -----------------------------------------------------------------------------------------------
// ===============================================================================================


$options[]      = array(
  'name'        => 'home-page',
  'title'       => 'properties',
  'icon'        => 'fa fa-home',
  'sections'      => array(

// begin: 701-sq ft
array(
  'name'        => '701',
  'title'       => '701-sq ft',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_9',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(

    array(
      'id'      => 'text_24',
      'type'    => 'textarea',
      'title'   => 'short descripotion(in 3 line)- ',
    ),
    array(
      'id'      => 'text_25',
      'type'    => 'image',
      'title'   => 'small image[460x395]- ',
    ),
    array(
      'id'      => 'text_26',
      'type'    => 'image',
      'title'   => 'big image- ',
    ),
    array(
      'id'      => 'text_27',
      'type'    => 'upload',
      'title'   => 'the pdf file- ',
    ),
      ),
    ),
  ),
  ),

// begin: 701-sq ft
array(
  'name'        => '1091',
  'title'       => '1091-sq ft',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_10',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(

    array(
      'id'      => 'text_28',
      'type'    => 'textarea',
      'title'   => 'short descripotion(in 3 line)- ',
    ),
    array(
      'id'      => 'text_29',
      'type'    => 'image',
      'title'   => 'small image[460x395]- ',
    ),
    array(
      'id'      => 'text_30',
      'type'    => 'image',
      'title'   => 'big image- ',
    ),
    array(
      'id'      => 'text_31',
      'type'    => 'upload',
      'title'   => 'the pdf file- ',
    ),
      ),
    ),
  ),
  ),





),
);




// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// Notice Page
// -----------------------------------------------------------------------------------------------
// ===============================================================================================




$options[]      = array(
  'name'        => 'notice-page',
  'title'       => 'Notice',
  'icon'        => 'fa fa-home',
  'sections'      => array(

// begin: Update Notice
array(
  'name'        => 'updatenotice',
  'title'       => 'Update-notice',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_11',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(

    array(
      'id'      => 'text_32',
      'type'    => 'text',
      'title'   => 'Notice date[ _/_/_ ]- ',
    ),
    array(
      'id'      => 'text_33',
      'type'    => 'text',
      'title'   => 'Notice Title- ',
    ),
     array(
      'id'      => 'text_34',
      'type'    => 'image',
      'title'   => 'Notice[image]- ',
    ),
     array(
      'id'      => 'text_35',
      'type'    => 'upload',
      'title'   => 'Notice[pdf]- ',
    ),
      ),
    ),
  ),
  ),




),
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// contact-us Page
// -----------------------------------------------------------------------------------------------
// ===============================================================================================

$options[]      = array(
  'name'        => 'contactus-page',
  'title'       => 'Contactus',
  'icon'        => 'fa fa-home',
  'sections'      => array(

// begin:Contact-us
array(
  'name'        => 'Contact-1',
  'title'       => 'Contactus',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_101',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(

    array(
      'id'      => 'text_82',
      'type'    => 'text',
      'title'   => 'field name- ',
    ),
    array(
      'id'      => 'text_83',
      'type'    => 'textarea',
      'title'   => 'Details- ',
    ),
    
      ),
    ),
  ),
  ),

// begin:Project-Location
array(
  'name'        => 'Contact-2',
  'title'       => 'Project-Location',
  'icon'        => 'fa fa-star',

  
  'fields'      => array(

    array(

      'id'=>'group_102',
      'type'    => 'group',
      'title'   => 'all group',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Field',

      'fields'=>array(

    array(
      'id'      => 'text_84',
      'type'    => 'text',
      'title'   => 'field name- ',
    ),
    array(
      'id'      => 'text_85',
      'type'    => 'textarea',
      'title'   => 'Details- ',
    ),
    
      ),
    ),
  ),
  ),




),
);



$options[]      = array(
  'name'        => 'hotline',
  'title'       => 'Hotline',
  'icon'        => 'fa fa-home',
  'sections'      => array(

// begin: Hotline
 array(

  'name'        => 'hotline',
  'title'       => 'Hotline',
  'icon'        => 'fa fa-star',
      

      'fields'=>array(

    array(
      'id'      => 'text_80',
      'type'    => 'textarea',
      'title'   => 'Hotline:- ',
    ),

   
   
      ),
    ),
),
);














CSFramework::instance( $settings, $options );