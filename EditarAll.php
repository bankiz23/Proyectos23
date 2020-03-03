<?php

require_once 'BD.php';
$BD = new BD();

session_start();

if(isset($_SESSION['usuario']) and isset($_SESSION['contrasenia']))
{
  if ($_SESSION['Rol'] != 8){
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
  {

// se trae todos los usuarios (arreglo asociativo)
$id = $_GET['claves']; // importante saber a quíen vamos a modificar por eso se toma la clave
$TablaVideos = $BD->MostrarVideo($id); // nos traemos los datos del usuario del Registro
foreach ($TablaVideos as $row)
{
  $titulo = $row['Nombre_Video'];
  $descripcion = $row['Descripcion_Video'];  // obtenemos los datos del registro
  $ponente = $row['Nombre_Ponente'];  // obtenemos los datos del registro$nombre = $row['nombre'];  // obtenemos los datos del registro
  $fecha = $row['Fecha'];  // obtenemos los datos del registro
  $evento = $row['Evento'];  // obtenemos los datos del registro
  $duracion = $row['duracion'];  // obtenemos los datos del registro
  
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Actualizar</title>
    <link rel="icon"  href="img/favicon1.ico">
  </head>
<style>
{
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 80%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=file], select, textarea {
    width: 80%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=date], select, textarea {
    width: 80%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] 
    {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    }
input[type=submit]:hover 
    {
    background-color: red;
    }
.container 
    {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    }
.col-25 
    {
    float: left;
    width: 10%;
    margin-top: 6px;
    }
.col-75 
    {
    float: left;
    width: 75%;
    margin-top: 6px;
    }
/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) 
{
    .col-25, .col-75, input[type=submit]
    {
        width: 80%; 
        margin-top: 0; 
    }
}
</style>

  <body>
<center><h4>Actualizar Video <?php echo $id;?></h4>  </center>
  <!--Inicio del FORM-->
  <form   method="POST" action="update.php">

        <!--Nombre, Ponente, Fecha, Descripcion, Imagen, Ubicacion-->
            <input type="hidden" required value="<?php echo $id; ?>" name="id_video" class="txt"><br>
            
            <div class="row">
                <div class="col-25">
                </div>
                <div class="col-75">
                    <label>Título</label><br>
                   <input type="text" required value="<?php echo $titulo; ?>" name="nombre_video" class="txt"><br><br>
                </div>
              </div>
            <div class="row">
                <div class="col-25">
                </div>
                <div class="col-75">
                    <label>Descripción</label><br>
                   <input type="text" required value="<?php echo $descripcion; ?>" name="descripcion_video" class="txt"><br><br>
                </div>
              </div>
            <div class="row">
                <div class="col-25">
                </div>
                <div class="col-75">
                    <label>Ponente</label><br>
                  <input type="text" required value="<?php echo $ponente; ?>" name="nombre_ponente" class="txt">
                  <br><br>
                </div>
              </div>
            
            <div class="row">
                <div class="col-25">
                </div>
                <div class="col-75">
                    <label>Fecha</label><br>
                  <input type="date" name="fecha" required value="<?php echo $fecha; ?>" required placeholder="Fecha">
                  <br><br>
                </div>
              </div>
            <div class="row">
                <div class="col-25">
                </div>
                <div class="col-75">
                    <label>Duración</label><br>
                  <input type="text" name="duracion" required value="<?php echo $duracion; ?>" required placeholder="00:00:00">
                  <br><br>
                </div>
              </div>
            
              <div class="row">
      <div class="col-25">
      </div>
          <div class="col-75">
            <label>Eventos</label><br>
            <select id="TipoEvento" name="event">
              <option required value="<?php echo $evento; ?>"><?php echo $evento; ?></option>
              <option value="Cursos">Cursos y Talleres</option>
              <option value="Conferencias">Conferencia</option>
              <option value="Inauguraciones">Inauguración</option>
              <option value="Diplomado">Diplomado</option>
              <option value="Rueda de prensa">Rueda de prensa</option>
              <option value="Presentacion de Libro">Presentacion de Libro</option>
              <option value="Otro">Otro</option>      
            </select>
            
            </div>
      </div>

    <center>
      
          <button class="btn waves-effect waves-light" type="submit" name="actualizar">Actualizar Datos</button> <br><br><br>

    </center>

  </form><!--FIN DEL FORM-->

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      $('select').material_select();
    });
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