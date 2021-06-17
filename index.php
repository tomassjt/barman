<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos2.css">
      
     
				<title>BARMAN</title>
</head>

<body>
		
	
	<main>
	<h1 >BARMANa</h1>	
	<header>

	</header>	
<!--Este contenedor abarca la parte de atras y delante-->
<div class="contenedor_todo">
<div class="caja_fondo">
		<div class="caja_fondo_login">
			<h3>Iniciar secion</h3>
			<p>ya tienes una cuenta?</p>
			<p>inicia secion para ingresar a tu cuenta</p>
			<button id=btnIniciar>Iniciar Secion</button>
		</div>			
		<div class="caja_fondo_registrar">
			<h3>Registrarse</h3>
			<p>aun no tienes una cuenta?</p>
			<p>registrate gratis para obtener tu cuenta</p>
			<button id="btnRegistrarme">Registrarme</button>
		</div>
</div>
		
<div class="caja_movil" >
	<form   method="post"  class="formulario_login"  >
		<h3>Iniciar secion</h3>
			<input type="email" placeholder="Ejemplo@gmail.com" name="email_log">
			<input type="password" placeholder="Contraseña" name="password_log">
			<input id="enviar2"type="submit" value="Iniciar" name="enviar_reg">	
	</form>
	<form   method="post" class="formulario_registrar">
		<h3>Registar</h3>
			<input type="text" placeholder=" Nombre" name="nombre">
			<input type="text" placeholder=" Apellido"  name="apellido">
			<select name="sexo" >
			<option>Masculino</option>
			<option>Femenino</option>
			<option>Otro</option></select>
			<input type="email"placeholder=" Ejemplo@gmail.com" name="correoR">
			<input type="text" value="telefono"placeholder=" 343889999" name="telefono">
			<input type="password"value=" AAAAAA" name="claveR">
			<input id="enviar1"type="submit" value="Registrar"name="enviar_reg">
	</form>
</div>
</div>
</main>
<!--<script src="script.js"></script> 	
 	
<script src="registrar.php"></script>--> 
 
 <?php
include "script.php";
include "conexion.php";
include"registrar.php";
 ?>

	 
</body>
</html>