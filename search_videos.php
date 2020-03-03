<?php
	require_once 'BD.php';
	$BD = new BD();
	$word = $_POST['palabra'];
	
	$BD->BuscarVideoPalabra($word);
	header("Location: busquedaVideos.php");
?>