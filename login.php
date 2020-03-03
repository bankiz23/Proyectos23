<?php
    session_start();
    require_once 'BD.php';
    if(isset($_SESSION['usuario']) and isset($_SESSION['contrasenia'])){
    echo '<script> window.location="index.php"; </script>';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon"  href="img/favicon1.ico">
    <title>Administrador</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif; text-align: center;;}
form {border: 3px solid #f1f1f1;}

input[type=text]{
    width: 35%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type=password] {
    width: 35%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 15%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
<CENTER>
<h2>Administrador</h2>
    

</CENTER>

<form action="valida.php" method="POST">
  <div class="imgcontainer">
    <img src="LogoMa2.png" alt="Avatar" class="avatar">

  </div>

  <div class="container">
    <label for="uname"><b>Administrador</b></label>
    <input type="text" placeholder="Enter Username" name="usr" required>
    <br>
    <label for="psw"><b>Contraseña</b></label>
    <input type="password" placeholder="Enter Password" name="pw" required>
    <br>   
    <button type="submit">Ingresar</button>

   
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="../index.php"><button type="button" class="cancelbtn">Salir</button></a>    
  </div>
</form>

</body>
</html>
