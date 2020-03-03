<?php
    session_start();
    require_once 'BD.php';
    if(isset($_SESSION['user']) and isset($_SESSION['password'])){
    echo '<script> window.location="indexAdmin.php"; </script>';
    }
?> 
<!DOCTYPE html>
<html>
<head>
  <title>Video</title>
</head>
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
video{
  max-height: 60%;
   min-height: 44%; 
  max-width: 60%;
  min-width: 44%;
}

  </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">

  <div class="container">

    <div class="navbar-header">
      
<a href="index.php">
 <img src="logo.png" style="height: 50px; margin:  8px" </img> </a>

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
   
    </div>

<FONT FACE="elvetica">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        
        <li><a href="videos.php">INICIO</a></li>
        
       
      </ul>
    </div>
    </FONT>
  </div>
</nav>

<?php
require_once 'BD.php';
$BD = new BD();
$id = $_GET['clave']; 
$consulta = $BD->MostrarVideo($id); // se trae todos los usuarios (arreglo asociativo)
//Hacer la consulta y guardarlo en la variable $resultado.

  foreach($consulta as $row)
  {
    $id=$row['ID_Videos'];
    $ti=$row['Nombre_Video'];
   
    $im=$row['Ruta'];
        echo '<br><br><br>';
        echo "<center><H1> $ti </H1></center><br>";
        
        echo "<center><video controls controlsList='nodownload' src='MisVideos/$im' type='video/mp4'></center></video>  
       
        <br>";

        echo'<td width = "90%" height="20%">'.

        '<div style="background-color:#D8D8D8" align="center">'.
        '<br>'.
        "<h4><b>Id Video: </b>$id".'&nbsp;'.'|'.'&nbsp;'.
        '<b>Fecha:</b>'.'&nbsp;'.'&nbsp;'.$row['Fecha'].
'<br>'.'<br>'.
        '<b>Evento:</b>'.'&nbsp;'.'&nbsp;'. $row['Evento'].
        '&nbsp;'.'&nbsp;'.'&nbsp;'.'|'.'&nbsp;'.'&nbsp;'.'&nbsp;'.
        '<b>Ponente:</b>'.'&nbsp;'.'&nbsp;'.$row['Nombre_Ponente'].
        '&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.

'<br>'.'<br>'.

'<b>Título:</b>'.'&nbsp;'.'&nbsp;'.$ti.


'<br>'.'<br>'.
        '<b>Descripción:</b>'.'&nbsp;'.'&nbsp;'.'&nbsp;'.$row['Descripcion_Video'].
 '<br>'.'<br>'.
        '<b>Duración:</b>'.'&nbsp;'.'&nbsp;'.'&nbsp;'.$row['duracion'].
        
        '<br>'.'<br>'.'<br>'.
        '</h4>'.
        '</div>'.
        '</td>';       
  }
?>

</body>
</html>
