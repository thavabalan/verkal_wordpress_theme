<?php
add_theme_support( 'custom-logo' );
function verkal_enqueue_styles(){
    wp_enqueue_style( 'main-css', get_stylesheet_directory_uri( ).'/style.css', [], time(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'verkal_enqueue_styles' );


function add_image_responsive_class($content) {
    global $post;
    $pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
    $replacement = '<img$1class="$2 img-fluid"$3>';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
 }
 add_filter('the_content', 'add_image_responsive_class');

 /**
* Create Logo Setting and Upload Control
*/
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

?>