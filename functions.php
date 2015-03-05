<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');

function separator_shortcode( $atts, $content = null ) {
  $a = shortcode_atts( array(
    'bg_img' => 'separator'
  ), $atts );

  return '<section class="hero-separator" style="background-image: url(' . esc_url($a['bg_img']) .') ;"><div class="row"><div class="small-12 columns">' . '<h1>' . $content . '</h1></div></div></section>';
}
add_shortcode( 'separator', 'separator_shortcode' );
?>
