<?php

// Register Class Post Type
function airon_custom_post_types() {


  // Teachers
  $labels = array(
    'name'                  => _x( 'Services', 'Service General Name', 'airon' ),
    'singular_name'         => _x( 'Service', 'Service Singular Name', 'airon' ),
    'menu_name'             => __( 'Airon', 'airon' ),
    'name_admin_bar'        => __( 'Service', 'airon' ),
    'archives'              => __( 'Service Archives', 'airon' ),
    'parent_item_colon'     => __( 'Parent Service:', 'airon' ),
    'all_items'             => __( 'Services', 'airon' ),
    'add_new_item'          => __( 'Add New Service', 'airon' ),
    'add_new'               => __( 'Add Service', 'airon' ),
    'new_item'              => __( 'New Service', 'airon' ),
    'edit_item'             => __( 'Edit Service', 'airon' ),
    'update_item'           => __( 'Update Service', 'airon' ),
    'view_item'             => __( 'View Service', 'airon' ),
    'search_items'          => __( 'Search Service', 'airon' ),
    'not_found'             => __( 'Not found', 'airon' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'airon' ),
    'featured_image'        => __( 'Service Photo', 'airon' ),
    'set_featured_image'    => __( 'Set Service photo', 'airon' ),
    'remove_featured_image' => __( 'Remove Service photo', 'airon' ),
    'use_featured_image'    => __( 'Use as Service photo', 'airon' ),
    'insert_into_item'      => __( 'Insert into Service', 'airon' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Service', 'airon' ),
    'items_list'            => __( 'Services list', 'airon' ),
    'items_list_navigation' => __( 'Services list navigation', 'airon' ),
    'filter_items_list'     => __( 'Filter Services list', 'airon' ),
  );
  $args = array(
    'label'                 => __( 'Service', 'airon' ),
    'description'           => __( 'Service Description', 'airon' ),
    'labels'                => $labels,
    'supports'              => array('title', 'editor', 'thumbnail', 'page-attributes'),
    'taxonomies'            => array(),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    //'show_in_menu'          => 'edit.php?post_type=event',
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-universal-access-alt',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'service', $args );


  //Members
  $labels = array(
    'name'                  => _x( 'Member', 'Member General Name', 'airon' ),
    'singular_name'         => _x( 'Member', 'Member Singular Name', 'airon' ),
    'menu_name'             => __( 'Members', 'airon' ),
    'name_admin_bar'        => __( 'Member', 'airon' ),
    'archives'              => __( 'Member Archives', 'airon' ),
    'parent_item_colon'     => __( 'Parent Member:', 'airon' ),
    'all_items'             => __( 'Members', 'airon' ),
    'add_new_item'          => __( 'Add New Member', 'airon' ),
    'add_new'               => __( 'Add New', 'airon' ),
    'new_item'              => __( 'New Member', 'airon' ),
    'edit_item'             => __( 'Edit Member', 'airon' ),
    'update_item'           => __( 'Update Member', 'airon' ),
    'view_item'             => __( 'View Member', 'airon' ),
    'search_items'          => __( 'Search Member', 'airon' ),
    'not_found'             => __( 'Not found', 'airon' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'airon' ),
    'featured_image'        => __( 'Member Photo', 'airon' ),
    'set_featured_image'    => __( 'Set Member photo', 'airon' ),
    'remove_featured_image' => __( 'Remove Member photo', 'airon' ),
    'use_featured_image'    => __( 'Use as Member photo', 'airon' ),
    'insert_into_item'      => __( 'Insert into Member', 'airon' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Member', 'airon' ),
    'items_list'            => __( 'Members list', 'airon' ),
    'items_list_navigation' => __( 'Members list navigation', 'airon' ),
    'filter_items_list'     => __( 'Filter Members list', 'airon' ),
  );
  $args = array(
    'label'                 => __( 'Members', 'airon' ),
    'description'           => __( 'Member Description', 'airon' ),
    'labels'                => $labels,
    'supports'              => array('title', 'editor', 'thumbnail', 'page-attributes'),
    'taxonomies'            => array(),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => 'edit.php?post_type=service',
    'menu_position'         => 5,
    'menu_icon'             => 'dashicons-universal-access-alt',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );

  register_post_type( 'member', $args );

}
add_action( 'init', 'airon_custom_post_types', 0 );

function airon_remove_date_from_head( $defaults ) {
    unset($defaults['date']);
    return $defaults;
}
add_filter('manage_service_posts_columns', 'airon_remove_date_from_head');
add_filter('manage_member_posts_columns', 'airon_remove_date_from_head');

function airon_specialization_tax() {
    $labels = array(
        'name'                    => _x( 'Specialization', 'Proffessional Specialization', 'text-domain' ),
        'singular_name'            => _x( 'Specialization', 'Proffessional Specialization', 'text-domain' ),
        'search_items'            => __( 'Search Specialization', 'text-domain' ),
        'popular_items'            => __( 'Popular Specialization', 'text-domain' ),
        'all_items'                => __( 'All Specialization', 'text-domain' ),
        'parent_item'            => __( 'Parent Specialization', 'text-domain' ),
        'parent_item_colon'        => __( 'Parent Specialization', 'text-domain' ),
        'edit_item'                => __( 'Edit Specialization', 'text-domain' ),
        'update_item'            => __( 'Update Specialization', 'text-domain' ),
        'add_new_item'            => __( 'Add New Specialization', 'text-domain' ),
        'new_item_name'            => __( 'New Specialization Name', 'text-domain' ),
        'add_or_remove_items'    => __( 'Add or remove Specialization', 'text-domain' ),
        'choose_from_most_used'    => __( 'Choose from most used text-domain', 'text-domain' ),
        'menu_name'                => __( 'Specialization', 'text-domain' ),
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'show_in_nav_menus' => true,
        'show_admin_column' => true,
        'hierarchical'      => true,
        'show_tagcloud'     => false,
        'show_ui'           => true,
        'query_var'         => true,
        'rewrite'           => true,
        'query_var'         => true,
        'capabilities'      => array(),
    );

    register_taxonomy( 'specialization', array( 'service' ), $args );
}

add_action( 'init', 'airon_specialization_tax' );

//remove sticky posts
function airon_remove_sticky_posts( $query ) {
    if ( is_home() && $query->is_main_query() ) {
        //$query->set( 'ignore_sticky_posts', true );
        $query->set( 'post__not_in' , get_option( 'sticky_posts' ));
    }
    return $query;
}
add_filter( 'pre_get_posts', 'airon_remove_sticky_posts' );
