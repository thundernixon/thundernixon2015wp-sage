<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/extras.php',                // Custom functions
  'lib/custom-post-types.php'
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

//Support added by Stephen

add_theme_support( 'post-thumbnails' );

add_post_type_support( 'portfolio', 'thumbnail' );


//remove image links
function wpb_imagelink_setup() {
    $image_set = get_option( 'image_default_link_type' );

    if ($image_set !== 'none') {
        update_option('image_default_link_type', 'none');
    }
}

add_action('admin_init', 'wpb_imagelink_setup', 10);


//responsive images as per https://css-tricks.com/hassle-free-responsive-images-for-wordpress/

// function get_picturefill() {
//   wp_enqueue_script('picturefill', plugins_url( 'scripts/picturefill.min.js', __FILE__ ));
// }
// add_action('init', 'get_picturefill');
//
// add_image_size('larger-img', 1600, 902);
// add_image_size('large-img', 1200, 700);
// add_image_size('medium-img', 700, 500);
// add_image_size('small-img', 400, 200);
//
// function tevkori_get_img_alt( $image ) {
//     $img_alt = trim( strip_tags( get_post_meta( $image, '_wp_attachment_image_alt', true ) ) );
//     return $img_alt;
// }
//
// function tevkori_get_picture_srcs( $image, $mappings ) {
//     $arr = array();
//     foreach ( $mappings as $size => $type ) {
//         $image_src = wp_get_attachment_image_src( $image, $type );
//         $arr[] = '<source srcset="'. $image_src[0] . '" media="(min-width: '. $size .'px)">';
//     }
//     return implode( array_reverse ( $arr ) );
// }
//
// function tevkori_responsive_shortcode( $atts ) {
//     extract( shortcode_atts( array(
//         'imageid'    => 1,
//         // You can add more sizes for your shortcodes here
//         'size1' => 0,
//         'size2' => 600,
//         'size3' => 900,
//         'size4' => 1600,
//     ), $atts ) );
//
//     $mappings = array(
//         $size1 => 'small-img',
//         $size2 => 'medium-img',
//         $size3 => 'large-img',
//         $size4 => 'larger-img'
//     );
//
//    return
//         '<picture>
//             <!--[if IE 9]><video style="display: none;"><![endif]-->'
//             . tevkori_get_picture_srcs( $imageid, $mappings ) .
//             '<!--[if IE 9]></video><![endif]-->
//             <img srcset="' . wp_get_attachment_image_src( $imageid[0] ) . '" alt="' . tevkori_get_img_alt( $imageid ) . '">
//             <noscript>' . wp_get_attachment_image( $imageid, $mappings[0] ) . ' </noscript>
//         </picture>';
// }
//
// add_shortcode( 'responsive', 'tevkori_responsive_shortcode' );
//
// function responsive_insert_image($html, $id, $caption, $title, $align, $url) {
//   return "[responsive imageid='$id' size1='0' size2='600' size3='1000' size4='1600']";
// }
// add_filter('image_send_to_editor', 'responsive_insert_image', 10, 9);


//TRYING TO GET THE POST THUMBNAIL TO WORK AS A BACKGROUND IMAGE, TO ALLOW CSS BLEND MODE

// add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
// add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

// function remove_width_attribute( $html ) {
//    $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
//    return $html;
// }

// function the_post_thumbnail_src($post_id, $size) {
//     $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), $size);
//     echo $thumb['0'];
// }

//remove admin bar for users who are logged into other wordpress accounts
add_filter('show_admin_bar', '__return_false');

//add new image size and crop
add_image_size ( 'thumbnail--frontpage', 900, 350, array( 'center', 'top' ) );


//Making jQuery Google API
function modify_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, '1.8.1');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'modify_jquery');

//Google Analytics add
add_action('wp_footer', 'add_googleanalytics');
function add_googleanalytics() {
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-37669234-1', 'auto');
    ga('send', 'pageview');

  </script>
};


?>
