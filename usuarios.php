<?php
session_start();
include 'BD.php';

if(isset($_SESSION['usuario']) and isset($_SESSION['contrasenia']))
{
if (($_SESSION['Rol'] != 8)){
      echo '<!DOCTYPE html>
                  <html lang="en">
                  <head>
                    <title>Bootstrap Example</title>
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                  </head>
                  <body>

                  <div class="container">
                    <h2>Cuidado!!!</h2>
                    
                    <div class="alert alert-danger">
                      <strong>Tu!</strong> No tienes el permiso necesario para editar Video.
                      <a href="index.php">Click aquí para volver</a>
                    </div>
                  </div>

                  </body>
            </html>';
  }
  else
  {?>
<!DOCTYPE html>

<html>
  <head>
    <title>Lista de videos</title>
    <link rel="icon"  href="img/favicon1.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.5;
      color: #000000;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #F15A24;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Helvetica, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
      
      font-size: 12px !important;
  }

.dropdown {
        padding:0px;   
         }


@import url(https://fonts.googleapis.com/css?family=Open+Sans);

body{
  background: #f2f2f2;
  font-family: 'Open Sans', sans-serif;
}



  </style>
</head>



<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">

 
  <div class="container">

    <div class="navbar-header">
<a href="index.php">
 <img src="img/MA.png" style="height: 50px; margin:  8px" </img> </a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
    </div>
<FONT FACE="elvetica">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="AgregarUser.php">Agregar Usuario</a></li>
      </ul>
    </div>
    </FONT>
  </div>
</nav>
  
                <br><br><br><br><br>
                <div style="overflow-x:auto;">

                <?php

                require_once 'BD.php';
                $BD = new BD();

                  // importante saber a quíen vamos a modificar por eso se toma la clave
                  $TablaUsuarios = $BD->MostrarUsers();

                
                  echo "<center>
                  <table border=1 > ";
                  echo "<tr><td>Usuarios</td><td>Contraseña</td> <td>Permisos</td><td>Editar</td><td>Eliminar</td></tr>";
                         
                          foreach ($TablaUsuarios as $row) {

                            echo'<tr>';
                            echo '<td width = "40%" >' . '<h4>'.$row['name'] .'</h4>'

                            .'<br>'.'<br>'.'</td>';

                            echo '<td width = "20%" >' . '<h4>'.$row['password'] .'</h4>'

                            .'<br>'.'<br>'.'</td>';
                            echo '<td width = "10%" >' . '<h4>'. $row['privilegio'] .'</h4>'

                            .'<br>'.'<br>'.'</td>';

                            echo '<td width = "10%">
                            <a href="EditarUser.php?claves='. $row['id'] .'">
                            <button style="background-color:#f4511e; border: none; border: none; color: white; border-radius: 4px; padding: 4px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 14px;" id="boton">Editar</button>'.'<br>'.'<br>'.'
                            </td>';
                            echo '<td width = "30%">
                            <a href="javascript:confirmacion_borrar(\'delete_usuarios.php? clave='. $row['id'] .'\', \''. $row['name'] .'\');">
                              <button style="background-color:#F79620; border: none; border: none; color: white; border-radius: 4px; padding: 4px 20px; text-align: center; text-decoration: none; display: inline-block; font-size: 14px;" id="button">Eliminar</button>
                            </a>'.'<br>'.'<br>'.

                            '</td>';

                          }
                ?>
                </div>

      <script>
      function confirmacion_borrar(link, nombre) {
        if ( confirm("¿Estás seguro de que desea eliminar este usuario?") )
          window.location.href = link;
      }

      </script>
</body>
</html>

<?php
  }
}

else{
  header("Location: login.php");
}
?>