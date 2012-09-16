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

  $form['bamboo_settings']['general_settings']['choose_slideshow'] = array(
    '#type' => 'select',
    '#title' => t('Choose a responsive slideshow'),
    '#default_value' => theme_get_setting('choose_slideshow'),
    '#options' => array(
      'alpha' => t('Full width image'),
      'beta' => t('Image left, text right'),
    ),
  );

  $form['bamboo_settings']['slideshow'] = array(
    '#type' => 'fieldset',
    '#title' => t('Front page slideshow'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['bamboo_settings']['slideshow']['slideshow_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show slideshow'),
    '#default_value' => theme_get_setting('slideshow_display', 'bamboo'),
    '#description' => t("Check this option to show slideshow in front page. Uncheck to hide."),
  );
  $form['bamboo_settings']['slideshow']['slide'] = array(
    '#markup' => t('You can change the title, description, and url of each slide in the following
slide setting fieldsets.'),
  );
  $form['bamboo_settings']['slideshow']['slide1'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 1'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['bamboo_settings']['slideshow']['slide1']['slide1_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide1_head', 'bamboo'),
  );
  $form['bamboo_settings']['slideshow']['slide1']['slide1_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide1_desc', 'bamboo'),
  );
  $form['bamboo_settings']['slideshow']['slide1']['slide1_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide1_url', 'bamboo'),
  );
  $form['bamboo_settings']['slideshow']['slide2'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 2'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['bamboo_settings']['slideshow']['slide2']['slide2_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide2_head', 'bamboo'),
  );
  $form['bamboo_settings']['slideshow']['slide2']['slide2_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide2_desc', 'bamboo'),
  );
  $form['bamboo_settings']['slideshow']['slide2']['slide2_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide2_url', 'bamboo'),
  );
  $form['bamboo_settings']['slideshow']['slide3'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 3'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['bamboo_settings']['slideshow']['slide3']['slide3_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide3_head', 'bamboo'),
  );
  $form['bamboo_settings']['slideshow']['slide3']['slide3_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide3_desc', 'bamboo'),
  );
  $form['bamboo_settings']['slideshow']['slide3']['slide3_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide3_url', 'bamboo'),
  );
  $form['bamboo_settings']['slideshow']['slideimage'] = array(
    '#markup' => t('To change the Slide Images, Replace the slide-image-1.jpg, slide-image-2.jpg
and slide-image-3.jpg in the images folder of the bamboo theme folder.'),
  );
}
