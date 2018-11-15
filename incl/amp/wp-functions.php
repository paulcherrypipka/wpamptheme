<?php
// Wordpress add-ons
if (function_exists( 'register_sidebar' )) {
	register_sidebar(array(
		'name' => 'Sidebar AMP',
		'id'  => 'sidebar_amp',
		'before_title' => '<h5 class="widget-title">',
		'after_title' => '</h5>',
		'before_widget' => '<div class="sidebox widget widget-amp">',
		'after_widget'  => '</div>',
	));
}