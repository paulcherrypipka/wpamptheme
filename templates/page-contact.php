<?php /* Template Name: Page contact */ ?>

<?php get_header(); ?>

	<section id="contact-form" class="page-section">

		<div class="container">

			<div class="row">

				<div class="span12">
					
					<h1 class="section-title text-center">Kontakt Oss</h1>

					<div class="lead text-center">Vi kommer tilbake til deg innen 24 timer!</div>

				</div>

			</div>

			<div class="row">

				<div class="span4 sidebar">
					
					<!-- <h3>Kontaktinformasjon</h3>

					<p>Du kan også kontakte oss på telefon eller komme innom for et&nbsp;slag biljard og en hyggelig, uforpliktende prat!</p>

					<div class="contact-info">

						Nedre gate 5, 0551 Oslo, Norway<br>
						<a alt="Ring oss" title="Ring oss" href="tel:+47 21 39 94 11">+47 21 39 94 11</a><br>
						<a alt="Send e-post" title="Send e-post" href="mailto:post@nettrafikk.no">post@nettrafikk.no</a>

					</div>

					<img title="Kontakt oss" alt="Kontakt oss" src="<?= TEMPLATE_URL; ?>img/Kontakt-oss2.jpg"> -->

					<?php dynamic_sidebar('sidebar_contact'); ?>

				</div>

				<div class="span8 content">
					
					<?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>

				</div>

			</div>

		</div>

	</section>

	<section id="map" style="background-image:url(<?= TEMPLATE_URL; ?>img/map.jpg)">

	</section>

<?php get_footer(); ?>