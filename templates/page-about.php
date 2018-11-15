<?php /* Template Name: Page About */ ?>

<?php get_header(); ?>

	<section id="om-nettrafikk" class="page-section">

		<div class="container">

			<?php get_template_part("parts/section", "headlines"); ?>
			
			<div class="row">

				<div class="span8 content">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; endif; ?>

				</div>

				<div class="span4 sidebar">

					<?php get_sidebar('omoss'); ?>

				</div>

			</div>

		</div>

	</section>

	<?php get_template_part("parts/section", "quote"); ?>

	<?php 

	//get_template_part("parts/section", "members"); 

	?>


<?php get_footer(); ?>