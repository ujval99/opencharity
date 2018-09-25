<?php
/**
 * @file
 * Theme setting callbacks for the opencharity theme.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 */
function opencharity_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['opencharity_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('opencharity Theme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['opencharity_settings']['social'] = array(
    '#type' => 'fieldset',
    '#title' => t('Social Icon'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['opencharity_settings']['social']['display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show Social Icon'),
    '#default_value' => theme_get_setting('display', 'opencharity'),
    '#description'   => t("Check this option to show Social Icon. Uncheck to hide."),
  );
  $form['opencharity_settings']['social']['twitter'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter URL'),
    '#default_value' => theme_get_setting('twitter', 'opencharity'),
    '#description' => t("Enter your Twitter Profile URL. example:: http://www.xyz.com"),
  );
  $form['opencharity_settings']['social']['facebook'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook URL'),
    '#default_value' => theme_get_setting('facebook', 'opencharity'),
    '#description'   => t("Enter your Facebook Profile URL. example:: http://www.xyz.com"),
  );
  $form['opencharity_settings']['social']['googleplus'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Plus URL'),
    '#default_value' => theme_get_setting('googleplus', 'opencharity'),
    '#description'   => t("Enter your Google Plus Profile URL. example:: http://www.xyz.com"),
  );
  $form['opencharity_settings']['footer'] = array(
    '#type' => 'fieldset',
    '#title' => t('Footer'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['opencharity_settings']['footer']['footer_copyright'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show copyright text in footer'),
    '#default_value' => theme_get_setting('footer_copyright', 'opencharity'),
    '#description'   => t("Check this option to show copyright text in footer. Uncheck to hide."),
  );
  $form['opencharity_settings']['footer']['footer_developed'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show theme developed by in footer'),
    '#default_value' => theme_get_setting('footer_developed', 'opencharity'),
    '#description'   => t("Check this option to show design & developed by text in footer. Uncheck to hide."),
  );
  $form['opencharity_settings']['footer']['footer_developedby'] = array(
    '#type' => 'textarea',
    '#title' => t('Add name developed by in footer'),
    '#default_value' => theme_get_setting('footer_developedby', 'opencharity'),
    '#description'   => t("Add name developed by in footer"),
  );
}