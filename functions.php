<?php

//Add sidebaer widgets
register_sidebar( array(
'name' => 'Profile Widget',
'id' => 'profile-widget',
'description' => 'Profile Widget in sidebar',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
) );

register_sidebar( array(
'name' => 'Category Widget',
'id' => 'category-widget',
'description' => 'Category Widget in sidebar',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
) );

register_sidebar( array(
'name' => 'Instagram Widget',
'id' => 'instagram-widget',
'description' => 'Instagram Widget in sidebar',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
) );

register_sidebar( array(
'name' => 'Recent Post Widget',
'id' => 'recentpost-widget',
'description' => 'Recent Post Widget in sidebar',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
) );

//Remove image sizo of post thumbnails
function remove_image_size_attributes( $html ) {
    return preg_replace( '/(width|height)="\d*"/', '', $html );
}
// Remove image size attributes from post thumbnails
add_filter( 'post_thumbnail_html', 'remove_image_size_attributes' );

// Remove image size attributes from images added to a WordPress post
add_filter( 'image_send_to_editor', 'remove_image_size_attributes' );

add_theme_support('post-thumbnails');
//Add menus on dashboard
add_theme_support('menus');

function register_theme_menus() {
  register_nav_menus(
    array(
        'primary-menu' => __('Primary Menu'),
        'smartphone-menu' =>__('Smartphone Menu')
      )
  );
}

add_action('init', 'register_theme_menus');

function wp_theme_styles() {
  wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Karma|Pontano+Sans' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'wp_theme_styles');

function wp_theme_js(){
  wp_enqueue_script('fontawesome_js', 'https://use.fontawesome.com/2a238dff2a.js', '', '', false);
  wp_enqueue_script('jqueryMobile_js', 'https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js', array('jquery'), '', true);
  wp_enqueue_script('tweenmax_js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js', array('jquery'), '', true);
  wp_enqueue_script('main_js', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'wp_theme_js');

?>
