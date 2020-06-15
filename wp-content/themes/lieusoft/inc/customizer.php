<?php 
// header customizer================
function header_customize_register( $wp_customize ) {
  $wp_customize->add_panel( 'header_settings', array(
    'title' => __( 'Header Settings' ),
    'description' => "Change header option", // Include html tags such as <p>.
    'priority' => 10, // Mixed with top-level-section hierarchy.
  ) );
  // ====logo section========
  $wp_customize->add_section( 'header_logo_image', array(
    'title' => __( 'Company Logo' ),
    'panel' => 'header_settings', // Not typically needed.
  ) );

  $wp_customize->add_setting( 'header_logo_upload', array(
    //default values
  ));

  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'upload_logo',array(
        'label' => 'Upload Logo',
        'settings' => 'header_logo_upload',
        'section' => 'header_logo_image'
  )));
  // Top bar section =============

  $wp_customize->add_section( 'header_top_bar', array(
    'title' => __( 'Header Top Bar' ),
    'panel' => 'header_settings', // Not typically needed.
  ) );
  // email======
  $wp_customize->add_setting( 'header_top_email', array(
    //default values
  ));

  $wp_customize->add_control('header_top_email',array(
      'label' => 'Email address',
      'section' => 'header_top_bar',
      'type'=>'text',
  ));
 // mobile ====== 
  $wp_customize->add_setting( 'header_top_mobile', array(
    //default values
  ));

  $wp_customize->add_control('header_top_mobile',array(
      'label' => 'Mobile Number',
      'section' => 'header_top_bar',
      'type'=>'text',
  ));
  // Social media section =============
  $wp_customize->add_section( 'header_social_media', array(
    'title' => __( 'Header Social Media' ),
    'panel' => 'header_settings', // Not typically needed.
  ) );
  // facebook======
  $wp_customize->add_setting( 'facebook', array(
    //default values
  ));

  $wp_customize->add_control('facebook',array(
      'label' => 'Facebook',
      'section' => 'header_social_media',
      'type'=>'text',
  ));
  // tweeter======
  $wp_customize->add_setting( 'tweeter', array(
    //default values
  ));

  $wp_customize->add_control('tweeter',array(
      'label' => 'Tweeter',
      'section' => 'header_social_media',
      'type'=>'text',
  ));
  // youtube======
  $wp_customize->add_setting( 'youtube', array(
    //default values
  ));

  $wp_customize->add_control('youtube',array(
      'label' => 'Youtube',
      'section' => 'header_social_media',
      'type'=>'text',
  ));
}
add_action( 'customize_register', 'header_customize_register' );

// Footer customizer================

function footer_customize_register( $wp_customize ) {
  $wp_customize->add_panel( 'footer_settings', array(
    'title' => __( 'Footer Settings' ),
    'description' => "Change footer area", // Include html tags such as <p>.
    'priority' => 200, // Mixed with top-level-section hierarchy.
  ) );

  $wp_customize->add_section( 'footer', array(
    'title' => __( 'Footer Copyright Text' ),
    'panel' => 'footer_settings', // Not typically needed.
  ) );

  $wp_customize->add_setting( 'footer_copyright_text', array(
    //default values
  ));

  $wp_customize->add_control('footer_copyright_text',array(
      'label' => 'Copyright text',
      'section' => 'footer',
      'type'=>'textarea',
  ));
}
add_action( 'customize_register', 'footer_customize_register' );

?>