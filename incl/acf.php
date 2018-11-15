<?php
  if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
      'page_title' => 'JSON-LD tool',
      'menu_title' => 'JSON-LD tool',
      'menu_slug' => 'schema-markup-tool',
      'capability' => 'edit_posts',
      'parent_slug' => '',
      'position' => 25,
      'icon_url' => 'dashicons-editor-code'
    ));
  }
 ?>
