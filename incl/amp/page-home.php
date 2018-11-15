<?php /* Template Name: Homepage */ ?>

<?php get_header('amp' ); ?>

	<?php get_template_part("incl/amp/parts/section", "services"); ?>

	<?php get_template_part("incl/amp/parts/section", "testimonials"); ?>
	
	<?php get_template_part("incl/amp/parts/section", "blog"); ?>

<?php get_footer('amp' ); ?>