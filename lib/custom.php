<?php
/**
 * Custom functions
 */
add_theme_support( 'post-thumbnails' );

 set_post_thumbnail_size( 760, 9999, true ); // default Post Thumbnail dimensions (cropped)

add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

	function my_post_image_html( $html, $post_id, $post_image_id ) {

    $html = '<a href="' . get_permalink( $post_id ) . '" title="' .

    esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';

    return $html; }


  add_filter('roots_wrap_base', 'roots_wrap_base_cpts'); // Add our function to the roots_wrap_base filter

  function roots_wrap_base_cpts($templates) {
    $cpt = get_post_type(); // Get the current post type
    if ($cpt) {
       array_unshift($templates, 'base-' . $cpt . '.php'); // Shift the template to the front of the array
    }
    return $templates; // Return our modified array with base-$cpt.php at the front of the queue
  }
?>
