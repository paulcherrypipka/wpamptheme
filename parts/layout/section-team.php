<?php 
	$section_id = get_sub_field('section_id'); 
	$section_id = (!empty($section_id)) ? 'id="'.$section_id.'"' : '';
?>

<section <?= $section_id; ?> class="page-section section-team-grid">
	<div class="container">
		<h1 class="section-title text-center"><?= get_sub_field('headline'); ?></h1>
		<div class="section-wrap">

		<?php $team_peoples = get_sub_field('team_grid'); ?>
		<?php foreach ($team_peoples as $people) : ?>

			<?php 
				$image_url = $people['image']['url']; 
				$icon_url = $people['overlay_icon']['url'];
			?>
			
			<div class="team-grid">
				<div class="team-grid-wrap">
					<figure>
						<img src="<?= $image_url; ?>" alt="<?=$people['image']['alt'];?>" title="<?=$people['image']['title'];?>" />
						<div class="image-overlay" style="background-image: url(<?= $icon_url; ?>)"></div>
					</figure>
					<div class="meta">
						<div class="title"><?= $people['title']; ?></div>
						<div class="description"><?= $people['subtitle']; ?></div>
						<hr>
						<a href="tel:<?= $people['telephone']; ?>" title="Ring oss" alt="Ring oss">Tlf: <?= $people['telephone']; ?></a>
						<a href="mailto:<?= $people['email']; ?>" title="Send e-post" alt="Send e-post"><?= $people['email']; ?></a>
					</div>
				</div>
			</div>

		<?php endforeach; ?>

		</div>
	</div>
</section>