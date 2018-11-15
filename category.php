<?php get_header(); ?>

	<div class="page-section">

		<div class="container">

			<ul class="category-list">

				<?php wp_list_categories( array('style' => 'list','title_li' => __( '' ))); ?>

			</ul>

			<div class="article-list">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php

						$post_link = get_permalink();

					?>

					<article class="blog-post">

						<figure>
							
							<a href="<?= $post_link; ?>">

								<?= get_the_post_thumbnail($post, 'medium'); ?>

							</a>

						</figure>

						<div class="post-content">

							<h3 class="post-title">

								<a href="<?= $post_link; ?>"><?= the_title(); ?></a>

							</h3>

							<p><?= wp_trim_words(get_the_content(), 20); ?></p>

							<div class="footer-meta">

								<span class="date"><?= get_the_date('d/m/Y'); ?></span>

							</div>

						</div>

					</article>

				<?php endwhile; endif; ?>

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