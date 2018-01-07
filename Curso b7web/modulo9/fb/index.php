<?php
require 'fb.php';

if(isset($_SESSION['fb_access_token']) && !empty($_SESSION['fb_access_token'])) {

	$res = $fb->get('/me?fields=email,name,id,picture', $_SESSION['fb_access_token']);

	$r = json_decode($res->getBody());

	$img = $r->picture->data->url;

	echo "<img src='".$img."' border='0' />";

	echo "Meu nome: ".$r->name;

	echo "<br/><a href='sair.php'>Sair</a>";

} else {
	header("Location: login.php");
}