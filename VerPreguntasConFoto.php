<!DOCTYPE html>
<html>
  <head>

<?php  

include "ParametrosBD.php";


  		$conexion=mysqli_connect($servidor,$usuario,$password,$basededatos);
?>


</style>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Inicio</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
  </head>
  <body>
  <div id='page-wrap'>
	<header class='main' id='h1'>
		<span class="right"><a href="registro">Registrarse</a></span>
      		<span class="right"><a href="login">Login</a></span>
      		<span class="right" style="display:none;"><a href="/logout">Logout</a></span>
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
		<span><a href='layout.html'>Inicio</a></spam>
		<span><a href='preguntas.html'>Insertar Pregunta</a></spam>
		<span><a href='creditos.html'>Creditos</a></spam>
		<span><a href='VerPreguntasConFoto.php'>Ver Preguntas</a></spam>

	</nav>
    <section class="main" id="s1">
    
	<div>

	<h3>Estas son las preguntas almacenadas en la base de datos</h3>

<br>
<center>

<table border="1"style="background-color: white; text-align: center;">
	<tr>
		<td><strong>Nº</strong></td>
		<td><strong>EMAIL</strong></td>	
		<td><strong>ENUNCIADO</strong></td>	
		<td><strong>RESPUESTA CORRECTA</strong></td>
		<td><strong>Imagen</strong></td>
	</tr>
<?php 
$sql= "SELECT * FROM preguntas";
$resultado= mysqli_query($conexion,$sql);

while($imprimir=mysqli_fetch_array($resultado)){
 ?>
<tr>
	<td>&nbsp;&nbsp;<?php echo $imprimir['clave'] ?>&nbsp;&nbsp;</td>
	<td><br>&nbsp;&nbsp;<?php echo $imprimir['email'] ?>&nbsp;&nbsp;<br></td>
	<td>&nbsp;&nbsp;<?php echo $imprimir['enunciado']?>&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;<?php echo $imprimir['respcorrecta'] ?>&nbsp;&nbsp;</td>
	<td>&nbsp;&nbsp;<?php echo $imprimir['imagen']?>&nbsp;&nbsp;</td>
		
</tr>



 <?php  
}
?>

</table>


</center>


	</div>
    </section>
	<footer class='main' id='f1'>
		<a href='https://github.com/asierblaz/LAB2A-SW'>Link GITHUB</a>
	</footer>
</div>
</body>
</html>
