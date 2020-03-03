<?php   
//realizdo por sj

    include 'BD.php';  //para incluir la clase que maneja la BD 
	$BD = new BD();
	$ti=$_REQUEST['title'];
    $sp = $_REQUEST['speaker'];
    $dc=$_REQUEST['description'];

   	$dt=$_REQUEST['date'];
   	$ev=$_REQUEST['event'];
   	$tm=$_REQUEST['time'];
	$nombreV=$_FILES['video']['name'];

	$tam=$_FILES['image']['size']; // Para el tamaño
	$tipo=$_FILES['image']['type']; //Para el tipo
	$nombre=$_FILES['image']['name'];

	$rutaV="../MisVideos/".$nombreV;
	$ruta="../MisImagenes/".$nombre;

	if(is_uploaded_file($_FILES['image']['tmp_name'] ))
	{
		if(is_uploaded_file($_FILES['video']['tmp_name'] ))
		{
			//Copiamos a nuestro servidor
			copy($_FILES['video']['tmp_name'],$rutaV);//Copiamos a nuestro servidor
			copy($_FILES['image']['tmp_name'],$ruta);			
			$BD->RegistroVideos($ti, $sp, $dc, $dt, $nombre, $nombreV, $ev, $tm);
		}
	}

	header("Location: formularioVideos.php");
?>