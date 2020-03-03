<?php
include 'BD.php'; 
$BD = new BD();

session_start();

if(isset($_SESSION['usuario']) and isset($_SESSION['contrasenia'])){ 
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
?>

<html>
<!DOCTYPE html>
<html>
<head>
  <link rel="icon"  href="img/favicon1.ico">
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<style>
{
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=file], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=date], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}
input[type=number], select, textarea {
    width: 100%;
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
        width: 100%;
        margin-top: 0;
    }
}
</style>
</head>
<body>
    <h4>Ingresar Video</h4>
          <div class="container">
                        <form action="insert_videos.php" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                      
                          <div class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-75">
                              <input type="text" name="title" id="title" required placeholder="Título">
                            </div>
                          </div>
                      

                      <div class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-75">
                              <input type="text" name="speaker" id="speaker" required placeholder="Ponente">
                            </div>
                          </div>

                         
                          <div class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-75">
                              <textarea type="text" name="description" id="description" required placeholder="Descripcion del Video"></textarea> 
                            </div>
                          </div>
                          

                          <div class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-75">
                              <input type="date" name="date" id="name" required placeholder="Fecha">
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-75">
                              <select id="TipoEvento" required name="event" id="event">
                                <option value="Cursos">Cursos y Talleres</option>
                                <option value="Conferencias">Conferencia</option>
                                <option value="Inauguraciones">Inauguración</option>
                                <option value="Diplomado">Diplomado</option>
                                <option value="Rueda de prensa">Rueda de prensa</option>
                                <option value="Presentacion de Libro">Presentación de Libro</option>
                                <option value="Otro">Otro</option>      
                              </select>
                                  
                                  </div>
                            </div>
                              
                         <div class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-75">
                              Duración:
                              <input type="text" name="time" id="hora" required placeholder="00:00:00">
                            </div>
                          </div>


                          <div class="row">
                            <div class="col-25">
                            </div>
                            <div class="col-75">
                                 
                                  Imagen:
                                      <input type="file" name="image" id="image" required value ="selecciona imagen"><br><br>
                            
                          </div>
                        </div>
                            
                          <div class="row">
                            
                            <div class="col-25">
                            </div>
                            <div class="col-75">
                              
                                  Video:
                                      <input type="file" name="video" id="video" required value = "selecciona video"><br><br>
                            
                          </div>
                        </div>
                            <input type="submit" name="enviar" value="Agregar Video">
                              </form>
          </div>

</body>
</html>

<?php
}

}
else{
    header("Location: login.php");
}
?>