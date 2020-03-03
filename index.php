<?php
session_start();
include 'BD.php';

if(isset($_SESSION['usuario']) and isset($_SESSION['contrasenia'])){?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <meta charset="UTF-8">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css">

  <title>Inicio de <?php echo $_SESSION['usuario']; ?></title>
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
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }

    .boton {
        padding:20px;
        background:#502121;
        color:white;
        font:bold 10px/10px verdana;
        width:100px;
        cursor:pointer;
        cursor:hand;
        text-align:center;
    }
    .accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc;
}

.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2212";
}

.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
   
.button1{
      height: 40px;
      width: 180px;
    }   


  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="img/MA.png " style="height: 50px; margin:  8px" ></img>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
       
        <li><a href="cerrar_sesion.php">CERRAR SESIÓN&nbsp;</a></li>
        <li><a href="registroVideos.php">AGREGAR VIDEO&nbsp;</a></li>
        <li><a href="usuarios.php">USUARIOS</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Museo Amparo</h1> 
  <p>Bienvenido(a) <?php echo $_SESSION['usuario']; ?></p> 
  <form action="formularioVideos.php" method="POST">
    <div class="input-group">
      <input type="text" class="form-control" size="50" name="palabra" placeholder="¿QUÉ DESEAS BUSCAR?" required>
      <div class="input-group-btn">
        <button type="submit" class="btn btn-danger">Buscar</button>
      </div>
    </div>
  </form>
</div>

<!-- Container (About Section) -->


<div class="container">

<div class="dropdown">
  <FONT FACE="elvetica">
  <!--<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo"><h5>Click para Buscar Actividades Académicas&nbsp;&nbsp;+</h5></button>
  <div id="demo" class="collapse">-->
    <form action="formularioVideos.php" class="formulario" method="POST">
      <div class="radio">




       
        <input type="radio" name="evento" id="inauguracion" value="apertura">
        <label for="inauguracion">Inauguraciones</label>
        
        
                <input type="radio" name="evento" id="diplomado" value="diplomado">
        <label for="diplomado">Diplomados</label>
        
    
        
        
        <input type="radio" name="evento" id="curso" value="curso">
        <label for="curso">Cursos y Talleres</label>
            
        
        
        <input type="radio" name="evento" id="conferencia" value="conferencia">
        <label for="conferencia">Conferencias</label>
        
        
        <input type="radio" name="evento" id="presentacion" value="presentacion">
        <label for="presentacion">Presentaciones de libros</label>
        

        <input type="radio" name="evento" id="rueda" value="rueda">
        <label for="rueda">Ruedas de prensa</label>
        
    

        <input type="radio" name="evento" id="otro" value="otro">
        <label for="otro">Documentales</label>


         <input type="radio" name="evento" id="todo" value="todo">
        <label for="todo">Todos los videos</label>
      
      </div>
      <center>
       <button type="submit" name="buscar"  class="btn btn-danger button1">Buscar</button></center>
    </form>
  <!--</div>-->

</FONT>
</div>


</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
 

</div>



</body>
</html>
<?php
}

else{
  header("Location: login.php");
}
?>