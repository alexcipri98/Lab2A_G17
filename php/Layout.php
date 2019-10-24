<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
  <?php include '../php/Menus.php' ?>
  <section class="main" id="s1">
    <div>

      <h2>Quiz: el juego de las preguntas</h2><br>
      <p>¿Desearía realizar alguna pregunta?</p><br>
      <?php
      $numero = count($_GET);
      if($numero!=0){
        $email=$_GET['email'];
        echo"<a href='QuestionForm.php?email=$email'>clica aqui para realizarla. </a>";
       }
       else{
        echo"<a href='LogIn.php'>Debe hacer login primero. </a>";
       }
      ?>
     
      
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
