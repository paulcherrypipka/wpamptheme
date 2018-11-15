<?php /* Template Name: Page JSON-LD */ ?>

<?php get_header(); ?>
<?php
$isAMP = get_query_var( 'amp' );
if ( ! $isAMP ) :
	?>
    <script>
        jQuery(document).ready(function ($) {

            var panels = $('.ld-panels .ld-panel');
            var tabs = $('.ld-tabs .ld-tab');
            panels.first().addClass('active');

            tabs.on('click', function () {
                var tab = $(this);
                var index = tab.index();
                tabs.removeClass('active');
                tab.addClass('active');
                panels.removeClass('active');
                panels.eq(index).addClass('active');
            });
        });
    </script>
    <style>
        .ld-container {
            width: 100%;
            display: table;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }

        .ld-tabs {
            width: 25%;
            vertical-align: top;
            display: table-cell;
        }

        .ld-tabs .ld-tab {
            cursor: pointer;
            padding: 7px 10px;
            background: #fff;
            display: block;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .ld-tabs .ld-tab:hover {
            background: rgba(0, 0, 0, 0.05);
        }

        .ld-tabs .ld-tab.active {
            color: #fff;
            font-weight: bold;
            background: #72b6af;
        }

        .ld-panels {
            width: 75%;
            display: table-cell;
        }

        .ld-panels .ld-panel {
            display: none;
        }

        .ld-panels .ld-panel pre {
            font-size: 12px;
            line-height: 1.4;
            font-family: courier;
            /*border: 5px solid #72b6af;*/
            background: rgba(0, 0, 0, 0.03);
            padding: 10px 16px;
            width: 100%;
        }

        .ld-panels .ld-panel.active {
            display: block;
        }
    </style>
<?php endif; ?>

    <section id="om-nettrafikk" class="page-section">

        <div class="container">

			<?php get_template_part( "parts/section", "headlines" ); ?>

            <div class="row">

                <div class="span12 content">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; endif; ?>

					<?php if ( ! $isAMP ) : ?>
						<?= do_shortcode( "[schema-jsonld-generator]" ); ?>
					<?php endif; ?>
                </div>

            </div>

        </div>

    </section>

<?php get_template_part( "parts/section", "quote" ); ?>

<?php

//get_template_part("parts/section", "members");

?>


<?php get_footer(); ?>