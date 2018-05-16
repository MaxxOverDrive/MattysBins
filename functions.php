<?php

function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u($string = "") {
  return urlencode($string);
}

function raw_u($string = "") {
  return rawurlencode($string);
}

//USED TO PROTECT AGAINST XSS ATTACKS BY CONVERTING SPECIAL CHARACTERS
function h($string = "") {
  return htmlspecialchars($string);
}
?>
