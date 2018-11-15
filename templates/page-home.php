<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

	<?php get_template_part("parts/section", "services"); ?>

	<?php get_template_part("parts/section", "testimonials"); ?>	
	
	<?php get_template_part("parts/section", "blog"); ?>

<?php get_footer(); ?>