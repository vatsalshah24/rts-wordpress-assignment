<?php 

require get_template_directory() . '/customizer.php';

function your_theme_new_customizer_settings($wp_customize) {
// add a setting for the site logo
$wp_customize->add_setting('your_theme_logo');
// Add a control to upload the logo
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
array(
'label' => 'Upload Logo',
'section' => 'title_tagline',
'settings' => 'your_theme_logo',
) ) );
}
add_action('customize_register', 'your_theme_new_customizer_settings');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );





?>