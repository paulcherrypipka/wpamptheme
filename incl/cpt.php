<?php

function t4d_register_cpt(){

	$cpt_labels = array(

	    'name' 					=> __( 'Vacancies', 'nttraf' ),
		'singular_name' 		=> __( 'Vacancy', 'nttraf' ),
	    'add_new' 				=> __( 'Add new' , 'nttraf' ),
	    'add_new_item' 			=> __( 'Add new vacancy' , 'nttraf' ),
	    'edit_item' 			=> __( 'Edit vacancy' , 'nttraf' ),
	    'new_item' 				=> __( 'New vacncy' , 'nttraf' ),
	    'view_item' 			=> __( 'See vacncy', 'nttraf'),
	    'search_items' 			=> __( 'Search vacncies', 'nttraf'),
	    'not_found' 			=> __( 'Vacancy not found', 'nttraf'),
	    'not_found_in_trash' 	=> __( 'Vacancy not found in trash', 'nttraf')

	);

	$cpt_args = array(
		'labels'             	=> $cpt_labels,
		'public'             	=> true,
		'publicly_queryable' 	=> true,
		'show_ui'            	=> true,
		'show_in_menu'       	=> true,
		'query_var'          	=> true,			
		'capability_type'    	=> 'post',
		'has_archive'        	=> false,
		'hierarchical'       	=> false,
        'menu_icon'   			=> 'dashicons-businessman',
		'rewrite' 				=> array('slug' => 'ledig-stilling'),
		'supports'				=> array('custom-fields','title','editor','author','thumbnail','revisions')
	);

	register_post_type( 'vacancy', $cpt_args );

}

add_action( 'init', 't4d_register_cpt' );

?>