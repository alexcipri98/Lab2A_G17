<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="../js/ValidateFieldsQuestion.js"></script>
  <section class="main" id="s1">

    <div>

 
      <form id='fquestion' name='fquestion' action='AddQuestion.php'>
      	Email: <input type=text id="email" autofocus placeholder="ejemplo000@ehu.eus"><br><br>
      	Inserte el enunciado: <input type=text id="enunciado"><br><br>
        Inserte la respuesta correcta: <input type=text id="resp1"><br><br>
        Inserte la primera incorrecta: <input type=text id="resp2"><br><br>
        Inserte la segunda incorrecta: <input type=text id="resp3"><br><br>
        Inserte la tercera incorrecta: <input type=text id="resp4"><br><br>
      	<br><br>
      	
        Dificultad de la pregunta
      <select name="desdoblamiento">
			<option value="1">Baja
			<option value="2">Media
			<option value="3">Alta
		</select><br><br>
		Tema de la pregunta <input type="text" id="tema"><br><br>
    <input type=submit id="enviar" value="Enviar">
    </form>
    </div>

  </section>
  <?php include '../html/Footer.html' ?>
  
</body>
</html>
