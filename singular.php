<?php get_header(); ?>

	<div class="page-section">

		<div class="container">

			<?php get_template_part("parts/section", "headlines"); ?>

			<div class="row">

				<div class="span12 content">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; endif; ?>

					<?php get_template_part('parts/module', 'survey'); ?>

				</div>

			</div>

		</div>

	</div>

<?php get_footer(); ?>