<?php 

	if (is_front_page()) {
		$front_page_id = $post->ID;
	} else {
		$front_page_id = get_option('page_on_front');
	}

	$cta_section = get_field("section_cta", $front_page_id); 
	$cta_section = $cta_section[0];

?>

<div id="call-to-action" class="page-section">

	<div class="container text-center">

		<p class="lead large"><?= $cta_section["headline"]; ?></p>

		<a class="btn btn-border" href="<?= $cta_section['button_url']; ?>"><?= $cta_section["button_label"]; ?></a>

	</div>

</div>