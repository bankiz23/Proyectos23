<?php  
//realizdo por sj
    require_once 'BD.php';  //para incluir la clase que maneja la BD
	$BD = new BD();				
	$nam = $_POST['name'];
	$pass = $_POST['password'];
	
	if (isset($_POST["numero1"]) and !isset($_POST["numero2"]) and !isset($_POST["numero3"])) {
    	# code...
    	$privilegio = "Subir videos";
    	$privil = 3;
    }
    else if (isset($_POST["numero2"]) and !isset($_POST["numero1"]) and !isset($_POST["numero3"])) {
    	# code...
    	$privilegio = "Editar videos";
    	$privil = 2;	
    }else if (isset($_POST["numero3"])  and !isset($_POST["numero1"]) and !isset($_POST["numero2"])) {
    	# code...
    	$privilegio = "Eliminar videos";
    	$privil = 1;
    }
    else if ((isset($_POST["numero3"])) and (isset($_POST["numero2"])) and !isset($_POST["numero1"])) {
    	# code...
    	$privilegio = "Editar y eliminar videos";
    	$privil = 4;
    }else if ((isset($_POST["numero3"])) and (isset($_POST["numero1"])) and !isset($_POST["numero2"])) {
    	# code...
    	$privilegio = "Subir y eliminar videos";
    	$privil = 6;
    }else if ((isset($_POST["numero1"])) and (isset($_POST["numero2"])) and !isset($_POST["numero3"])) {
    	# code...
    	$privilegio = "Editar y subir videos";
    	$privil = 5;
    }else if ((isset($_POST["numero1"])) and (isset($_POST["numero2"])) and isset($_POST["numero3"])) {
    	# code...
    	$privilegio = "Todos los privilegios";
    	$privil = 0;
    }
    else{
    	# code...
    	$privilegio = "Ninguno";
    	$privil = 7;
    }
	$resultado = $BD->Existencia($nam, $pass);
	if($resultado==1)
	{   // si hay un usuario en las variables de sesión se guarda
		header("Location: error.php");
	}
	else
	{
		$BD->RegistroUsers($nam, $pass, $privil, $privilegio);
		header("Location: usuarios.php");}
?>