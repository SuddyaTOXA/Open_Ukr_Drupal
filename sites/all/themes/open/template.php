<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function open_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  open_preprocess_html($variables, $hook);
  open_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function open_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function open_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function open_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // open_preprocess_node_page() or open_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function open_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function open_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function open_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */

function open_preprocess_page(&$variables, $hook) {
  drupal_add_js('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
      array('type' => 'external', 'scope' => 'footer', 'weight' => 1));
  drupal_add_js(drupal_get_path('theme','open') . '/js/jquery.placeholder.js',
      array('type' => 'file', 'scope' => 'footer', 'weight' => 2));
  drupal_add_js(drupal_get_path('theme','open') . '/js/uisearch.js',
      array('type' => 'file', 'scope' => 'footer', 'weight' => 2));

  if (drupal_is_front_page()) {
    drupal_add_css(drupal_get_path('theme','open') . '/css/responsiveslides.css');

    drupal_add_js(drupal_get_path('theme','open') . '/js/responsiveslides.min.js',
        array('type' => 'file', 'scope' => 'footer', 'weight' => 3));
    drupal_add_js(drupal_get_path('theme','open') . '/js/yt.preview.js',
        array('type' => 'file', 'scope' => 'footer', 'weight' => 4));
  }

  if (arg(0) == 'culture' || arg(0) == 'religion' || arg(0) == 'how') {
    drupal_add_css(drupal_get_path('theme','open') . '/css/slick.css');
    drupal_add_css(drupal_get_path('theme','open') . '/css/slick-theme.css');

    drupal_add_js(drupal_get_path('theme','open') . '/js/slick.min.js',
        array('type' => 'file', 'scope' => 'footer', 'weight' => 3));
  }

  drupal_add_js('https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false',
      array('type' => 'external', 'scope' => 'footer', 'weight' => 5));
  drupal_add_js(drupal_get_path('theme','open') . '/js/mapJS.js',
      array('type' => 'file', 'scope' => 'footer', 'weight' => 6));

  
  // Primary nav.
  $variables['primary_nav'] = FALSE;
  if ($variables['main_menu']) {
  // Build links.
    $variables['primary_nav'] = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
  // Provide default theme wrapper function.
    $variables['primary_nav']['#theme_wrappers'] = array('menu_tree__primary');
  }
}

/**
* Theme wrapper function for the primary menu links
*/
function open_menu_tree__primary(&$variables) {
  return '<ul>' . $variables['tree'] . '</ul>';
}

//function open_menu_tree($variables) {
//  return '<ul class="sub-menu">' . $variables['tree'] . '</ul>';
//}
//
//function open_menu_link(array $variables) {
//  $element = $variables['element'];
//  $sub_menu = '';
//
//  if ($element['#below']) {
//    $sub_menu = drupal_render($element['#below']);
//  }
//  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
//  return '<li>' . $output . $sub_menu . "</li>\n";
//}
