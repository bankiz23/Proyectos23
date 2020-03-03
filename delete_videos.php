<?php
	require_once 'BD.php';
	$BD = new BD();
	$id = $_GET['clave'];
	$BD->eliminar_video($id);
	header("Location: formularioVideos.php");
?>