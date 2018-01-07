<?php
session_start();
require 'Facebook/autoload.php';

$fb = new Facebook\Facebook([
	'app_id' => '1611752759077061',
	'app_secret' => '06ff35e87167ab4862bba56c755dbc18',
	'default_graph_version' => 'v2.7'
]);