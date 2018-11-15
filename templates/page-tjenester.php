<?php /* Template Name: Page Tjenester */ ?>

<?php get_header(); ?>

	<section class="page-section">

		<div class="container">

			<div class="row">

				<div class="span8 content">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<h1><?php the_title(); ?></h1>

						<?php the_content(); ?>

					<?php endwhile; endif; ?>

					<?php get_template_part('parts/module', 'survey'); ?>

				</div>

				<div class="span4 sidebar">

					<?php get_sidebar("tjenester"); ?>

				</div>

			</div>

		</div>

	</section>

<?php get_footer(); ?>