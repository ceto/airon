<?php
  // 1. customize ACF path
  add_filter('acf/settings/path', 'airon_acf_settings_path');
   function airon_acf_settings_path( $path ) {
      $path = get_stylesheet_directory() . '/lib/acf/';
      return $path;
  }
  // 2. customize ACF dir
  add_filter('acf/settings/dir', 'airon_acf_settings_dir');
  function airon_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/lib/acf/';
    return $dir;
  }

  // 3. Hide ACF field group menu item
  //add_filter('acf/settings/show_admin', '__return_false');

  // 4. Include ACF
  include_once( get_stylesheet_directory() . '/lib/acf/acf.php' );

  function speccolor($spec_id) {
    return '#'.get_field( 'color', 'specialization_'.$spec_id );
  }

function airon_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'airon_mime_types');

//add_post_type_support( 'post', 'excerpt' );

add_action( 'pre_get_posts', 'airon_spectax_order' );
function airon_spectax_order ( $query ) {
  if (($query->is_main_query()) && (is_tax('specialization'))){

      $query->set( 'posts_per_page', '-1' );
      $query->set( 'orderby', 'menu_order' );
      $query->set( 'order', 'ASC' );
  }
}