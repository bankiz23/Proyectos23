<?php
	require_once 'BD.php';
	$BD = new BD();
	$id = $_POST['id_video'];
	$nombre = $_POST['nombre_video'];
	$descripcion = $_POST['descripcion_video'];
	$ponente = $_POST['nombre_ponente'];
	$fecha = $_POST['fecha'];
	$evento = $_POST['event'];
	$duracion = $_POST['duracion'];
	
	$BD->ActualizarVideos($id, $nombre, $ponente, $descripcion, $fecha, $evento, $duracion);
	header("Location: formularioVideos.php");
?>