<?php 

	$quote_section = get_field("team_section"); 
	$quote_section = $quote_section[0];
	
?>

<?php if($quote_section): ?>

	<section id="meet-the-team" class="page-section">

		<div class="container">

			<div class="row">

				<div class="span12">
					
					<h1 class="section-title text-center"><?= $quote_section["headline"]; ?></h1>

					<div class="lead text-center"></div>

				</div>

			</div>

			<div class="row">

				<?php $count = 0; $last = end($quote_section["members"]); ?>

				<?php foreach ($quote_section["members"] as $member) : ?>

					<div class="span2 team-grid">

						<figure>

							<a href="#meet-the-team">

								<div class="text-overlay" style="background-image: url(<?= $member['overlay_icon']['url']; ?>)"></div>
								
								<img src="<?= $member['image']['url']; ?>" height="<?= $member['image']['height']; ?>" width="<?= $member['image']['width']; ?>"/>

							</a>

						</figure>

						<div class="image-caption text-center">

							<h4 class="post-title"><a href="#meet-the-team"><?= $member["name"]; ?></a></h4>

							<div class="meta">

								<?= $member["info"]; ?><br>

								<a href="tel: <?= $member['phone']; ?>" title="Ring oss og Send e-post" alt="Ring oss og Send e-post">Tlf: <?= $member["phone"]; ?> </a>

								<a href="mailto:<?= $member["email"]; ?>" title="Ring oss og Send e-post" alt="Ring oss og Send e-post"> <?= $member["email"]; ?> </a></div>

						</div>

					</div>

					<?php if ($count == 5 && $service !== $last) : echo '</div><div class="row">'; $count = 0; else : $count++; endif; ?>
					
				<?php endforeach; ?>

			</div>

		</div>

	</section>

<?php endif; ?>