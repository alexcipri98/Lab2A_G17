<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
  	<div>
  		<?php
  		require_once('Dbconfig.php');
    	$conexion = mysqli_connect($server, $user, $pass, $basededatos);

    	if(!$conexion){
    		die("Connection failed: " . mysqli_connect_error());
    	}
    	
    	echo "Connected succesfully <br><br>";

    		$email = $_POST['email'];
       		$enunciado = $_POST['enunciado'];
    		$respC = $_POST['resp1'];
    		$respuesta1 = $_POST['resp2'];
    		$respuesta2 = $_POST['resp3'];
    		$respuesta3 = $_POST['resp4'];
    		$dificultad = $_POST['dificultad'];
    		$tema = $_POST['tema'];


    		$sql = "INSERT INTO preguntas(clave, email, enunciado, respuestaC, respuesta1, respuesta2, respuesta3, complejidad, tema) VALUES (NULL, '$email', '$enunciado', '$respC', '$respuesta1', '$respuesta2', '$respuesta3', '$dificultad', '$tema')";

    		if(mysqli_query($conexion, $sql)){
    			echo "New record created successfully <br><br>";
    			echo "<a href='ShowQuestions.php'>Ver preguntas</a><br><br> ";
    		} 
    		else {
    			echo "ERROR: " . $sql . "<br>" . mysqli_error($conexion);
    		}
    		mysqli_close($conexion);
    	?>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
