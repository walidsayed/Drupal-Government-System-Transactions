<?php

function master_preprocess_page(&$vars) {

  if(drupal_is_front_page()) {
    unset($vars['page']['content']['system_main']['default_message']);
  }

  if (module_exists('color')) {
    _color_page_alter($vars);
  }

  $slogan_text = $vars['site_slogan'];
  $site_name_text = $vars['site_name'];

  $gmass = array(
    "twitter",
    "facebook",
    "flickr",
    "linkedin",
    "youtube",
    "pinterest",
    "google",
    "dribbble",
    "vimeo",
    "instagram",
    "vk",
    "show_hide_email",
    "email_textfield",
    "show_hide_icon",
    "show_hide_copyright",
    "copyright_url",
    "copyright_developedby"
  );

  foreach($gmass as $value) {
    $vars[$value] = theme_get_setting($value, 'master');
  }

}


function master_links__system_main_menu($vars) {
    $pid = variable_get('menu_main_links_source', 'main-menu');
    $tree = menu_tree($pid);
    return drupal_render($tree);
}
function master_links__system_top_menu($vars) {
    $pid = variable_get('menu_top_links_source', 'top-menu');
    $tree = menu_tree($pid);
    return drupal_render($tree);
}
function master_links__system_secondary_menu(&$vars) {
    $pid = variable_get('menu_secondary_links_source', 'menu-secondary-menu');
    $tree = menu_tree($pid);
    return drupal_render($tree);
}
/**
 * Override or insert fields output node
 */
function master_get_field_value($vars, $node) {
  $icon = field_get_items('node', $node, $vars);
  $icon_show = field_view_value('node', $node, $vars, $icon[0]);
  return drupal_render($icon_show);
}
function master_process_html(&$vars) {
  if (module_exists('color')) {
    _color_html_alter($vars);
  }

  $tmas = array(
    "b_decor",
    "m_decor",
    "f_decor",
    "b_decor_hover",
    "m_decor_hover",
    "f_decor_hover",
    "layout_pattern",
    "body_font",
    "main_menu_font",
    "body_links_font",
    "footer_links_font",
    "h1_font",
    "h2_font",
    "h3_font",
    "h4_font",
    "h5_font",
    "h6_font"
    );
   foreach($tmas as $value) {
    $vars[$value] = theme_get_setting($value, 'master');
  }

}