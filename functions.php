<?php
/**
 * Hey esta es la primera version de lookatme .
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage lam                              
 * @since 1.0.0
 * @version 1.9.0
 */

/*if ( !function_exists( 'lam_scripts' ) ):
  function lam_scripts () {
    //wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,700', array(), '1.0.0', 'all' );
    wp_register_style( 'style', get_stylesheet_uri(), array('google-fonts'), '1.0.0', 'all' );
    //wp_enqueue_style( 'google-fonts' );
    wp_enqueue_style( 'style' );
    wp_enqueue_script( 'jquery' );
  }
endif;

add_action('wp_enqueue_scripts', 'lam_scripts');*/

if ( !function_exists( 'lam_menus' ) ):
  function lam_menus() {
    register_nav_menu("menu", "Hey put here some elements to show in the aside");
    register_nav_menu("footer-r", "right footer");
    register_nav_menu("footer-l", "left footer");
    register_nav_menu("footer-b", "footer of the background");
  }
endif;

add_action( 'init', 'lam_menus' );

if ( !function_exists( 'lam_register_sidebars' ) ):
  function lam_register_sidebars () {
    register_sidebar(array(
      'name' => __('Sidebar ', 'lam') ,
      'id' => 'main_sidebar',
      'description' => __('You have seen it is so cool menu that comes out when you press the floating botton, because here add more features', 'lam'),
      'before_widget' => '<article id="%1$s" class="Widget  %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h3>',
      'after_title' => '</h3>',
    ));
  }
endif;

add_action('widgets_init', 'lam_register_sidebars');

if ( !function_exists( 'lam_setup' ) ):
  function lam_setup () {
    //Soporte para traducciones
      //https://developer.wordpress.org/themes/functionality/internationalization/
      //https://make.wordpress.org/polyglots/handbook/
    //Herramientas
      //https://www.icanlocalize.com/tools/php_scanner
      //https://poedit.net/
    //load_theme_textdomain( 'lam', get_template_directory() . '/languages' );

    //https://developer.wordpress.org/reference/functions/add_theme_support/
    add_theme_support( 'post-thumbnails' );
    //add_image_size( name, width, height, crop );

    add_theme_support('html5', array(
      'comment-list',
      'comment-form',
      'search-form',
      'gallery',
      'caption'
    ));
    $defaults = array(
      'height'      => 100,
      'width'       => 100,
      'flex-height' => true,
      'flex-width'  => true,
      );
      add_theme_support( 'custom-logo', $defaults );
  }
endif;

add_action( 'after_setup_theme', 'lam_setup' );

include_once get_template_directory()."/inc/custom-theme-options.php";
include_once get_template_directory()."/inc/custom-admin.php";
?>
