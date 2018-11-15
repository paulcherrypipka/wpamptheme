<?php

define( "THEME_PATH", get_theme_root() . '/nettrafikk' . '/' );
define( "TEMPLATE_URL", get_stylesheet_directory_uri() . '/' );
define( "SITE_URL", site_url() );

include( "incl/general.php" );
// include("incl/cpt.php");
include( "incl/shortcodes.php" );
include( "incl/compression.php" );
include( "incl/rewrite.php" );
include( "incl/acf.php" );

include( "incl/amp/amp.php" );
include( "incl/page-speed.php" );

function yst_wpseo_change_og_locale( $locale ) {
	return 'nb_NO';
}

add_filter( 'wpseo_locale', 'yst_wpseo_change_og_locale' );

function remove_yst_json( $data ) {
	$data = array();

	return $data;
}

add_filter( 'wpseo_json_ld_output', 'remove_yst_json', 10, 1 );


add_filter( 'acf/compatibility/field_wrapper_class', '__return_true' );

function nettrafikk_scripts_and_styles() {

	// load styles
	wp_enqueue_style( 'site_styles', TEMPLATE_URL . 'style.css' );
	wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Lato:400,300,300italic,900&subset=latin,latin-ext' );


	// load scripts
	wp_enqueue_script( 'site_scripts', TEMPLATE_URL . 'js/scripts.js', array( 'jquery' ), null, true );

	if ( is_page_template( 'templates/page-content-build.php' ) ) :
		wp_enqueue_style( 'reworked_styles', TEMPLATE_URL . 'css/reworked-styles.css' );
	endif;

}

add_action( 'wp_footer', 'nettrafikk_scripts_and_styles' );


function amp_analytics_print_scripts() {

	?>

    <!-- AMP Analytics -->
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>

	<?php

}

// add_action( 'amp_post_template_head', 'amp_analytics_print_scripts' );


// add_action('pre_get_posts', 'nettrafikk_viewall_cat', 999);
function nettrafikk_viewall_cat( $query ) {

	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}

	if ( is_category() && isset( $_GET['view-all'] ) ) {

		$query->set( 'posts_per_page', - 1 );

		return;
	}

}

if ( ! function_exists( 'multipage_metadesc' ) ) {
	function multipage_metadesc( $s ) {
		global $page;
		$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
		! empty ( $page ) && 1 < $page && $paged = $page;
		$paged > 1 && $s = 'Nettrafikk holder deg oppdatert på hva som skjer! Her finner du alle nyhetene fra side ' . sprintf( __( '%s' ), $paged ) . ' om ' . single_cat_title( $page->ID, 0 ) . '. Har du spørsmål må du gjerne også ta kontakt!';

		return $s;
	}

	add_filter( 'wpseo_metadesc', 'multipage_metadesc', 100, 1 );
}

if ( ! function_exists( 'multipage_title' ) ) {
	function multipage_title( $title ) {
		global $page;
		$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
		! empty ( $page ) && 1 < $page && $paged = $page;
		$new = explode( '|', $title );
		if ( empty( $new[1] ) ) {
			$new[1] = "";
		} else {
			$new[1] = ' | ' . $new[1];
		}
		$paged > 1 && $title = $new[0] . sprintf( __( ' - Side %s' ), $paged ) . $new[1];

		return $title;
	}

	add_filter( 'wpseo_title', 'multipage_title', 100, 1 );
}



add_action( 'wp_footer', 'contact_form_listener_wp_footer' );
function contact_form_listener_wp_footer() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '4' == event.detail.contactFormId ) {
        window.location.href = "https://nettrafikk.no/takk-for-din-henvendelse/";
    }
}, false );
</script>
<?php
}

add_filter('wp_video_shortcode', 'nettrafikk_video_shortcode', 10, 5);
function nettrafikk_video_shortcode($output, $atts, $video, $post_id, $library) {

    global $wp;

    if ($wp->query_vars['amp'] == 1) {

        ob_start();
        ?>

        <amp-video id="myAmpVideo"
                   controls
                   width="376"
                   height="713"
                   layout="responsive"
                   src="<?= $atts['mp4']; ?>">
        </amp-video>
        <div id="myOverlay"
             class="click-to-play-overlay">
            <div class="play-icon"
                 role="button"
                 tabindex="0"
                 on="tap:myOverlay.hide, myVideo.play"></div>
        </div>

        <?php
        $output = ob_get_clean();
    }
    return $output;
}