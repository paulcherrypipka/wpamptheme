<?php 

get_header(); 

$reading_time = get_field('post_reading_time');
$reading_count = get_field('post_word_count');

?>

	<div class="page-section">

		<div class="container">

			<div class="row">

				<div class="span8 content">

					<article class="wrap-article article-404">						

						<h1><img src="<?=TEMPLATE_URL;?>/img/flag-no.png"/>Beklager, her har noe gått galt</h1>

						<p>Du har dessverre klart å navigere til en side som ikke finnes. Årsakene til dette kan være flere, og vanskelig å få oversikt over. Om du vil hjelpe oss å gjøre våre nettsider bedre – send gjerne en epost til <a href="mailto:post@nettrafikk.no">post@nettrafikk.no</a> med en rask forklaring om hvordan du havnet her - slik at vi kan få dette utbedret og spare fremtidige besøkende fra å oppleve det samme.</p>

						<p>Benytt gjerne menystrukturen over i tilfelle vi bare har flyttet informasjonen du egentlig ønsket å finne. Om du ikke finner informasjonen du leter etter der, kan du også ringe oss på <a href="tel:+47 21 39 94 11">+47 21 39 94 11</a> - så vil vi kunne svare på eventuelle spørsmål du har.</p>

						<h2><img src="<?=TEMPLATE_URL;?>/img/flag-gb.png"/>Sorry, something went wrong</h2>

						<p>You have navigated to a site that we don't have. There can be several reasons why this has happened, which isn't always easy for us to keep track of. If you wish to help make our website better, please send an email to <a href="mailto:post@nettrafikk.no">post@nettrafikk.no</a> with a summary of how you landed on this page. Then we can make improvements to make sure fewer future visitors will share your current experience.</p>

						<p>Please feel free to use the menu-navigation to check if we might have just moved the content you were seeking. If you can't find it there - you can call us om <a href="tel:+47 21 39 94 11">+47 21 39 94 11</a> and we will do our best to help with any questions you might have.</p>
					
					</article>


				</div>

				<div class="span4 sidebar">

					<?php get_sidebar('single'); ?>

				</div>

			</div>

		</div>

	</div>

<style type="text/css">
	.article-404 img {
		display: inline-block;
		vertical-align: middle;
		margin: -4px 6px 0 0
	}
</style>

<?php get_footer(); ?>