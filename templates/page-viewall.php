<?php /* Template Name: Category view all */ ?>

<?php

get_header(); 

global $wp_query;

$viewall_catname = $wp_query->query_vars['viewalcat']; 

$viweall_args = array(

	'posts_per_page'   => -1,										
	'category_name'    => $viewall_catname,

);

$viewall_posts = get_posts( $viweall_args ); 

?>

	<div class="page-section">

		<div class="container">

			<ul class="category-list">

				<?php wp_list_categories( array('style' => 'list','title_li' => __( '' ))); ?>

			</ul>

			<div class="article-list">

				<?php foreach ($viewall_posts as $post) { ?>					

					<?php $post_link = get_permalink($post); ?>

					<article class="blog-post">

						<figure>
							
							<a href="<?= $post_link; ?>">

								<?= get_the_post_thumbnail($post, 'medium'); ?>

							</a>

						</figure>

						<div class="post-content">

							<h3 class="post-title">

								<a href="<?= $post_link; ?>"><?= get_the_title($post); ?></a>

							</h3>

							<p><?= wp_trim_words($post->post_content, 20); ?></p>

							<div class="footer-meta">

								<span class="date"><?= get_the_date('d/m/Y'); ?></span>

							</div>

						</div>

					</article>

				<?php } ?>

			</div>

			<?= the_posts_pagination( array(
					'mid_size'  => 2,
					'prev_text' => __( '&lt;' ),
					'next_text' => __( '&gt;' ),
				) ); 

			?>

		</div>

	</div>

<?php get_footer(); ?>