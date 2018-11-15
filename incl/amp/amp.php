<?php
require_once( 'functions.php' );
require_once( 'wp-functions.php' );

function amp_prefix_url_rewrite_templates() {
	add_filter( 'template_include', 'include_custom_template' );
	function include_custom_template( $orginal_template ) {
		if ( ( get_query_var( 'amp' ) ) && is_singular() && ! is_home() ) {
			return get_template_directory() . '/incl/amp/page.php';
		} elseif (is_home()) {
            /* Fix for homepage blank page */
            if ( get_query_var( 'amp' ) ) {
			    return get_template_directory() . '/incl/amp/page-home.php';
            } else {
                return get_template_directory() . '/templates/page-home.php';
            }
		} else {
			return $orginal_template;
		}
	}
}

add_action( 'template_redirect', 'amp_prefix_url_rewrite_templates' );
