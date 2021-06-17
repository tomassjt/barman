 
<?php
 
$conex = mysqli_connect("remotemysql.com","hLD4KWQmrz","9EAhRTiRvw","hLD4KWQmrz");
//server=remotemysql.com; database=hLD4KWQmrz; Uid=hLD4KWQmrz; Pwd=9EAhRTiRvw; Port =3306

if(!$conex){
	echo "Error: No se pudo conectar a MySQL.";
}
 
	
 else{
	 
 
	echo "si";
	
 }
?>
 