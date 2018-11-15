<?php 

	$front_page_id = get_option('page_on_front');
	
	$blog_section = get_field("section_blog", $front_page_id); 
	$blog_section = $blog_section[0];

?>

<section id="blog" class="page-section section-dark">

	<div class="container">

		<div class="row">

			<div class="span3">

				<h3 class="section-title"><?= $blog_section["headline"]; ?></h3>

				<div class="lead"><?= $blog_section["subheadline"]; ?></div>

				<p><?= $blog_section["text"]; ?></p>

				<a href="<?= $blog_section['button_url']; ?>" title="<?= $blog_section['button_label']; ?>" class="btn"><?= $blog_section["button_label"]; ?></a>

			</div>

			<?php $blog_posts = get_posts("posts_per_page=3&category=".$blog_section['blog_category']);	?>

			<?php foreach ($blog_posts as $post) : ?>

				<?php 

					setup_postdata($post);

					$content = get_the_content($post);
					$post_link = get_permalink($post);


				?>

				<div class="span3">

					<article class="blog-post">

						<figure>
							
							<a href="<?= $post_link; ?>">

								<!-- <img src="<?= TEMPLATE_URL; ?>img/Ledig-Stilling.jpg" width="375" height="225"/> -->

								

                            </a>

						</figure>

						<div class="post-content">

							<h3 class="post-title">

								<a href="<?= $post_link; ?>"><?= get_the_title($post); ?></a>

							</h3>

							<p><?= wp_trim_words($content, 20); ?></p>

							<div class="footer-meta">

								<span class="date"><?= get_the_date('d/m/Y', $post); ?></span>

							</div>

						</div>

					</article>

				</div>
				
			<?php endforeach; wp_reset_postdata();?>

		</div>

	</div>

</section>