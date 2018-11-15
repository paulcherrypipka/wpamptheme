<?php

function custom_rewrite_basic() {

  add_rewrite_rule('nyheter/([^/]*)/view-all/?','index.php?page_id=1927&viewalcat=$matches[1]','top');
  add_rewrite_rule('([^/]*)/view-all/?','index.php?page_id=1927&viewalcat=$matches[1]','top');

}

add_action('init', 'custom_rewrite_basic');

function custom_rewrite_tag() {

  add_rewrite_tag('%viewalcat%', '([^&]+)');

}

add_action('init', 'custom_rewrite_tag', 10, 0);