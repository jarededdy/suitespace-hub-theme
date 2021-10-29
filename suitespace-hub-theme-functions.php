<?php

// Include custom theme options page for Advanced Custom Fields
if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page(array(
		'page_title' 	=> 'Edit Your Hub',
		'menu_title'	=> 'Edit Your Hub',
		'menu_slug' 	=> 'hub-general-settings',
		'capability'	=> 'edit_posts',
        'position'      => '1.1',
		'redirect'		=> false
	));
	
}

// Removes the standard "Posts" menu item from the admin dashboard, we want the users using our announcements custom post type instead.
function post_remove ()
{ 
   remove_menu_page('edit.php');
}
add_action('admin_menu', 'post_remove');   //adding action for triggering function call

// Register your custom taxonomy for announcements
function hub_announcements_taxonomy() {
    register_taxonomy(
        'hub_announcements_categories',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'hub_announcements',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'Announcement Categories', // display name
            'query_var' => true,
            'has_archive' => true,
            'rewrite' => array(
                'slug' => 'announcement',    // This controls the base slug that will display before each term
                'with_front' => false  // Don't display the category base before
            )
        )
    );
}
add_action( 'init', 'hub_announcements_taxonomy');

// // Changing permalink slug
// function filter_hub_announcement_link( $link, $post ) {
//     if ( $post->post_type !== 'hub_announcements' )
//         return $link;

//     if ( $cats = get_the_terms($post->ID, 'hub_announcements_categories') )
//         $link = str_replace('%hub_announcements_categories%', array_pop($cats)->slug, $link);

//     return $link;
// }
// add_filter('post_type_link', 'filter_hub_announcement_link', 10, 2);

// Registering Custom Post Type Themes
add_action( 'init', 'register_hub_announcements_post', 20 );
function register_hub_announcements_post() {
    $labels = array(
        'name' => _x( 'Announcements', 'hub_announcements','custom' ),
        'singular_name' => _x( 'Announcement', 'hub_announcements', 'custom' ),
        'add_new' => _x( 'Add New', 'hub_announcements', 'custom' ),
        'add_new_item' => _x( 'Add New Announcement', 'hub_announcements', 'custom' ),
        'edit_item' => _x( 'Edit Announcement', 'hub_announcements', 'custom' ),
        'new_item' => _x( 'New Announcement', 'hub_announcements', 'custom' ),
        'view_item' => _x( 'View Announcement', 'hub_announcements', 'custom' ),
        'search_items' => _x( 'Search Announcement', 'hub_announcements', 'custom' ),
        'not_found' => _x( 'No Announcements found', 'hub_announcements', 'custom' ),
        'not_found_in_trash' => _x( 'No Announcements found in Trash', 'hub_announcements', 'custom' ),
        'parent_item_colon' => _x( 'Parent Announcement:', 'hub_announcements', 'custom' ),
        'menu_name' => _x( 'Announcements', 'hub_announcements', 'custom' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Custom Announcements',
        'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'post-formats', 'custom-fields' ),
        'taxonomies' => array( 'hub_announcements_categories'),
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-megaphone',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => array( 'slug' => 'announcements', 'with_front' => FALSE ),
        'public' => true,
        'has_archive' => true,
        'capability_type' => 'post'
    );
    register_post_type( 'hub_announcements', $args ); // max 20 character cannot contain capital letters and spaces
}

function default_hub_announcement_taxonomy_term( $post_id, $post ) {
    if ( 'publish' === $post->post_status ) {
        $defaults = array(
            'hub_announcements_categories' => array('misc'),
        );
        $taxonomies = get_object_taxonomies( $post->post_type );
        foreach ( (array) $taxonomies as $taxonomy ) {
            $terms = wp_get_post_terms( $post_id, $taxonomy );
            if ( empty($terms) && array_key_exists( $taxonomy, $defaults ) ) {
                wp_set_object_terms( $post_id, $defaults[$taxonomy], $taxonomy );
            }
        }
    }
}
add_action( 'save_post', 'default_hub_announcement_taxonomy_term', 100, 2 );

function hide_menu_items_from_users() {
    $user = wp_get_current_user();
    if ( in_array( 'hub_admin', (array) $user->roles ) ) {
    //The user has the "Hub Administrator" role
    	remove_menu_page('index.php'); 
    	remove_menu_page('edit-comments.php'); 
        remove_menu_page('themes.php'); // Appearance
        remove_menu_page('tools.php'); // Tools
    }
};
add_action('admin_menu', 'hide_menu_items_from_users' );

/**
 * WordPress function for redirecting users on login based on user role
 */
function redirect_hub_admins( $url, $request, $user ) {
	if ( $user && is_object( $user ) && is_a( $user, 'WP_User' ) ) {
			if ( $user->has_cap( 'administrator' ) ) {
					$url = admin_url();
			} else {
					$url = home_url( '/wp-admin/admin.php?page=hub-general-settings' );
			}
	}
	return $url;
}

add_filter( 'login_redirect', 'redirect_hub_admins', 10, 3 );


