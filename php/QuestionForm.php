<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>

  <section class="main" id="s1">

    <div>

 
      <form id='fquestion' name='fquestion' method='post' action='AddQuestion.php'>
        <?php
        $val=$_GET['email'];
      	echo"Email: <input type=text name='email' id='email' value='$val'><br><br>";
        ?>
      	Inserte el enunciado: <input type=text name="enunciado" id="enunciado"><br><br>
        Inserte la respuesta correcta: <input type=text name="resp1" id="resp1"><br><br>
        Inserte la primera incorrecta: <input type=text name="resp2" id="resp2"><br><br>
        Inserte la segunda incorrecta: <input type=text name="resp3" id="resp3"><br><br>
        Inserte la tercera incorrecta: <input type=text name="resp4" id="resp4"><br><br>
      	<br><br>
      	
        Dificultad de la pregunta
      <select name="dificultad" id="dificultad">
			<option value="1">Baja</option>
			<option value="2">Media</option>
			<option value="3">Alta</option>
		</select><br><br>
		Tema de la pregunta <input type="text" name= "tema" id="tema"><br><br>
    <input type=submit id="enviar" value="Enviar" >
    </form>






    
    </div>

  </section>
  <?php include '../html/Footer.html' ?>
  
</body>
</html>
