<?php

	add_theme_support( 'post-thumbnails' );	

	show_admin_bar(false);

	if (function_exists( 'register_sidebar' )) {

		register_sidebar(array(
			'name' => 'Sidebar Single',
			'id'  => 'sidebar_single',
			'before_title' => '<h5 class="widget-title">', 
			'after_title' => '</h5>',
			'before_widget' => '<div class="sidebox widget">',
			'after_widget'  => '</div>',
		));

		register_sidebar(array(
			'name' => 'Sidebar English',
			'id'  => 'sidebar_english',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
			'before_widget' => '<div class="sidebox widget">',
			'after_widget'  => '</div>',
		));

		register_sidebar(array(
			'name' => 'Sidebar Tjenester',
			'id'  => 'sidebar_tjenester',
			'before_title' => '<h5 class="widget-title">', 
			'after_title' => '</h5>',
			'before_widget' => '<div class="sidebox widget">',
			'after_widget'  => '</div>',
		));

		register_sidebar(array(
			'name' => 'Sidebar Kontakt',
			'id'  => 'sidebar_contact',
			'before_title' => '<h5 class="widget-title">', 
			'after_title' => '</h5>',
			'before_widget' => '',
			'after_widget'  => '',
		));

		register_sidebar(array(
			'name' => 'Sidebar Om Oss',
			'id'  => 'sidebar_omoss',
			'before_title' => '<h5 class="widget-title">', 
			'after_title' => '</h5>',
			'before_widget' => '',
			'after_widget'  => '',
		));

		register_sidebar(array(
			'name' => 'Footer A',
			'id'  => 'footer_a',
			'before_title' => '<h5 class="widget-title">', 
			'after_title' => '</h5>',
			'before_widget' => '',
			'after_widget'  => '',
		));

		register_sidebar(array(
			'name' => 'Footer B',
			'id'  => 'footer_b',
			'before_title' => '<h5 class="widget-title">', 
			'after_title' => '</h5>',
			'before_widget' => '',
			'after_widget'  => '',
		));

		register_sidebar(array(
			'name' => 'Footer C',
			'id'  => 'footer_c',
			'before_title' => '<h5 class="widget-title">', 
			'after_title' => '</h5>',
			'before_widget' => '',
			'after_widget'  => '',
		));

	}



	register_nav_menus( array(
		'top_left_menu' => 'Top left menu',
		'top_right_menu' => 'Top right menu',
		'main_menu' => 'Main menu'
	) );