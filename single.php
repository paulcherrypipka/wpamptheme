<?php

get_header();

$reading_time = get_field('post_reading_time');
$reading_count = get_field('post_word_count');

?>

	<div class="page-section">

		<div class="container">

			<div class="row">

				<div class="span8 content">

					<article class="wrap-article">

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

							<h1><?php the_title(); ?></h1>

							<div class="meta">

								<?php $cat = get_the_category(); if($cat[0]->term_id == 23): ?>
									<?= get_the_category_list(); ?> - Nettrafikk
								<?php else: ?>
									<?= get_the_date('d/m/Y'); ?> - <?= get_the_category_list(); ?> - Nettrafikk
								<?php endif; ?>

								<?php if($reading_time && $reading_count){ ?>

									/ <?= $reading_time; ?> lesetid (<?= $reading_count; ?>)

								<?php } ?>

							 	<?php //echo do_shortcode('[ssba]'); ?>
                                <div class="ssba ssba-wrap">
                                    <div style="text-align:left">
                                        <a data-site="linkedin" class="ssba_linkedin_share ssba_share_link" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?= get_permalink() ?>" target="_blank">
                                            <img src="https://nettrafikk.no/wp-content/plugins/simple-share-buttons-adder/buttons/simple/linkedin.png" title="LinkedIn" class="ssba ssba-img" alt="Share on LinkedIn"/>
                                        </a>
                                        <a data-site="" class="ssba_facebook_share" href="https://www.facebook.com/sharer.php?u=<?= get_permalink() ?>" target="_blank">
                                            <img src="https://nettrafikk.no/wp-content/plugins/simple-share-buttons-adder/buttons/simple/facebook.png" title="Facebook" class="ssba ssba-img" alt="Share on Facebook"/>
                                        </a>
                                        <a data-site="" class="ssba_google_share" href="https://plus.google.com/share?url=<?= get_permalink() ?>" target="_blank">
                                            <img src="https://nettrafikk.no/wp-content/plugins/simple-share-buttons-adder/buttons/simple/google.png" title="Google+" class="ssba ssba-img" alt="Share on Google+"/>
                                        </a>
                                        <a data-site="" class="ssba_twitter_share" href="https://twitter.com/share?url=<?= get_permalink() ?>&amp;text=<?= get_the_title() ?>" target="_blank">
                                            <img src="https://nettrafikk.no/wp-content/plugins/simple-share-buttons-adder/buttons/simple/twitter.png" title="Twitter" class="ssba ssba-img" alt="Tweet about this on Twitter"/>
                                        </a>
                                    </div>
                                </div>

							</div>

							<?php the_content(); ?>

						<?php endwhile; endif; ?>

					</article>

					<?php get_template_part('parts/module', 'survey'); ?>

				</div>

				<div class="span4 sidebar">

					<?php get_sidebar('single'); ?>

				</div>

			</div>

		</div>

	</div>

<?php get_footer(); ?>
