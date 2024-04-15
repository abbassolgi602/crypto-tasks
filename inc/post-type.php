<?php

// Register project Post Type

add_action( 'init', 'project_post_type', 0 );

function project_post_type() {

	$labels = array(

		'name'                => 'Projects',

		'singular_name'       => 'Projects',

		'menu_name'           => 'Projects',

		'name_admin_bar'      => 'Projects',

		'add_new_item'        => 'Add Project',

		'add_new'             => 'Add Project',

		'new_item'            => 'New Project',

	);

	$args = array(

		'label'               => 'Projects',

		'description'         => 'Projects',

		'labels'              => $labels,

		'supports'            => array( 'title', 'editor', 'thumbnail' ),

		'hierarchical'        => true,

		'public'              => true,

		'show_ui'             => true,

		'show_in_menu'        => true,

		'menu_position'       => 6,

		'show_in_admin_bar'   => true,

		'show_in_nav_menus'   => true,

		'can_export'          => true,

		'has_archive'         => true,		

		'exclude_from_search' => true, 

		'publicly_queryable'  => true,

		'rewrite'             => true,

		'show_in_rest' 		  => true, // Disable Gutenberg

		'capability_type'     => 'post',

	);

	register_post_type( 'project', $args );
}



// Register Task Post Type

add_action( 'init', 'task_post_type', 0 );

function task_post_type() {

	$labels = array(

		'name'                => 'tasks',

		'singular_name'       => 'tasks',

		'menu_name'           => 'tasks',

		'name_admin_bar'      => 'tasks',

		'add_new_item'        => 'Add task',

		'add_new'             => 'Add task',

		'new_item'            => 'New task',

	);

	$args = array(

		'label'               => 'tasks',

		'description'         => 'tasks',

		'labels'              => $labels,

		'supports'            => array( 'title', 'editor' ),

		'hierarchical'        => true,

		'public'              => true,

		'show_ui'             => true,

		'show_in_menu'        => true,

		'menu_position'       => 6,

		'show_in_admin_bar'   => true,

		'show_in_nav_menus'   => true,

		'can_export'          => true,

		'has_archive'         => true,		

		'exclude_from_search' => true, 

		'publicly_queryable'  => true,

		'rewrite'             => true,

		'show_in_rest' 		  => true, // Disable Gutenberg

		'capability_type'     => 'post',

	);

	register_post_type( 'task', $args );
}

?>