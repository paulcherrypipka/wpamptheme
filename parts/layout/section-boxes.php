<?php 
	$section_id = get_sub_field('section_id'); 
	$section_id = (!empty($section_id)) ? 'id="'.$section_id.'"' : '';
?>

<section <?= $section_id; ?> class="page-section section-boxes">
	<div class="container">

		<?php $count=0; ?>
	
		<?php if( have_rows('boxes') ): ?>
		    <?php while ( have_rows('boxes') ) : the_row(); ?>

		    	<?php
		    		// $logo = get_sub_field('logo');
		    		$description = get_sub_field('description');
		    		$image = get_sub_field('image');

		    	?>

				 <div class="row-tight row-boxes">
				 	<div class="span6 span-text">
				 		<div class="wrap">
				 			<?= $description; ?>
				 		</div>
				 		<div class="triangle"></div>
				 	</div>
				 	<div class="span6 span-image"><div class="wrap" style="background-image: url(<?= $image['url'];?>);">
				 		<img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" title="<?= $image['title']; ?>" />
				 	</div></div>
				 </div>

			<?php endwhile; ?>
		<?php endif ;?>
	</div>
</section>