<?php 
    session_start();
?>
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
      if(isset($_SESSION['email'])){
        if($_SESSION['email']=="admin@ehu.es"){
          echo "<h2>Muy buenas administrador</h2><br>
      <p>¿Desearía realizar alguna modificación de los usuarios?</p><br>";
      echo"<a href='HandlingAccounts.php'>clica aqui para realizarla. </a>";
        }else{
          echo"<h2>Quiz: el juego de las preguntas</h2><br>
              <p>¿Desearía realizar alguna pregunta?</p><br>";
          echo"<a href='HandlingQuizesAjax.php'>clica aqui para realizarla. </a>";
        }
      }else{
         echo"<h2>Quiz: el juego de las preguntas</h2><br>
              <p>¿Desearía realizar alguna pregunta?</p><br>";
         echo"<a href='LogIn.php'>Debe hacer login primero. </a>";
      }
      ?>
     
      
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
