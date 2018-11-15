<?php /* Template Name: Page Referanser */ ?>

<?php get_header(); ?>

	<section id="title" class="page-section section-dark">

		<div class="container">

			<?php
				
				$page_headline = get_field("page_headline");
				$page_subheadline = get_field("page_subheadline");

			?>

			<?php if($page_headline || $page_subheadline) : ?>

				<div class="row">

					<div class="span12">
						
						<?php if($page_headline){?><h1 class="section-title"><?= $page_headline; ?></h1><?php } ?>

						<?php if($page_subheadline){?><div class="lead main"><?= $page_subheadline; ?></div><?php } ?>

					</div>

				</div>

			<?php endif; ?>

		</div>

	</section>

	<section id="references" class="page-section">

		<div class="container">

			<div class="row">

				<div class="span12">
					
					<div class="portfolio col-4">

					<?php foreach (get_field("references") as $reference) : ?>
										
						<span class="item">
							
							<figure>

								<a href="#!">

									<img src="<?= $reference['url']; ?>" alt="<?= $reference['alt']; ?>" height="<?= $reference['height']; ?>" width="<?= $reference['width']; ?>"/>

								</a>	

							</figure>

						</span>

					<?php endforeach; ?>

					</div>

				</div>

			</div>

		</div>

	</section>

<?php get_footer(); ?>