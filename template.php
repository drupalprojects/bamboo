<?php

/**
 * @file
 * Custom functions for the theme
 */

/**
 * Implements hook_html_head_alter().
 */
function bamboo_html_head_alter(&$head_elements) {
  // Overwrite default meta character tag with HTML5 version.
  $head_elements['system_meta_content_type']['#attributes'] = array(
    'charset' => 'utf-8',
  );
}

/**
 * Insert themed breadcrumb page navigation at top of the node content.
 */
function bamboo_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    // Use CSS to hide titile .element-invisible.
    $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';
    // Comment below line to hide current page to breadcrumb.
    $breadcrumb[] = drupal_get_title();
    $output .= '<nav class="breadcrumb">' . implode(' » ', $breadcrumb) . '</nav>';
    return $output;
  }
}

/**
 * Override or insert variables into the page template.
 */
function bamboo_preprocess_page(&$variables) {
  if (isset($variables['main_menu'])) {
    $variables['main_menu'] = theme('links__system_main_menu', array(
      'links' => $variables['main_menu'],
      'attributes' => array(
        'class' => array('links', 'main-menu', 'clearfix'),
      ),
      'heading' => array(
        'text' => t('Main menu'),
        'level' => 'h2',
        'class' => array('element-invisible'),
      ),
          ));
  }
  else {
    $variables['main_menu'] = FALSE;
  }

}

/**
 * Duplicate of theme_menu_local_tasks() but adds clearfix to tabs.
 */
function bamboo_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary clearfix">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary clearfix">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }
  return $output;
}

/**
 * Override or insert variables into the node template.
 */
function bamboo_preprocess_node(&$variables) {
  $node = $variables['node'];
  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
    $variables['classes_array'][] = 'node-full';
  }

  if ($variables['view_mode'] == 'teaser' && node_is_page($variables['node'])) {
    $variables['classes_array'][] = 'node-teaser';
  }

  // http://drupal.org/node/418894#comment-1419922
  // might use this...
  /* $node = $variables['node'];
  // Check the node  type to make sure
  // we have the one we want
  if ( $node->type == 'article' ) {
  // $variables['subtitle'] = $node->field_subtitle_value[0]['view'];
  $variables['submitted'] = t('Submitted by !username',
  array('!username' => $variables['name']));
  } */

  $variables['submitted'] = t('Submitted by !username',
    array('!username' => $variables['name']));
}

/**
 * Implements hook_page_alter().
 */
function bamboo_page_alter($page) {
  /* add the viewport meta tag which will render as:
   * <meta name="viewport" content="width=device-width,
   * initial-scale=1, maximum-scale=1"/>
   * see: https://developer.mozilla.org/en-US/docs/Mobile/Viewport_meta_tag
   * for docs
   */
  $viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1, maximum-scale=1',
    ),
  );
  drupal_add_html_head($viewport, 'viewport');
}

/**
 * Add javascript files for front-page jquery slideshow.
 */
if (drupal_is_front_page()) {
  drupal_add_js(drupal_get_path('theme', 'bamboo') . '/js/jquery.flexslider-min.js');

  // If alpha theme.
  if (theme_get_setting('choose_slideshow') == 'alpha') {
    drupal_add_css(drupal_get_path('theme', 'bamboo') . '/css/flexslider-alpha.css');
  }

  // If beta theme.
  if (theme_get_setting('choose_slideshow') == 'beta') {
    drupal_add_css(drupal_get_path('theme', 'bamboo') . '/css/flexslider-beta.css');
  }
}

/**
 * Preprocesses the wrapping HTML.
 *
 * @param array &$variables
 *   Template variables.
 */
function bamboo_preprocess_html(&$variables) {

  // Add IE 8 fixes style sheet.
  drupal_add_css(path_to_theme() . '/css/ie8-fixes.css',
    array(
      'group' => CSS_THEME,
      'browsers' =>
      array(
        'IE' => 'lte IE 8',
        '!IE' => FALSE),
      'preprocess' => FALSE));

  // Extra body classes for theme variables
  // The slideshow style.
  $file = theme_get_setting('choose_slideshow');
  $variables['classes_array'][] = drupal_html_class('slideshow-' . $file);

  // The background.
  // $file = theme_get_setting('theme_bg') . '-style';
  $file = theme_get_setting('theme_bg');
  /* drupal_add_css(path_to_theme() . '/css/'.
  $file, array('group' => CSS_THEME, 'weight' =>
  115,'browsers' => array(), 'preprocess' => FALSE)); */
  $variables['classes_array'][] = drupal_html_class('bg-' . $file);

  // The Color Palette.
  $file = theme_get_setting('theme_color_palette');
  $variables['classes_array'][] = drupal_html_class('color-palette-' . $file);

  // The header font style.
  $file = theme_get_setting('header_font_style');
  $variables['classes_array'][] = drupal_html_class('header-font-' . $file);

  if (!$variables['is_front']) {
    // Add unique class for each page.
    $path = drupal_get_path_alias($_GET['q']);
    // Add unique class for each website section.
    list($section,) = explode('/', $path, 2);
    $arg = explode('/', $_GET['q']);
    if ($arg[0] == 'node' && isset($arg[1])) {
      if ($arg[1] == 'add') {
        $section = 'node-add';
      }
      elseif (isset($arg[2]) && is_numeric($arg[1]) && ($arg[2] == 'edit' || $arg[2] == 'delete')) {
        $section = 'node-' . $arg[2];
      }
    }
    $variables['classes_array'][] = drupal_html_class('section-' . $section);
  }
}
