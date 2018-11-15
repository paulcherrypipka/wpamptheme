<?php

	add_shortcode('ntrfk_services', 'nettrafikk_services');

	function nettrafikk_services ( $atts ){

		ob_start();
		get_template_part("parts/section", "services");
	    return ob_get_clean();

	}

	add_shortcode('schema-jsonld-generator', 'nettrafikk_jsonld');

	function nettrafikk_jsonld ( $atts ){

		ob_start();
		get_template_part("parts/section", "jsonld");
	    return ob_get_clean();

	}

  add_shortcode('schema-jsonld-generator-en', 'nettrafikk_jsonld_en');

	function nettrafikk_jsonld_en ( $atts ){

		ob_start();
		get_template_part("parts/section", "jsonld-en");
	    return ob_get_clean();

	}
