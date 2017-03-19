<?php
  //add side-true class when there is content placed in the side region
  function kelly_preprocess_html(&$variables) {

  if (!empty($variables['page']['sidebar_first'])) {
    $variables['attributes_array']['class'][] = 'first-sidebar';
  }

  if (!empty($variables['page']['sidebar_second'])) {
    $variables['attributes_array']['class'][] = 'second-sidebar';
  }

}