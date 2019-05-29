<?php

if ( !function_exists( 'bezel_parent_css' ) ){
  function bezel_parent_css() {
    wp_enqueue_style( 'bezel-parent-style', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bundle-css' ) );
    wp_dequeue_style( 'style');
    wp_enqueue_style( 'style');
  }
}
add_action( 'wp_enqueue_scripts', 'bezel_parent_css', 14 );

// function set_tag_cloud_sizes($args) {
//     $args = array('smallest'    => 14, 'default' => 17, 'largest'    => 20, 'unit' => 'px');
//     return $args;
// }
// add_filter('widget_tag_cloud_args','set_tag_cloud_sizes');
// 
add_filter('widget_tag_cloud_args','set_tag_cloud_font_size');
function set_tag_cloud_font_size($args) {
    $args['smallest'] = 6; /* Set the smallest size to 12px */
    $args['largest'] = 13;  /* set the largest size to 19px */
    return $args; 
}