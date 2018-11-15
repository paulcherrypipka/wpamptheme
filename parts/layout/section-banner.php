<?php 
	$section_id = get_sub_field('section_id'); 
	$section_id = (!empty($section_id)) ? 'id="'.$section_id.'"' : '';
?>

<div <?= $section_id; ?> class="page-section section-banner" style="background-image: url(<?= get_sub_field('image'); ?>);"></div>