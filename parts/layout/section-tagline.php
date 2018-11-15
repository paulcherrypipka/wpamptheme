<section id="tagline" class="page-section section-tagline">
	<div class="container">
		<h1 class="section-title text-center">
			<?php 

				$cols = get_sub_field('cols');
				echo get_sub_field('left_col'); 

				if ($cols==true) :
					echo '<span class="divider">/</span>'. get_sub_field('right_col');
				endif;

			?>

		</h1>
	</div>
</section>