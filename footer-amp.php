</main>
<div class="site--bottom">

    <div id="bottom" class="page-section">

        <div class="container">

            <div class="row">

                <div class="span6">

                    <div class="partners">
                        <div>
                            <amp-img id="partner-google" src="<?= TEMPLATE_URL; ?>/img/partners/google-premier-partner.jpg"
                                     title="Nettrafikk har utmerkelse som Google Premier Partner"
                                     alt="Google Premier Partner Badge - Nettrafikk sitt partnernivå"
                                     width="210" height="72" layout="responsive"></amp-img>
                        </div>
                        <div>
                            <amp-img id="partner-brasok" src="<?= TEMPLATE_URL; ?>/img/partners/bra-sok-medlemsbedrift.jpg"
                                     title="Nettrafikk er medlem av bransjeorganisasjonen Bra Søk" alt="Bra Søk logo - Nettrafikk er en medlem her"
                                     width="151" height="85" layout="responsive"></amp-img>
                        </div>
                        <div>
                            <amp-img id="partner-inma" src="<?= TEMPLATE_URL; ?>/img/partners/inma-medlemsbedrift.jpg"
                                     title="Nettrafikk er en medlemsbedrift hos bransjeorganisasjonen INMA"
                                     alt="INMA logo - Nettrafikk er en medlemsbedrift"
                                     width="200" height="130" layout="responsive"></amp-img>
                        </div>
                    </div>
                    <a title="Nettrafikks utmerkelser og medlemskap" href="https://nettrafikk.no/om-nettrafikk/">Bli bedre kjent med
                        Nettrafikk.</a>

                    <div class="row">
                        <div class="span12">
                            <amp-img width="120px" height="150px" src="/wp-content/themes/nettrafikk/img/Årets Byrå - 2017.svg" ></amp-img>
                            <amp-img width="120px" height="150px" src="/wp-content/themes/nettrafikk/img/Årets Byrå - 2018.svg"></amp-img>
                        </div>
                    </div>

                </div>

                <div class="span6">

					<?php dynamic_sidebar( 'footer_b' ); ?>

                </div>

                <div class="span4">

					<?php // disable form for AMP
					// dynamic_sidebar( 'footer_c' ); ?>

                </div>

            </div>

        </div>

    </div>

    <footer id="footer">

        <div class="container">

            <p> © Nettrafikk Alle Rettigheter <?= date( 'Y' ); ?></p>

        </div>

    </footer>

</div>
</div>
<!-- End Document
================================================== -->
</body>
</html>