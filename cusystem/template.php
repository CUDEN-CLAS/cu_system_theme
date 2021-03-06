<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 *
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

 /**
 * Implements hook_preprocess_html().
 */
function cusystem_preprocess_html(&$vars) {

  // SET BANNER COLOR (banner-white, banner-light, banner-cusystem, banner-black)
  $banner_color = theme_get_setting('banner_color', 'cusystem') ? theme_get_setting('banner_color', 'cusystem') : 'black';
  //$banner_color = 'light';
  $vars['classes_array'][]='banner-' . $banner_color;
  $layout = theme_get_setting('layout_style', 'cusystem') ? theme_get_setting('layout_style', 'cusystem') : 'layout-wide';
  $vars['classes_array'][]=$layout;

  $slogan_title = variable_get('site_slogan_title', 'University of Colorado Boulder');
  $vars['head_title_array']['slogan'] = $slogan_title;
  $title = array(
    drupal_get_title(),
    variable_get('site_name', ''),
    'University of Colorado',
  );
  $vars['head_title'] = join(' | ', $title);
}

function cusystem_preprocess_page(&$vars) {
  $vars['site_slogan'] = theme_get_setting('system_slogan', 'cusystem') ? theme_get_setting('system_slogan', 'cusystem') : 'Boulder | Denver | Colorado Springs | Anschutz Medical Campus';
}

function cusystem_preprocess_region(&$vars) {
  switch ($vars['region']) {
    case 'branding':
      $vars['site_slogan'] = theme_get_setting('system_slogan', 'cusystem') ? theme_get_setting('system_slogan', 'cusystem') : 'Boulder | Denver | Colorado Springs | Anschutz Medical Campus';


      $vars['print_logo'] = '';

      break;
  }
}
