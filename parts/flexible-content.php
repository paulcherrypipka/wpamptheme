<?php 

	if (have_rows('content_builder')) :
		while (have_rows('content_builder')) : the_row();

			$layout = get_row_layout();
			$layout = str_replace('_', '-', $layout);

			include( locate_template( 'parts/layout/'. $layout .'.php' ) );

		endwhile;
	endif;