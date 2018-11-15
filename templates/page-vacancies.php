<?php 

/* Template Name: Page Vacancies */

$vacancies = get_posts(array(
	'post_type' => 'post',
	'category'	=> 23,
	'posts_per_page' => -1,
));

get_header(); 

?>

	<div class="page-section">

		<div class="container">

			<div class="article-list">

				<?php foreach ($vacancies as $vacancy) { ?>

					<?php $post_link = get_permalink($vacancy); ?>

					<article class="blog-post">

						<figure>
							
							<a href="<?= $post_link; ?>">

								<?= get_the_post_thumbnail($vacancy, 'medium'); ?>

							</a>

						</figure>

						<div class="post-content">

							<h3 class="post-title">

								<a href="<?= $post_link; ?>"><?= get_the_title($vacancy); ?></a>

							</h3>

							<p><?= wp_trim_words(apply_filters('the_content',$vacancy->post_content), 20); ?></p>

							<!-- <div class="footer-meta">

								<span class="date"><?//= get_the_date('d/m/Y',$vacancy->ID); ?></span>

							</div> -->

						</div>

					</article>

				<?php } ?>

			</div>
			
		</div>

	</div>

<?php get_footer(); ?>