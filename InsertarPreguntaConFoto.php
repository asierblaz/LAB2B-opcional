<!DOCTYPE html>

<html>
  <head>
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
		<?php
include "ParametrosBD.php";

	$conexion = mysqli_connect ($servidor,$usuario,$password) or die
	("No se ha podido conectar con el servidor de Base de datos");
	
	$db = mysqli_select_db($conexion, $basededatos) or die 
	("No se ha podido conectar a la Base de datos");
	
	//recuperar las variables
	$email=$_POST['email'];
	$enunciado=$_POST['enunciado'];
	$respcorrecta=$_POST['respcorrecta'];
	$respincorrecta1=$_POST['respincorrecta1'];
	$respincorrecta2=$_POST['respincorrecta2'];
	$respincorrecta3=$_POST['respincorrecta3'];
	$complejidad=$_POST['complejidad'];
	$tema=$_POST['tema'];
		$dir="img";

	$imagen=$_FILES['imagen']['name'];
	$archivo= $_FILES['imagen']['tmp_name'];

	$dir=$dir."/".$imagen;
	move_uploaded_file($archivo, $dir);



//if(!move_uploaded_file($_FILES['imagen']['tmp_name'],"$dir/$imagen")){
//	echo "error";





	//sentencia sql
	
	$sql="INSERT INTO preguntas VALUES ('clave','$email','$enunciado','$respcorrecta','$respincorrecta1','$respincorrecta2','$respincorrecta3','$complejidad','$tema','<img  width=100px src=".$dir.">')";




	 $ejecutar=mysqli_query($conexion, $sql);
	
	 //verificacion de la ejecucioon

	 if(!$ejecutar){

	  echo"Ha ocurrido un error <br><a href='preguntas.html'>Volver</a>";
	 }else{ 
	 echo"Datos guardados correctamente <br><a href='VerPreguntasConFoto.php'>Ver las preguntas almacenadas en la BD</a>";

	 } 
	 
	 
	 ?>﻿

	</div>
    </section>
	<footer class='main' id='f1'>
		<a href='https://github.com/asierblaz/LAB2A-SW'>Link GITHUB</a>
	</footer>
</div>
</body>
</html>
