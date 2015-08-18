<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);

/**
 * Custom functions
 */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 700, 425, true ); // 700 pixels wide by 50 pixels tall, crop mode


add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

	function my_post_image_html( $html, $post_id, $post_image_id ) {

    $html = '<a href="' . get_permalink( $post_id ) . '" title="' .

    esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';

    return $html; }
