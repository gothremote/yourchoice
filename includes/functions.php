<?php

$additional_headers = '';
function add_header($header) {
  global $additional_headers;
  $additional_headers .= "$header\n";
}

function entete($titre, $page) {
	global $additional_headers;
  require('includes/entete.php');
}

function basdepage($page) {
  require('includes/basdepage.php');
}
function ec($c) {
  global $page;
  if ($c === $page)
    echo 'id="current"';
}
?>



