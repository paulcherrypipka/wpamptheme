<?php 

	$front_page_id = get_option('page_on_front');

	$testimonial_section = get_field("section_testimonials", $front_page_id); 
	$testimonial_section = $testimonial_section[0];

?>

<section id="testimonial-timeline" class="page-section">
		
	<div class="container">
		
		<div class="row">

			<div class="span12">
				
				<h3 class="section-title text-center"><?= $testimonial_section["headline"]; ?></h3>

				<div class="lead text-center"><?= $testimonial_section["subheadline"]; ?></div>

			</div>

		</div>

		<div class="timeline">

			<?php foreach ($testimonial_section["testimonials"] as $testimonial) : ?>
				
				<div class="timeline-block">

					<div class="timeline-img">

                        <amp-img src="<?= $testimonial['image']['sizes']['thumbnail']; ?>" height="80" width="80" alt="<?= $testimonial['image']['alt']; ?>"></amp-img>

					</div>

					<div class="timeline-content">

						<p><?= $testimonial["text"]; ?></p>

						<div class="timeline-info">

							<h4><?= $testimonial["title"]; ?></h4>

							<div class="title"><?= $testimonial["subtitle"]; ?></div>

						</div>

					</div>

				</div>

			<?php endforeach; ?>

		</div>

	</div>

</section>