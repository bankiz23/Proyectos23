<?php
session_start();
include 'BD.php';

if(isset($_SESSION['usuario']) and isset($_SESSION['contrasenia'])){
if ($_SESSION['Rol'] != 8) {
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
                      <strong>Tu!</strong> No tienes el permiso necesario para agregar usuario.
                      <a href="index.php">Click aquí para volver</a>
                    </div>
                  </div>

                  </body>
            </html>';
  }
  else
  {
  	
  	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Agregar Usuario</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="add_user.php" method="POST" onclick="return existencia()">
				<span class="contact100-form-title">
				Agregar Usuario 
				</span>


				<div class="wrap-input100 validate-input" data-validate="Ingrese Nombre">
					<label class="label-input100" for="name">Nombre de usuario</label>
					<input id="name" class="input100" type="text" name="name" placeholder="Ingrese Nombre">
					<span class="focus-input100"></span>

				</div>


				<div class="wrap-input100 validate-input" data-validate = "12345">
				<label class="label-input100" for="password">Contraseña</label>
					<input id="password" class="input100" type="password" name="password" placeholder="Ingrese Contraseña">
					<span class="focus-input100"></span>
				</div>

<div class="wrap-input100">
	
				<div class="wrap-input100">
					<div class="label-input100">Privilegios</div>
					<input type="checkbox" name="numero1" value="0"/> Subir Videos <br/>
			     	<input type="checkbox" name="numero2" value="1"/> Editar Videos <br/>
			     	<input type="checkbox" name="numero3" value="2"/> Eliminar Videos <br/>

					
					<span class="focus-input100"></span>
				</div>

				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit">
						Enviar
					</button>
				</div>
				<div class="container-contact100-form-btn">
					<a href="usuarios.php">Salir</a>
				</div>
			
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/visita.jpg');">
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
		$(".js-select2").each(function(){
			$(this).on('select2:open', function (e){
				$(this).parent().next().addClass('eff-focus-selection');
			});
		});
		$(".js-select2").each(function(){
			$(this).on('select2:close', function (e){
				$(this).parent().next().removeClass('eff-focus-selection');
			});
		});

	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	  
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