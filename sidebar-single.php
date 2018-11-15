
<?php
global $wp_query;
$thePostID = $wp_query->post->ID;

if( have_rows('article_navigation', $thePostID) ): ?>
<div class="article-summary">
<h5 class="widget-title">Article summary</h5>
<ul>
<?php
  while ( have_rows('article_navigation', $thePostID) ) : the_row(); ?>
  <li><a href="#<?php the_sub_field('anchor', $thePostID);?>"><?php the_sub_field('title', $thePostID);?></a></li>
  <?php endwhile; ?>
</ul>
</div>
<?php endif; ?>


<?php
if ($thePostID === 3146) {
	dynamic_sidebar('sidebar_english');
} else {
    dynamic_sidebar('sidebar_single');
}

?>
