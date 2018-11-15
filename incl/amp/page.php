<?php get_header( 'amp' ); ?>
    <section class="page-section">

        <div class="container">

            <div class="row">

                <div class="span8 content">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <h1><?php the_title(); ?></h1>

						<?php
						$content = apply_filters( 'the_content', get_the_content() );
						$content = amp_the_content_filter( $content );
						echo $content;
						?>

					<?php endwhile; endif; ?>

                </div>

                <div class="span4 sidebar">
					<?php get_sidebar( "amp" ); ?>

                </div>

            </div>

        </div>

    </section>
<?php get_footer( 'amp' ); ?>