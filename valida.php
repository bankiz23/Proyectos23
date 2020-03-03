<?php
	require_once 'BD.php';
	$BD = new BD();
	session_start(); // siempre se sesión inicializar éstas el método 
	$user = $_POST['usr'];
    $pass = $_POST['pw'];
    //$id = $_POST[''];
	$resultado = $BD->validarAdministrador($user, $pass);
	
	if ($resultado==1)
	{   // si hay un usuario en las variables de sesión se guarda
		$_SESSION['usuario'] = $user;
		$_SESSION['contrasenia']=$pass;
		$_SESSION['Rol'] = $BD->getRol($user);
		
        //echo "el rol es: ". $_SESSION['Rol'];
		header("Location: index.php");
	}
	else  // si no lo encuentra regreso a la misma página
		header("Location: login.php");
?>	