<?php
	
	$page_headline = get_field("page_headline");
	$page_subheadline = get_field("page_subheadline");

?>

<?php if($page_headline || $page_subheadline) : ?>

	<div class="row">

		<div class="span12">
			
			<?php if($page_headline){?><h1 class="section-title text-center"><?= $page_headline; ?></h1><?php } ?>

			<?php if($page_subheadline){?><div class="lead text-center"><?= $page_subheadline; ?></div><?php } ?>

		</div>

	</div>

<?php endif; ?>