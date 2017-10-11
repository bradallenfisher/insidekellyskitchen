<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * kelly theme.
 */
function kelly_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<span class="element-invisible">' . t('Primary tabs') . '</span>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary tabs--primary  links--inline">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<span class="element-invisible">' . t('Secondary tabs') . '</span>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary tabs--secondary links--inline">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;
}

/**
Customize your search form
*/

function kelly_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibility
    $form['search_block_form']['#default_value'] = t('What are you hungry for?'); // Set a default value for the textfield
    $form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
    $form['actions']['submit']['#attributes']['alt'] = "Search Button"; //add alt tag
    unset($form['actions']['submit']['#value']); // Remove the value attribute from the input tag, since it is not valid when input type = image

    $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/icon-search.png');

// Add extra attributes to the text box
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'What are you hungry for?';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'What are you hungry for?') {this.value = '';}";
  }
}