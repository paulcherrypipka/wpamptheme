<?php 

	if (is_front_page()) {
		$front_page_id = $post->ID;
	} else {
		$front_page_id = get_option('page_on_front');
	}

	$services_section = get_field("section_services", $front_page_id); 
	$services_section = $services_section[0];

?>

	<section id="our-services" class="page-section">

		<div class="container">
			
			<div class="row">

				<div class="span12">
					
					<h3 class="section-title text-center"><?= $services_section["headline"]; ?></h3>

					<div class="lead text-center"><?= $services_section["subheadline"]; ?></div>

				</div>

			</div>

			<div class="row">

				<?php $count = 0; $last = end($services_section["services"]); ?>

				<?php foreach ($services_section["services"] as $service) : ?>

					<div class="span4">

						<div class="services-2">

							<div class="icon">
								
								<img src="<?= $service['icon']['sizes']['medium']; ?>" height="<?= $service['icon']['sizes']['medium-height']; ?>" width="<?= $service['icon']['sizes']['medium-width']; ?>" alt="$service['icon']['alt']; ?>"/>

							</div>

							<div class="text">

								<h5><a href="<?= $service['url']; ?>" title="<?= $service['title']; ?>"><?= $service["title"]; ?></a></h5>

								<p><?= $service["description"]; ?></p>

							</div>

						</div>

					</div>

					<?php if ($count == 2 && $service !== $last) : echo '</div><div class="row">'; $count = 0; else : $count++; endif; ?>
					
				<?php endforeach; ?>

			</div>

		</div>

	</section>