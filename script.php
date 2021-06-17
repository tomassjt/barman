  

<script type="text/javascript">
 alert("Holaassssss!");
 
 
//definimos a que funcion nos dirige cada boton
document.getElementById("btnIniciar").addEventListener("click",iniciar);
document.getElementById("btnRegistrarme").addEventListener("click",register);

// Declaramos variables 
var caja_movil = document.querySelector(".caja_movil");
var formulario_registrar = document.querySelector(".formulario_registrar");
var formulario_login  = document.querySelector(".formulario_login");
var caja_fondo_login = document.querySelector(".caja_fondo_login");
var caja_fondo_registrar = document.querySelector(".caja_fondo_registrar");
 
// Cuando dan click en registar      
function register() {
	
	if(window.innerWidth > 850){
	formulario_registrar.style.display ="block";
	caja_movil.style.left = "45%";
 	formulario_login.style.display = "none";
	caja_fondo_login.style.display="block";
	caja_fondo_registrar.style.display="none";
	caja_fondo_login.style.opacity=1;
	caja_fondo_login.style.left="1%";
}
else{
	
	caja_movil.style.left = "1%";	
 	formulario_login.style.display = "none";
	formulario_registrar.style.display = "block";
	caja_fondo_registrar.style.display="none";
	caja_fondo_registrar.style.opacity=0;
	caja_fondo_login.style.display="block";
	caja_fondo_login.style.opacity=1;
	caja_fondo_login.style.left="50%";
}
}
function iniciar() {
	if(window.innerWidth>867){
	caja_fondo_registrar.style.display="none";
	caja_fondo_login.style.display="none";
	caja_fondo_registrar.style.display="block";
	caja_fondo_registrar.style.left="55%";
	caja_movil.style.left = "40px";
 	formulario_login.style.display = "block";
	formulario_registrar.style.display = "none";	
	 	
 
}
	else{
	caja_fondo_login.style.opacity=0;
	caja_fondo_login.style.display="none";
	caja_movil.style.left = "1%";	
 	formulario_login.style.display = "block";
	formulario_registrar.style.display = "none";
	caja_fondo_registrar.style.display="block";
	caja_fondo_registrar.style.opacity=1;
	caja_fondo_registrar.style.left="50%";
		
	}}
	
 
</script>