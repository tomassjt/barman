<?php 
include 'conexion.php';

 if(isset($_POST['enviar_reg'])){

 if(strlen($_POST['nombre'])>1 && strlen($_POST['apellido'])>1)  {

	$correoR=trim($_POST['correoR']);
	$nombre=trim($_POST['nombre']);
	$apellido=trim($_POST['apellido']);
	$telefono=trim($_POST['telefono']);
	$claveR=trim($_POST['claveR']);
	$sexo=trim($_POST['sexo']);
	//$fecha=date("d/m/y"); a implementar
	//base de datos hLD4KWQmrz tabla usuarios
	 //servidor https://remotemysql.com/
	 //usuario Uid=hLD4KWQmrz; 
	 //contraseña Pwd=9EAhRTiRvw; Port =3306;
	$consulta="INSERT INTO `hLD4KWQmrz`.`usuarios` (`nombre`,`apellido` ,`email_reg`,`telefono` ,`password_reg`,`sexo`) VALUES ('$nombre', '$apellido', '$correoR','$telefono','$claveR','$sexo')";
	                 
	$resultado =mysqli_query($conex,$consulta);
	if($resultado){
    
		?>
<h1 class="ok">  !Usuario registrado Correctamente¡</h1>

<?php             
}else{
?>
<h3 class="bad"> !Ups no se pudo conectar a DB culiao!</h3>
<?php
     }
}else{
?>
<h3 class="bad"> !debes completar los campos </h3>
<?php
 }
 }
mysqli_close($conex);
 ?>
 
 
 
