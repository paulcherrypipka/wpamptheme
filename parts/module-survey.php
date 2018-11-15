<?php
global $wp_query;
$thePostID = $wp_query->post->ID;
if ( $thePostID === 3146 ) {
	$section_title    = 'Was this article helpful?';
	$section_yes      = 'YES';
	$section_no       = 'NO';
	$section_yes_text = 'Do you want to be contacted by Nettrafikk? Leave contact information below:';
	$section_no_text  = 'We appreciate your feedback and want to be even better, please tell us what you think can be improved.';
} else {
	$section_title    = 'Var denne artikkelen nyttig?';
	$section_yes      = 'JA';
	$section_no       = 'NEI';
	$section_yes_text = 'Ønsker du å bli kontaktet av Nettrafikk? Legg igjen kontaktinformasjon nedenfor:';
	$section_no_text  = 'Vi ønsker å bli enda bedre - og setter stor pris på din tilbakemelding på hva du tenker kan forbedres.';
}
?>
<div class="module-feedback" id="more-feedback">

    <h5><?= $section_title ?></h5>

    <div class="feedback-buttons">
        <a href="#more-feedback" class="btn btn-positive"><?= $section_yes ?></a>
        <a href="#more-feedback" class="btn btn-negative"><?= $section_no ?></a>
    </div>

    <div class="feedback-form feedback-positive">
		<?= $section_yes_text ?>
		<?= do_shortcode( '[contact-form-7 id="2063" title="Feedback - leave info"]' ); ?>
    </div>

    <div class="feedback-form feedback-negative">
		<?= $section_no_text ?>
		<?= do_shortcode( '[contact-form-7 id="2064" title="Feedback - leave comment"]' ); ?>
    </div>

</div>