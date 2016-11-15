<?php

// DEFINE CONSTANTS

	define("SITE_URL", get_site_url());
	define("THEME_DIR", get_template_directory_uri());

// ENQUEUE STYLES

function enqueue_styles() {

	wp_register_style( 'style', THEME_DIR . '/style.css', array(), '1', 'all' );
	wp_enqueue_style( 'style' );

}
	add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

// ENQUEUE SCRIPTS

function enqueue_scripts() {

    wp_register_script('isotope', THEME_DIR . '/js/isotope.pkgd.js', ['jquery'], '1', false);
    wp_enqueue_script( 'isotope' );

    wp_register_script('packery', THEME_DIR . '/js/packery-mode.pkgd.js', ['jquery', 'isotope'], '1', false);
    wp_enqueue_script( 'packery' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

// ENABLE THUMBNAIL SUPPORT

	add_theme_support( 'post-thumbnails' );

// REGISTER MENUS

	register_nav_menus( array(
		'menu' => 'Menu',
	) );

// REGISTER OPTIONS SUBPAGES

    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title' 	=> 'Theme Options',
            'menu_title'	=> 'Theme Options',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Header',
            'menu_title'	=> 'Header',
            'parent_slug'	=> 'theme-general-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'Footer',
            'menu_title'	=> 'Footer',
            'parent_slug'	=> 'theme-general-settings',
        ));
    }

// REGISTER JOBS CUSTOM POST TYPE

    function portfolio_item() {

        $labels = array(
            'name'                => 'Portfolio Items',
            'singular_name'       => 'Portfolio Item',
            'menu_name'           => 'Portfolio Items',
            'name_admin_bar'      => 'Portfolio Items',
            'parent_item_colon'   => 'Parent Item:',
            'all_items'           => 'All Items',
            'add_new_item'        => 'Add New Item',
            'add_new'             => 'Add New',
            'new_item'            => 'New Portfolio Item',
            'edit_item'           => 'Edit Portfolio Item',
            'update_item'         => 'Update Portfolio Item',
            'view_item'           => 'View Portfolio Item',
            'search_items'        => 'Search Portfolio Item',
            'not_found'           => 'Not found',
            'not_found_in_trash'  => 'Not found in Trash',
        );
        $args = array(
            'label'               => 'portfolio_item',
            'description'         => '',
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', ),
            'taxonomies'          => array( 'category', 'post_tag' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-store',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
        register_post_type( 'portfolio_item', $args );

    }

    add_action( 'init', 'portfolio_item', 0 );