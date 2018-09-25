<?php
/**
 * @file
 * Contains theme override functions and preprocess functions for the theme.
 */

/**
 * Implements hook_html_head_alter().
 */
function opencharity_html_head_alter(&$head_elements) {
  $head_elements['system_meta_content_type']['#attributes'] = array(
    'charset' => 'utf-8',
  );
}

function opencharity_preprocess_html(&$vars) {
  $viewport = array(
   '#tag' => 'meta',
   '#attributes' => array(
     'name' => 'viewport',
     'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0',
   ),
  );
  drupal_add_html_head($viewport, 'viewport');
}

/**
 * Override or insert variables into the page template.
 */
function opencharity_preprocess_page(&$vars) {
  $vars['twitter'] = theme_get_setting('twitter', 'opencharity');
  $vars['facebook'] = theme_get_setting('facebook', 'opencharity');
  $vars['googleplus'] = theme_get_setting('googleplus', 'opencharity');
  $vars['display'] = theme_get_setting('display', 'opencharity');
  $vars['footer_copyright'] = theme_get_setting('footer_copyright');
  $vars['footer_developed'] = theme_get_setting('footer_developed');
  $vars['footer_developedby_url'] = filter_xss_admin(theme_get_setting('footer_developedby_url', 'opencharity'));
  $vars['footer_developedby'] = filter_xss_admin(theme_get_setting('footer_developedby', 'opencharity'));

  if (drupal_is_front_page()) { 
    unset($vars['page']['content']['system_main']['default_message']);
  }
}

function opencharity_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];

  if (!empty($breadcrumb)) {
    // Provide a navigational heading to give context for breadcrumb links to
    // screen-reader users. Make the heading invisible with .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    $output .= '' . implode(' &nbsp;»&nbsp; ', $breadcrumb) . '';
    return $output;
  }
}
