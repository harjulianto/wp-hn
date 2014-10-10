<?php       

defined('ABSPATH') or die("No script kiddies please!");



function hntheme() {

        // STYLE
        wp_enqueue_style( 'bootstrap-css' , get_template_directory_uri() . '/assets/css/bootstrap.min.css');
        wp_enqueue_style( 'font-awesome' , get_template_directory_uri() . '/assets/css/font-awesome.min.css');
        wp_enqueue_style( 'custom' , get_template_directory_uri() . '/assets/css/custom.css');
        wp_enqueue_style( 'font-googleapis-Lato' ,'http://fonts.googleapis.com/css?family=Lato:400,300,700,400italic');

        // JS
        wp_enqueue_script('jquery');
        wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/assets/js/bootstrap.min.js');

}

add_action('wp_enqueue_scripts', 'hntheme' );

// Register Custom Navigation Walker
require_once('/lib/wp_bootstrap_navwalker.php');

// Nambah wp_bootstrap_navwalker
register_nav_menu( 'main-menu', 'Menu Utama' );

// Nambah option featured images di editor
function hn_after_setup_theme() {
    add_theme_support('post-thumbnails' );
 }
add_action('after_setup_theme', 'hn_after_setup_theme' );

// SIDEBAR
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s clearfix">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

 ?>