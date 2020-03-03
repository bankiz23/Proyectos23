<?php
    header('Cache-Control: no cache');
    session_cache_limiter('private_no_expire');
    session_start();
    require_once 'BD.php';
    if(isset($_SESSION['user']) and isset($_SESSION['password'])){
    echo '<script> window.location="formularioVideos.php"; </script>';
    }
?>
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
 <img src="img/MA.png " style="height: 50px; margin:  8px" </img> </a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
   
     
    </div>
<FONT FACE="elvetica">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">INICIO</a></li>
        <li><a href="login.php">INICIAR SESIÓN</a></li>
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
                
                //$evento = $_POST['evento'];
                if(!empty($_POST['palabra'])) 
                { 
                   $BD = new BD();// importante saber si se ha puesto algo en la búsqueda de lo contrario se va al siguiente if
                  $word = $_POST['palabra'];
  
                  // importante saber a quíen vamos a modificar por eso se toma la clave
                  $TablaVideos = $BD->BuscarVideoPalabra($word);

                }elseif (!empty($_POST['evento'])) {
                  # code...
                    $BD = new BD();
                    $evento = $_POST['evento'];

            //<---------------------------------------------------------------------------->
                    if ($evento==="apertura") {
                      # code...
                     $TablaVideos = $BD->BuscarVideoApertura();  
                    }
            //<---------------------------------------------------------------------------->
                    else if ($evento==="diplomado") {
                      # code...
                    $TablaVideos = $BD->BuscarVideoDiplomado();  
                    }
            //<---------------------------------------------------------------------------->
                    else if ($evento==="curso") {
                      # code...
                    $TablaVideos = $BD->BuscarVideoCursos();  
                    }
            //<---------------------------------------------------------------------------->
                    else if ($evento==="taller") {
                      # code...
                    $TablaVideos = $BD->BuscarVideoTalleres();  
                    }
            //<---------------------------------------------------------------------------->
                    else if ($evento==="conferencia") {
                      # code...
                    $TablaVideos = $BD->BuscarVideoConferencias();  
                    }
            //<---------------------------------------------------------------------------->
                    else if ($evento==="presentacion") {
                      # code...
                     $TablaVideos = $BD->BuscarVideoPresentacion();  
                    }
            //<---------------------------------------------------------------------------->
                    else if ($evento==="rueda") {
                      # code...
                    $TablaVideos = $BD->BuscarVideoRueda();  
                    }
            //<---------------------------------------------------------------------------->
                    else if ($evento==="otro") {
                      # code...
                    $TablaVideos = $BD->BuscarVideoOtro();  
                    }
            //<---------------------------------------------------------------------------->
                    else if ($evento==="todo") {
                      # code...
                    $TablaVideos = $BD->MostrarVideos();  
                    }
                    
                  } 
                //$BD = new BD();// importante saber a quíen vamos a modificar por eso se toma la clave
                    else{
                      # code...
                      $TablaVideos = $BD->MostrarVideos();
                    }
                  echo "<center>
                  <table border=0 > ";
                  echo "<tr><td></td> <td></td> <td></td> <td></td></tr>";
                          
                          foreach ($TablaVideos as $row) {
                            
                            echo'<tr>';
                            echo '<td width="15%">';
                            echo '<td width = "700" >' . '<h4>'.$row['Nombre_Video'] .'</h4>'.'<a href="playU.php?clave=' . $row['ID_Videos'].'">
                            <img src = "MisImagenes/' . $row['Imagen'].'"  width = "255" height="210">'.'</a>'

                            .'<br>'.'<br>'.'</td>';
                            echo '<td width="10%">';
/*
                            echo '<td width="50%">'.'&nbsp;&nbsp;&nbsp;'.
                            $row['Descripcion_Video'].'<td>';
*/

                            //botones de editar y eliminar
                           




                          }
                ?>
                </div>




      <script>
      function confirmacion_borrar(link, nombre) {
        if ( confirm("¿Estás seguro de que desea eliminar este video?") )
          window.location.href = link;
      }
      </script>
</body>
</html>