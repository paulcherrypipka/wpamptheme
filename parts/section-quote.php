<?php 

	$quote_section = get_field("quote_section"); 
	$quote_section = $quote_section[0];
	
?>

<?php if ($quote_section) : ?>

	<section id="parallax-testimonial" class="parallax page-section" style="background-image: url(<?= $quote_section["section_image"]["url"]; ?>);">

		<div class="container">

			<div class="row">

				<div class="span12">
					
					<h1 class="section-title text-center"><?= $quote_section["headline"]; ?></h1>

					<div class="lead text-center"></div>

					<div class="testimonials thin">

						<div class="item">

							<blockquote>

								<p><?= $quote_section["quote_content"]; ?></p>

								<cite><?= $quote_section["quote_sign"]; ?></cite>

							</blockquote>

						</div>

					</div>

				</div>

			</div>

		</div>	

	</section>

<?php endif; ?>