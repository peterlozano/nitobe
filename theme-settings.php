<?php
/**
 * @file theme-settings.php
 * Provides the settings for the Notibe theme.
 *
 * $Id: theme-settings.php,v 1.9.8.2 2009/08/01 17:58:31 shannonlucas Exp $
 */

require_once drupal_get_path('theme', 'nitobe') . '/nitobe_utils.inc';

/**
 * Implementation of THEMEHOOK_settings().
 *
 * @param array $settings An array of saved settings for this
 *        theme.
 *
 * @return array A form array.
 */
function phptemplate_settings($settings) {
  $form = array();

  // --------------------------------------------------------------------------
  // -- What ordering should be used for the content and sidebars?
  $default = $settings['nitobe_content_placement'];
  $default = empty($default) ? 'center' : $default;
  $desc    = t('Where should the sidebars be placed?');
  $options = array(
    'center' => 'On either side of the content region.',
    'right'  => 'Right of the content region.',
    'left'   => 'Left of the content region.',
  );

  $form['nitobe_content_placement'] = array(
    '#type'          => 'select',
    '#title'         => t('Sidebar placement'),
    '#options'       => $options,
    '#default_value' => $default,
    '#description'   => $desc,
  );

  // --------------------------------------------------------------------------
  // -- Get the header image list.
  $images  = _nitobe_get_header_list(TRUE);
  $options = array('<random>' => 'Random Header Image');

  foreach ($images as $filename => $data) {
    $options[$filename] = $data->pretty_name;
  }

  // --------------------------------------------------------------------------
  // -- The setting for the header image.
  $current = $settings['nitobe_header_image'];
  $current = empty($current) ? '' : $current;
  $default = in_array($current, array_keys($options)) ? $current : '<random>';
  $form['nitobe_header_image'] = array(
    '#type'           => 'select',
    '#title'          => t('Header image'),
    '#options'        => $options,
    '#default_value'  => $default,
  );

  // --------------------------------------------------------------------------
  // -- Show the header image if the mastead region has content?
  $default = $settings['nitobe_header_always_show'];
  $default = (!isset($default)) ? FALSE : (boolean)$default;
  $desc    = t("By default, if there is block content in the masthead region, the header image will not be displayed. Check this box to cause the header image to be displayed as the region's background image.");
  $form['nitobe_header_always_show'] = array(
    '#type'           => 'checkbox',
    '#title'          => t('Force header image'),
    '#default_value'  => $default,
    '#description'    => $desc,
  );

  // --------------------------------------------------------------------------
  // -- Should the alternating color title effect be applied?
  $default = $settings['nitobe_title_effect'];
  $default = (!isset($default)) ? FALSE : (boolean)$default;
  $desc    = t('Should the title be adjusted to apply an alternate color to every other word and remove inter-word spacing?');
  $form['nitobe_title_effect'] = array(
    '#type'           => 'checkbox',
    '#title'          => t('Apply title effect'),
    '#default_value'  => $default,
    '#description'    => $desc,
  );

  // --------------------------------------------------------------------------
  // -- Strip the ' (not verified)' from output usernames?
  $default = $settings['nitobe_remove_not_verified'];
  $default = empty($default) ? FALSE : (boolean)$default;
  $desc    = t("Normally, when an anonymous visitors posts a comment, their name is suffixed with '%verified'. Checking this will prevent that text from being added.",
               array('%verified' => ' (not verified)'));
  $form['nitobe_remove_not_verified'] = array(
    '#type'          => 'checkbox',
    '#title'         => t("Strip '(not verified)' from usernames"),
    '#default_value' => $default,
    '#description'   => $desc,
  );

  // --------------------------------------------------------------------------
  // -- How many page items to put in the pager widgets.
  $default = $settings['nitobe_pager_page_count'];
  $default = !empty($default) ? intval($default) : 5;
  $options = range(3, 10);
  $desc    = t('The number of default pages to include in pager controls. If you are using a three column layout, a lower number here will work better.');

  $form['nitobe_pager_page_count'] = array(
    '#type'           => 'select',
    '#title'          => t('Pager item count'),
    '#options'        => drupal_map_assoc($options),
    '#default_value'  => $default,
    '#description'    => $desc,
  );

  return $form;
}
