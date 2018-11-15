<?php
define( 'AMP_QUERY_VAR', apply_filters( 'amp_query_var', 'amp' ) );

function amp_force_query_var_value( $query_vars ) {
	if ( isset( $query_vars[ AMP_QUERY_VAR ] ) && '' === $query_vars[ AMP_QUERY_VAR ] ) {
		$query_vars[ AMP_QUERY_VAR ] = 1;
	}

	return $query_vars;
}

function amp_add_custom_post_support() {
	add_rewrite_endpoint( AMP_QUERY_VAR, EP_PAGES | EP_PERMALINK | EP_AUTHORS | EP_ALL_ARCHIVES | EP_ROOT );
	add_post_type_support( 'page', AMP_QUERY_VAR );
}

add_action( 'init', 'amp_add_custom_post_support', 11 );


function amp_init() {
	add_rewrite_endpoint( AMP_QUERY_VAR, EP_PERMALINK );
	add_post_type_support( 'post', AMP_QUERY_VAR );
	add_filter( 'request', 'amp_force_query_var_value' );
}

add_action( 'init', 'amp_init' );


// Frontpage and Blog page check from reading settings.
function ampforwp_name_blog_page() {
	if ( ! $page_for_posts = get_option( 'page_for_posts' ) ) {
		return;
	}
	$page_for_posts = get_option( 'page_for_posts' );
	$post           = get_post( $page_for_posts );
	if ( $post ) {
		$slug = $post->post_name;

		return $slug;
	}
}

function ampforwp_custom_post_page() {
	$front_page_type = get_option( 'show_on_front' );
	if ( $front_page_type ) {
		return $front_page_type;
	}
}

function ampforwp_get_the_page_id_blog_page() {
	$page   = "";
	$output = "";
	if ( ampforwp_name_blog_page() ) {
		$page   = get_page_by_path( ampforwp_name_blog_page() );
		$output = $page->ID;
	}

	return $output;
}


// CUSTOM REWRITES (ampforwp_add_custom_rewrite_rules function from plugin)
function amp_custom_rewrite_rules() {
	// For Homepage
	add_rewrite_rule(
		'amp/?$',
		'index.php?amp',
		'top'
	);
}
//add_action( 'init', 'amp_custom_rewrite_rules' );
//amp_custom_rewrite_rules();


function amp_the_content_filter( $content ) {
	$content = preg_replace( '/property=[^>]*/', '', $content );
	$content = preg_replace( '/vocab=[^>]*/', '', $content );
	//  $content = preg_replace('/type=[^>]*/', '', $content);
	$content = preg_replace( '/value=[^>]*/', '', $content );
	//  $content = preg_replace('/date=[^>]*/', '', $content);
	$content = preg_replace( '/noshade=[^>]*/', '', $content );
	$content = preg_replace( '/contenteditable=[^>]*/', '', $content );
	//  $content = preg_replace('/time=[^>]*/', '', $content);
	$content = preg_replace( '/non-refundable=[^>]*/', '', $content );
	$content = preg_replace( '/security=[^>]*/', '', $content );
	$content = preg_replace( '/deposit=[^>]*/', '', $content );
	$content = preg_replace( '/for=[^>]*/', '', $content );
	$content = preg_replace( '/nowrap="nowrap"/', '', $content );
	$content = preg_replace( '#<comments-count.*?>(.*?)</comments-count>#i', '', $content );
	/*$content = preg_replace('#<time.*?>(.*?)</time>#i', '', $content);*/
	$content = preg_replace( '#<badge.*?>(.*?)</badge>#i', '', $content );
	$content = preg_replace( '#<plusone.*?>(.*?)</plusone>#i', '', $content );
	$content = preg_replace( '#<col.*?>#i', '', $content );
	$content = preg_replace( '#<table.*?>#i', '<table width="100%">', $content );
	/* Removed So Inline style can work
	$content = preg_replace('#<style scoped.*?>(.*?)</style>#i', '', $content); */
	$content = preg_replace( '/href="javascript:void*/', ' ', $content );
	$content = preg_replace( '/<script[^>]*>.*?<\/script>/i', '', $content );
	$content = preg_replace( '/<\s*style.+?<\s*\/\s*style.*?>/si', ' ', $content );

	//for removing attributes within html tags
	$content = preg_replace( '/(<[^>]+) onclick=".*?"/', '$1', $content );
	//* Removed So Inline style can work
	$content = preg_replace( '/(<[^>]+) style=".*?"/', '$1', $content );
	//*/
	$content = preg_replace( '/(<[^>]+) rel="(.*?) noopener(.*?)"/', '$1 rel="$2$3"', $content );
	$content = preg_replace( '/<div(.*?) rel=".*?"(.*?)/', '<div $1', $content );
	$content = preg_replace( '/(<[^>]+) ref=".*?"/', '$1', $content );
	/*$content = preg_replace('/(<[^>]+) date=".*?"/', '$1', $content);
	$content = preg_replace('/(<[^>]+) time=".*?"/', '$1', $content);
	$content = preg_replace('/(<[^>]+) date/', '$1', $content);*/
	$content = preg_replace( '/(<[^>]+) imap=".*?"/', '$1', $content );
	$content = preg_replace( '/(<[^>]+) spellcheck/', '$1', $content );
	$content = preg_replace( '/<font(.*?)>(.*?)<\/font>/', '$2', $content );

	//removing scripts and rel="nofollow" from Body and from divs
	//issue #268
	//$content = str_replace(' rel="nofollow"',"",$content);
	$content = preg_replace( '/<script[^>]*>.*?<\/script>/i', '', $content );
	/// simpy add more elements to simply strip tag but not the content as so
	/// Array ("p","font");
	$tags_to_strip = Array( "thrive_headline", "type", "place", "state", "city" );
	$tags_to_strip = apply_filters( 'ampforwp_strip_bad_tags', $tags_to_strip );
	foreach ( $tags_to_strip as $tag ) {
		$content = preg_replace( "/<\\/?" . $tag . "(.|\\s)*?>/", '', $content );
	}
	// regex on steroids from here on
	// issue #420
	$content = preg_replace( "/<div\s(class=.*?)(href=((" . '"|' . "'" . ')(.*?)("|' . "'" . ')))\s(width=("|' . "'" . ')(.*?)("|' . "'" . "))>(.*)<\/div>/i", '<div $1>$11</div>', $content );
	$content = preg_replace( '/<like\s(.*?)>(.*)<\/like>/i', '', $content );
	$content = preg_replace( '/<g:plusone\s(.*?)>(.*)<\/g:plusone>/i', '', $content );
	$content = preg_replace( '/imageanchor="1"/i', '', $content );
	$content = preg_replace( '/<plusone\s(.*?)>(.*?)<\/plusone>/', '', $content );
	$content = preg_replace( '/xml:lang=[^>]*/', '', $content );

	// Removing the type attribute from the <ul>
	$content = preg_replace( '/<ul(.*?)type=".*?"(.*?)/', '<ul $1', $content );
	//Convert the Twitter embed into url for better sanitization #1010
	$content = preg_replace( '/<blockquote.+?(?=class="twitter-tweet")class="twitter-tweet".+?(https:\/\/twitter\.com\/\w+\/\w+\/.*?)".+?(?=<\/blockquote>)<\/blockquote>/s', "$1", $content );

	// Images
	$content = preg_replace( '/<img*/', '<amp-img', $content ); // Fallback for plugins
	# Add closing tags to amp-img custom element
	$content = preg_replace( '/<amp-img(.*?)>/', '<amp-img$1></amp-img>', $content );

	// Iframe youtube
//	$content = preg_replace( '/<iframe/', '<amp-youtube data-videoid=$1', $content );
	$content = preg_replace( '/<iframe(.*?)<\/iframe>/i', '', $content );


	// Custom regex
	//- Remove caption from posts
//	$content = preg_replace('#\s*\[caption[^]]*\].*?\[/caption\]\s*#is', '', $content);
	$content = preg_replace( '#\s*\[caption[^]]*\](.*?)\[/caption\]\s*#is', '<br/>$1<br/>', $content );
	//- Remove open and close caption tag separately
//	$content = preg_replace('(\[caption\s+?[^]]+\])', '', $content);
//	$content = preg_replace('/\[\/caption\]/', '', $content);

	//- Remove forms from content
	$content = preg_replace( '/<form(.*?)<\/form>/i', '', $content );

	//- Remove JSON-ld container
//	$content = preg_replace( '/<div[^>]+class="[^>]*ld-container[^>]*"[^>]*>.*?<\/div>/i', '', $content );

	return $content;
}