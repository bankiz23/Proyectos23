<?php
 
class BD 
{
private $pdo;//variable para realizar la conexion a la base de datos
//realizado por mo
public function __construct()
{
	$dbHost = 'localhost';
    $dbName = 'baseoficial';
    $dbUser = 'root';
    $dbPass = '';

    	//try catch en caso de error de conexión
		try {
		      $this->pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8",
		                           $dbUser, $dbPass);
		      $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		    } catch(Exception $e) {
		      echo $e->getMessage();
		    }
}//fin de constructor


//El insertvideo lorealizamos directo en registr videos
public function RegistroVideos($ti, $sp, $dc, $dt, $nombre, $nombreV, $ev, $tm)
{

$sql = "INSERT INTO videos(Nombre_Video, Nombre_Ponente, Descripcion_Video, Fecha, Imagen, Ruta, Evento, duracion) VALUES (:Nombre, :Ponente, :Descripcion, :Fecha, :Imagen, :Ruta, :Evento, :duracion)";


       $query = $this->pdo->prepare($sql);
         $query->bindParam(":Nombre", $ti);
         $query->bindParam(":Ponente", $sp);
         $query->bindParam(":Descripcion",$dc);
         $query->bindParam(":Fecha",$dt);
         $query->bindParam(":Imagen",$nombre);
         $query->bindParam(":Ruta",$nombreV);
         $query->bindParam(":Evento",$ev);
         $query->bindParam(":duracion",$tm);
           $query->execute();


}
public function RegistroUsers($nam, $pass, $rol, $privilegio)
{

$sql = "INSERT INTO usuarios(name, password, rol, privilegio) VALUES (:Nombre, :Password, :Rol, :Privilegio)";


       $query = $this->pdo->prepare($sql);
         $query->bindParam(":Nombre", $nam);
         $query->bindParam(":Password", $pass);
         $query->bindParam(":Rol",$rol); 
         $query->bindParam(":Privilegio",$privilegio); 
                 
           $query->execute();


}
public function ConsultarVideoOne($id)
{
return $this->pdo->query("SELECT * FROM videos WHERE ID_Videos  LIKE  '$id%'" );


}

public function Insertar($name, $matricula)
{
$sql = "INSERT INTO chico(Nombre, Matricula) VALUES (:nombre, :matricula)";
       $query = $this->pdo->prepare($sql);
         $query->bindParam(":nombre", $name);
         $query->bindParam(":matricula", $matricula);
         
           $query->execute();
}

public function BuscarVideoPalabra($word)
{
return $this->pdo->query("SELECT * FROM videos WHERE Nombre_Video LIKE '%$word%' OR Nombre_Ponente LIKE '%$word%' OR ID_Videos LIKE '%$word%' OR Descripcion_Video LIKE '%$word%'");

}

public function BuscarVideoCursos()
{
return $this->pdo->query("SELECT * FROM videos WHERE Evento LIKE 'Cursos%'");

}
public function BuscarVideoConferencias()
{
return $this->pdo->query("SELECT * FROM videos WHERE Evento LIKE 'Conferencias%'");

}
public function BuscarVideoTalleres()
{
return $this->pdo->query("SELECT * FROM videos WHERE Evento LIKE 'Talleres%'");

}
public function BuscarVideoInauguraciones()
{
return $this->pdo->query("SELECT * FROM videos WHERE Evento LIKE 'Inauguraciones%'");

}
public function BuscarVideoCharla()
{
return $this->pdo->query("SELECT * FROM videos WHERE Evento LIKE 'Charla%'");

}

public function BuscarVideoDiplomado()
{
return $this->pdo->query("SELECT * FROM videos WHERE Evento LIKE 'Diplomado%'");

}
public function BuscarVideoDialogo()
{
return $this->pdo->query("SELECT * FROM videos WHERE Evento LIKE 'Dialogo%'");

}
public function BuscarVideoRueda()
{
return $this->pdo->query("SELECT * FROM videos WHERE Evento LIKE 'Rueda%'");

}
public function BuscarVideoApertura()
{
return $this->pdo->query("SELECT * FROM videos WHERE Evento LIKE 'Apertura%'");

}
public function BuscarVideoCiclo()
{
return $this->pdo->query("SELECT * FROM videos WHERE Evento LIKE 'Ciclo%'");

}
public function BuscarVideoPresentacion()
{
return $this->pdo->query("SELECT * FROM videos WHERE Evento LIKE 'Presentacion%'");

}
public function BuscarVideoMesa()
{
return $this->pdo->query("SELECT * FROM videos WHERE Evento LIKE 'Mesa%'");

}
public function BuscarVideoOtro()
{
return $this->pdo->query("SELECT * FROM videos WHERE Evento LIKE 'Otro%'");

}


public function MostrarVideos()
{
return $this->pdo->query("SELECT * FROM videos");

}
public function MostrarUsers()
{
return $this->pdo->query("SELECT * FROM usuarios");

}
public function MostrarUsuario($id)
{
return $this->pdo->query("SELECT * FROM usuarios WHERE id = '$id' ");
}
public function MostrarVideo($id)
{
return $this->pdo->query("SELECT * FROM videos WHERE ID_Videos = '$id' ");
}

//Clasem para editar el nombre del

public function ActualizarVideos($id, $name, $spaker, $description, $date, $event, $duracion)
{
$sql = "UPDATE `videos` SET `Nombre_Video` = :nombre, `Nombre_Ponente` = :ponente, `Descripcion_Video` = :descripcion, `Fecha` = :fecha, `Evento` = :evento, `duracion` = :duracion WHERE `videos`.`ID_Videos` = :id";


      $query = $this->pdo->prepare($sql);

      $query->bindParam(":nombre", $name);
      $query->bindParam(":ponente", $spaker);
      $query->bindParam(":descripcion", $description);
      $query->bindParam(":fecha", $date);
      $query->bindParam(":evento", $event);
      $query->bindParam(":duracion", $duracion);
    
      
      $query->bindParam(":id", $id);

    $query->execute();

}
public function ActualizarUsuarios($id, $name, $password, $rol, $privilegio)
{
$sql = "UPDATE `usuarios` SET `name` = :nombre, `password` = :password, `rol` = :rol, `privilegio` = :privilegio WHERE `usuarios`.`id` = :id";


      $query = $this->pdo->prepare($sql);

      $query->bindParam(":nombre", $name);
      $query->bindParam(":password", $password);
      $query->bindParam(":rol", $rol);
      $query->bindParam(":privilegio", $privilegio);
    
      
      $query->bindParam(":id", $id);

    $query->execute();

}
public function ActualizarFecha($id, $fecha)
{
$sql = "UPDATE `videos` SET `Fecha` = :date_video WHERE `videos`.`ID_Videos` = :id";

      $query = $this->pdo->prepare($sql);

      $query->bindParam(":date_video", $fecha);
      
      $query->bindParam(":id", $id);

    $query->execute();

}

public function ActualizarPonente($id, $ponente)
{
$sql = "UPDATE `videos` SET `Nombre_Ponente` = :pon WHERE `videos`.`ID_Videos` = :id";

      $query = $this->pdo->prepare($sql);

      $query->bindParam(":pon", $ponente);
      $query->bindParam(":id", $id);

    $query->execute();

}
public function ActualizarDescripcion($id, $description)
{
$sql = "UPDATE `videos` SET `Descripcion_Video` = :descripcion WHERE `videos`.`ID_Videos` = :id";

      $query = $this->pdo->prepare($sql);
      $query->bindParam(":descripcion", $description);
      $query->bindParam(":id", $id);

    $query->execute();

}
public function ActualizarEvento($id, $evento)
{
$sql = "UPDATE `videos` SET `Evento` = :event WHERE `videos`.`ID_Videos` = :id";

      $query = $this->pdo->prepare($sql);
      $query->bindParam(":event", $evento);
      $query->bindParam(":id", $id);  

    $query->execute();

}

public function eliminar_video($id)
  {

    $sql = "DELETE FROM `videos` WHERE `videos`.`ID_Videos` = :id";
      $query = $this->pdo->prepare($sql);
      $query->bindParam(":id", $id);
      $query->execute();
  }
public function eliminar_usuarios($id)
  {

    $sql = "DELETE FROM `usuarios` WHERE `usuarios`.`id` = :id";
      $query = $this->pdo->prepare($sql);
      $query->bindParam(":id", $id);
      $query->execute();
  }

public function MostrarVideosInauguraciones() 
{
return $this->pdo->query("SELECT * FROM vid");

}
public function validarAdministrador($name, $password)
    {
      $sql = "Select count(*) AS cantidad FROM administrador WHERE name = :nombre AND password = :clave";
        $query = $this->pdo->prepare($sql);
      $query->bindParam(":nombre", $name);
        $query->bindParam(":clave", $password);
      $query->execute();
      $resultado = $query->fetch(); // ????
      return $resultado['cantidad'];
    }
    public function validarUsuario($name, $password)
    {
      $sql = "Select count(*) AS cantidad FROM usuarios WHERE name = :nombre AND password = :clave";
        $query = $this->pdo->prepare($sql);
      $query->bindParam(":nombre", $name);
        $query->bindParam(":clave", $password);
      $query->execute();
      $resultado = $query->fetch(); // ????
      return $resultado['cantidad'];
    }

public function Existencia($name, $password)
    {
      $sql = "Select count(*) AS cantidad FROM usuarios WHERE name = :nombre AND password = :clave";
        $query = $this->pdo->prepare($sql);
      $query->bindParam(":nombre", $name);
        $query->bindParam(":clave", $password);
      $query->execute();
      $resultado = $query->fetch(); // ????
      return $resultado['cantidad'];
    }
public function getRol($name)
    {
      $sql = "Select rol FROM administrador WHERE name = :nombre";
        $query = $this->pdo->prepare($sql);
      $query->bindParam(":nombre", $name);
      $query->execute();
      $resultado = $query->fetch();
      return $resultado['rol'];
    }

}

?>