<?php
/*
Plugin Name: plugin-champagne
Version: 0.1
*/
include_once plugin_dir_path( __FILE__ ).'/widgets/carrousel.php';
include_once plugin_dir_path( __FILE__ ).'/widgets/actualite.php';

function champagne_widget() { 
    register_widget( 'champagne_carrousel' );
    register_widget( 'champagne_actualite' );
  }
  add_action( 'widgets_init', 'champagne_widget' );


function plugin_champagne_admin_scripts( $hook ) {
    wp_enqueue_script( 'plugin-champagne-admin-js',
     plugins_url( 'plugin-champagne/js/champagne_plugin_admin.js', dirname( __FILE__ ) ),
     array( 'jquery' ) 
     , '1.0', true);
}
add_action( 'admin_enqueue_scripts','plugin_champagne_admin_scripts');