<?php
if ( !function_exists( 'lam_admin_scripts' ) ):
  function lam_admin_scripts () {
    wp_register_style( 'custom-properties', get_stylesheet_directory_uri() . '/css/custom_properties.css', array(), '1.0.0', 'all' );
    wp_register_style( 'admin-page-style', get_template_directory_uri() . '/css/admin_page.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'custom-properties' );
    wp_enqueue_style( 'admin-page-style' );
    wp_register_script( 'admin-page-script', get_template_directory_uri() . '/js/admin_page.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'admin-page-script' );
  }
endif;
add_action( 'admin_enqueue_scripts', 'lam_admin_scripts' );
if ( !function_exists( 'lam_admin_footer_text' ) ):
  function lam_admin_footer_text () {
    return '<i>
      Sitio creado con tecnologia de Wordpress
      <a href="https://wordpress.org/" target="_blank">Wordpress</a>.
    </i><i>
    Theme created for Darwin Quiroz
    <a href="https://twitter.com/darwinquirozJ" target="_blank">@darwinquirozJ</a>.
  </i>';
  }
endif;

add_filter( 'admin_footer_text', 'lam_admin_footer_text' );

if ( !function_exists( 'lam_wp_dashboard_setup' ) ):
  function lam_wp_dashboard_setup () {
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
    //De un vistazo
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
    // Comentarios recientes
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
    // Enlaces entrantes
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
    //Publicación rápida
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
    //Noticas del blog de WordPress
    remove_meta_box('dashboard_primary', 'dashboard', 'side');
    //Otras noticias de WordPress
    remove_meta_box('dashboard_secondary', 'dashboard', 'side');
  }
endif;
add_action( 'wp_dashboard_setup', 'lam_wp_dashboard_setup' );
?>
