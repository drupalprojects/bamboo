<?php

/**
 * @file
 * Theme setting callbacks for the bamboo theme.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function bamboo_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['bamboo_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('bamboo Theme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );

  $form['bamboo_settings']['breadcrumbs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumbs in a page'),
    '#default_value' => theme_get_setting('breadcrumbs', 'bamboo'),
    '#description' => t("Check this option to show breadcrumbs in page. Uncheck to hide."),
  );

  $form['bamboo_settings']['general_settings']['theme_bg_config']['theme_bg'] = array(
    '#type' => 'select',
    '#title' => t('Choose a background'),
    '#default_value' => theme_get_setting('theme_bg'),
    '#options' => array(
      'light_gray' => t('Light gray'),
      'med_gray' => t('Medium gray'),
      'light_fabric' => t('Light fabric'),
      'dark_linen' => t('Dark linen'),
      'light_cloth' => t('Light cloth'),
      'tiles' => t('Tiles'),
      'retro' => t('Retro'),
    ),
  );

  $form['bamboo_settings']['general_settings']['theme_color_config']['theme_color_palette'] = array(
    '#type' => 'select',
    '#title' => t('Choose a color palette'),
    '#default_value' => theme_get_setting('theme_color_palette'),
    '#options' => array(
      'green_bamboo' => t('Green bamboo'),
      'warm_purple' => t('Warm purple'),
      'dark_turquoise' => t('Dark turquoise'),
    ),
  );

  $form['bamboo_settings']['general_settings']['header_font_style'] = array(
    '#type' => 'select',
    '#title' => t('Choose a header font style'),
    '#default_value' => theme_get_setting('header_font_style'),
    '#options' => array(
      'sans_serif' => t('Sans-Serif'),
      'serif' => t('Serif'),
    ),
  );
}
