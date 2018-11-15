			<?php is_front_page() ? get_template_part("parts/section", "cta") : ''; ?>

		</main>

		<div class="site--bottom">
		
			<div id="bottom" class="page-section">

				<div class="container">

					<div class="row">

						<div class="span4">

							<div class="partners">

								<img id="partner-google" src="<?=TEMPLATE_URL;?>/img/partners/google-premier-partner.jpg" title="Nettrafikk har utmerkelse som Google Premier Partner" alt="Google Premier Partner Badge - Nettrafikk sitt partnernivå" />

								<img id="partner-brasok" src="<?=TEMPLATE_URL;?>/img/partners/bra-sok-medlemsbedrift.jpg" title="Nettrafikk er medlem av bransjeorganisasjonen Bra Søk" alt="Bra Søk logo - Nettrafikk er en medlem her" />

								<img id="partner-inma" src="<?=TEMPLATE_URL;?>/img/partners/inma-medlemsbedrift.jpg" title="Nettrafikk er en medlemsbedrift hos bransjeorganisasjonen INMA" alt="INMA logo - Nettrafikk er en medlemsbedrift" />

								<a title="Nettrafikks utmerkelser og medlemskap" href="https://nettrafikk.no/om-nettrafikk/">Bli bedre kjent med Nettrafikk.</a>

							</div>

                            <div class="row">
                                <div class="span6">
                                    <img src="/wp-content/themes/nettrafikk/img/Årets Byrå - 2017.svg" type="image/svg+xml">

                                </div>
                                <div class="span6">
                                    <img src="/wp-content/themes/nettrafikk/img/Årets Byrå - 2018.svg">
                                </div>
                            </div>

						</div>

						<div class="span4">
							
							<?php dynamic_sidebar('footer_b'); ?>

						</div>

						<div class="span4">
							
							<?php dynamic_sidebar('footer_c'); ?>

						</div>

					</div>

				</div>

			</div>

			<footer id="footer">

				<div class="container">
				
					<p> Denne siden benytter informasjonskapsler (cookies). <a href="/personvernerklaering/" style="color:#72b6af;">Les mer om informasjonskapsler og personvern her.</a></p>
					<p> © Nettrafikk Alle Rettigheter <?= date('Y'); ?></p>

				</div>

			</footer>

		</div>

	</div>

	<div class="fixed-bar">
		<div class="fixed-bar-item">
			<a href="tel:+4721399411">
				<i class="fa fa-phone" aria-hidden="true"></i>
                Ring oss
			</a>
		</div>	
		<div class="fixed-bar-item">
			<a href="mailto:post@nettrafikk.no">
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
                Send en e-post
			</a>
		</div>
		<!-- <div class="fixed-bar-item">
			<a href="<?= SITE_URL; ?>/kontakt-meg">
				<i class="fa fa-user" aria-hidden="true"></i>
                Kontakt meg
			</a>
		</div> -->
	</div>

<!-- End Document
================================================== -->

<!-- HTML 5 SUPPORT
================================================== -->
	<!--[if lt IE 9]>
		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->


<?php wp_footer(); ?>

</body>
</html>