<?php
session_start();
include 'BD.php';

if(isset($_SESSION['usuario']) and isset($_SESSION['contrasenia'])){

    # code...
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
                    <h2>Atención!!!</h2>
                    
                    <div class="alert alert-danger">
                      <strong>Tu! El usuario ya existe.</strong> 
                      <a href="usuarios.php">Click aquí para volver</a>
                    </div>
                  </div>

                  </body>
            </html>';
}

else{
  header("Location: login.php");
}
?>