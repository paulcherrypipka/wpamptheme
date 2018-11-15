<?php
$isAMP = get_query_var( 'amp' );
if (!$isAMP) :
?>
    <script>
        jQuery(document).ready(function ($) {

            var panels = $('.ld-panels .ld-panel');
            var tabs = $('.ld-tabs .ld-tab');
            var tabsMobile = $('.ld-tabs-mobile');
            panels.first().addClass('active');

            tabs.on('click', function () {
                var tab = $(this);
                var index = tab.index();
                tabs.removeClass('active');
                tab.addClass('active');
                panels.removeClass('active');
                panels.eq(index).addClass('active');
            });

            tabsMobile.on('change', function () {
                var tab = $(this);
                var index = $('select', tab).prop('selectedIndex');
                tabs.removeClass('active');
                panels.removeClass('active');
                panels.eq(index).addClass('active');
            });
        });
    </script>
    <style>
        .ld-container {
            margin-bottom: 20px;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }

        .ld-tabs-mobile select:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.11);
        }

        .ld-tabs {
            display: none;
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

        }

        .ld-panels .ld-panel {
            display: none;
        }

        .ld-panels .ld-panel pre {
            font-size: 10px;
            line-height: 1.4;
            font-family: courier;
            overflow: scroll;
            /*border: 5px solid #72b6af;*/
            background: rgba(0, 0, 0, 0.03);
            padding: 10px 16px;
            width: 100%;
        }

        .ld-panels .ld-panel.active {
            display: block;
        }

        @media screen and (min-width: 769px) {
            .ld-container {
                width: 100%;
                display: table;
                table-layout: fixed;
            }

            .ld-tabs-mobile {
                display: none;
            }

            .ld-tabs {
                width: 25%;
                vertical-align: top;
                display: table-cell;
            }

            .ld-panels {
                width: 75%;
                display: table-cell;
            }
            .ld-panels .ld-panel pre {
                font-size: 12px;
            }
        }
    </style>

<div class="ld-container">
    <div class="ld-tabs">
		<?php
		if ( have_rows( 'ld_item', 'option' ) ):
			while ( have_rows( 'ld_item', 'option' ) ) : the_row(); ?>
                <div class="ld-tab <?php if ( get_row_index() == 1 ) {
					echo "active";
				} ?>"><?php the_sub_field( 'label', 'option' ); ?></div>
			<?php
			endwhile;
		endif;
		?>
    </div>

    <div class="ld-panels">
		<?php
		if ( have_rows( 'ld_item', 'option' ) ):
			while ( have_rows( 'ld_item', 'option' ) ) : the_row(); ?>
                <div class="ld-panel">
                    <pre><?php the_sub_field( 'code', 'option' ); ?></pre>
                </div>
			<?php
			endwhile;
		endif;
		?>
    </div>
</div>
<?php endif; ?>