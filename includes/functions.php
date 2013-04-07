<?php

$additional_headers = '';
function add_header($header) {
  global $additional_headers;
  $additional_headers .= "$header\n";
}

function entete($titre) {
	global $additional_headers;
  require('includes/entete.php');
}

function basdepage() {
  require('includes/basdepage.php');
}



