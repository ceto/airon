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
  // add_filter('acf/settings/show_admin', '__return_false');

  // 4. Include ACF
  include_once( get_stylesheet_directory() . '/lib/acf/acf.php' );

  // 5. Unhide native metabox
  // add_filter('acf/settings/remove_wp_meta_box', '__return_false');

  // 6. Save JSON
  add_filter('acf/settings/save_json', 'helsinki_acf_json_save_point');
  function helsinki_acf_json_save_point( $path ) {
      $path = get_stylesheet_directory() . '/lib/acfjson';
      return $path;
  }

  // 7. Load JSON
  add_filter('acf/settings/load_json', 'helsinki_acf_json_load_point');
  function helsinki_acf_json_load_point( $paths ) {
      unset($paths[0]);
      $paths[] = get_stylesheet_directory() . '/lib/acfjson';
      return $paths;
  }

function speccolor($spec_id) {
  if ($color = get_field( 'color', 'specialization_'.$spec_id ) ) {
  } else {
    $color = 'd92478';
  }
  return '#'.$color;

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

add_filter('use_block_editor_for_post', '__return_false', 10);
