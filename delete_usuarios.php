<?php
	require_once 'BD.php';
	$BD = new BD();
	$id = $_GET['clave'];
	$BD->eliminar_usuarios($id);
	header("Location: usuarios.php");
?>