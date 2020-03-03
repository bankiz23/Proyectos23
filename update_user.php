<?php  
//realizdo por sj
    require_once 'BD.php';  
	$BD = new BD();
    $id = $_POST['id'];				
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
        //$privilegio = "ninguno";
        if ($_POST['rol'] == 3) {
            # code...
            $privilegio = "Subir videos";
            $privil = 3;
        }else if ($_POST['rol'] == 2) {
            # code...
            $privilegio = "Editar videos";
            $privil = 2;
        }else if ($_POST['rol'] == 1) {
            # code...
            $privilegio = "Eliminar videos";
            $privil = 1;
        }else if ($_POST['rol'] == 4) {
            # code...
            $privilegio = "Editar y eliminar videos";
            $privil = 4;
        }else if ($_POST['rol'] == 6) {
            # code...
            $privilegio = "Subir y eliminar videos";
            $privil = 6;
        }else if ($_POST['rol'] == 5) {
            # code...
            $privilegio = "Editar y subir videos";
            $privil = 5;
        }else if ($_POST['rol'] == 0) {
            # code...
            $privilegio = "Todos los privilegios";
            $privil = 0;
        }
        else{
            $privilegio = "Ninguno";
            $privil = 7;   
        }
    }

		$BD->ActualizarUsuarios($id, $nam, $pass, $privil, $privilegio);
		header("Location: usuarios.php");
?>