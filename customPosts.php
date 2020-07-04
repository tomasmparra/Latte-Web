<?php

// Built by www.lattedev.com
add_action( 'init', 'lattedev_custom_posts' );
function lattedev_custom_posts() {
    /* Añado las etiquetas que aparecerán en el escritorio de WordPress */
	$labels = array(
		'name'               => _x( 'Services', 'post type general name', 'text-domain' ),
		'singular_name'      => _x( 'Service', 'post type singular name', 'text-domain' ),
		'menu_name'          => _x( 'Services', 'admin menu', 'text-domain' ),
		'add_new'            => _x( 'Add new', 'service', 'text-domain' ),
		'add_new_item'       => __( 'Add new service', 'text-domain' ),
		'new_item'           => __( 'New service', 'text-domain' ),
		'edit_item'          => __( 'Edit service', 'text-domain' ),
		'view_item'          => __( 'See service', 'text-domain' ),
		'all_items'          => __( 'All services', 'text-domain' ),
		'search_items'       => __( 'Search services', 'text-domain' ),
		'not_found'          => __( 'There are no services.', 'text-domain' ),
		'not_found_in_trash' => __( 'No services in the bin.', 'text-domain' )
	);
    /* Configuro el comportamiento y funcionalidades del nuevo custom post type */
	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Desctription.', 'text-domain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'parent_item_colon'  => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_nav_menus'  => true,
    'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'service' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
    'menu-icon'          => 'dashicons-palmtree',
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'page-attributes', 'revisions', 'custom-fields' )
	);
	register_post_type( 'service', $args );




    /* Añado las etiquetas que aparecerán en el escritorio de WordPress */
	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name', 'text-domain' ),
		'singular_name'      => _x( 'Testimonial', 'post type singular name', 'text-domain' ),
		'menu_name'          => _x( 'Testimonials', 'admin menu', 'text-domain' ),
		'add_new'            => _x( 'Add new', 'testimonial', 'text-domain' ),
		'add_new_item'       => __( 'Add new testimonial', 'text-domain' ),
		'new_item'           => __( 'New testimonial', 'text-domain' ),
		'edit_item'          => __( 'Edit testimonial', 'text-domain' ),
		'view_item'          => __( 'See testimonial', 'text-domain' ),
		'all_items'          => __( 'All testimonials', 'text-domain' ),
		'search_items'       => __( 'Search testimonials', 'text-domain' ),
		'not_found'          => __( 'There are no testimonials.', 'text-domain' ),
		'not_found_in_trash' => __( 'No testimonials in the bin.', 'text-domain' )
	);


    /* Configuro el comportamiento y funcionalidades del nuevo custom post type */
	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Desctription.', 'text-domain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_nav_menus'  => true,
		'show_in_menu'       => true,
    'show_in_rest'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'restaurant' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
    'taxonomies'         => array('loc'),
		'menu_icon'          => 'dashicons-format-quote',
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'revisions' )
	);
	register_post_type( 'testimonials', $args );


	/* Añado las etiquetas que aparecerán en el escritorio de WordPress */
$labels = array(
	'name'               => _x( 'Portfolio', 'post type general name', 'text-domain' ),
	'singular_name'      => _x( 'Proyecto', 'post type singular name', 'text-domain' ),
	'menu_name'          => _x( 'Portfolio', 'admin menu', 'text-domain' ),
	'add_new'            => _x( 'Añadir nuevo', 'proyecto', 'text-domain' ),
	'add_new_item'       => __( 'Añadir nuevo proyecto', 'text-domain' ),
	'new_item'           => __( 'Nuevo proyecto', 'text-domain' ),
	'edit_item'          => __( 'Editar proyecto', 'text-domain' ),
	'view_item'          => __( 'ver proyecto', 'text-domain' ),
	'all_items'          => __( 'Todos los proyectos', 'text-domain' ),
	'search_items'       => __( 'Buscar proyectos', 'text-domain' ),
	'not_found'          => __( 'No hay proyectos.', 'text-domain' ),
	'not_found_in_trash' => __( 'No hay proyectos en la papelera.', 'text-domain' )
);


	/* Configuro el comportamiento y funcionalidades del nuevo custom post type */
$args = array(
	'labels'             => $labels,
	'description'        => __( 'Desctription.', 'text-domain' ),
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_nav_menus'  => true,
	'show_in_menu'       => true,
	'show_in_rest'       => true,
	'query_var'          => true,
	'rewrite'            => array( 'slug' => 'proyecto' ),
	'capability_type'    => 'post',
	'has_archive'        => true,
	'hierarchical'       => false,
	'taxonomies'         => array('loc'),
	'menu_icon'          => 'dashicons-welcome-view-site',
	'menu_position'      => 5,
	'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'revisions' )
);
register_post_type( 'Portfolio', $args );


}
