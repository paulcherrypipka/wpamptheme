<?php
function NT_add_async_attribute( $tag, $handle ) {
//	var_dump( $handle );
//	'jquery-core',
	$scripts_to_async = array(
		'site_scripts',
		'jquery-migrate',
		'ssba-sharethis',
		'nt_char_counter_script',
		'ssba',
		'contact-form-7',
		'wp-embed',
		'wysija-front-subscribers'
	);

	foreach ( $scripts_to_async as $async_script ) {
		if ( $async_script === $handle ) {
			return str_replace( ' src', ' defer="defer" src', $tag );
		}
	}

	return $tag;
}

add_filter( 'script_loader_tag', 'NT_add_async_attribute', 10, 2 );