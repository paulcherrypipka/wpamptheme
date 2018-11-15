<?php 
	$section_id = get_sub_field('section_id'); 
	$section_id = (!empty($section_id)) ? 'id="'.$section_id.'"' : '';
?>

<section <?= $section_id; ?> class="page-section section-simple-boxes">
	<div class="container">

		<h1 class="section-title text-center"><?= get_sub_field('headline'); ?></h1>

		<?php $box_count = get_sub_field('boxes_count'); ?>
	
		<?php if( have_rows('boxes') ): ?>
		    <?php while ( have_rows('boxes') ) : the_row(); ?>

				 <div class="row-tight row-boxes">

				 	<?php if($box_count==2){ ?>

					 	<div class="span6 span-text">
					 		<div class="wrap">
					 			<?= get_sub_field('col_left'); ?>	
					 		</div>
					 	</div>
					 	<div class="span6 span-text">
					 		<div class="wrap">
					 			<?= get_sub_field('col_right'); ?>	
					 		</div>
					 	</div>

					 <?php }else{ ?>

					 	<div class="span12 span-text">
					 		<div class="wrap">
					 			<?= get_sub_field('col_left'); ?>	
					 		</div>
					 	</div>

					 <?php } ?>

				 </div>

			<?php endwhile; ?>
		<?php endif ;?>
	</div>
</section>