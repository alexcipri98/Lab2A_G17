<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
   <?php include '../php/DbConfig.php'?>;
  <?php include '../php/Menus.php' ?>
 <section class="main" id="s1">
  <div>
      <h2>Inserte su correo electrónico</h2><br>
      <form id='Ssignup' name='Ssignup' method='post'>
        Email: <input type=text name="email" id="email" autofocus placeholder="ejemplo000@ikasle.ehu.eus"><br><br>
     <input name=btnLogA type=submit id="enviar" value="Enviar" ><br><br>
  </form>
    </div>
    </section>
    <?php
    if(isset($_POST['btnLogA'])){

        $conexion = mysqli_connect($server, $user, $pass, $basededatos);

        if(!$conexion){
          die("Connection failed: " . mysqli_connect_error());
        }
        $email=$_POST['email'];
        $consultaPregunta = mysqli_query($conexion, "SELECT * FROM Usuarios WHERE email='$email'");
        $row=mysqli_fetch_array($consultaPregunta);
        $contraseña=$row['password'];
        $estado=$row['estado'];
        if($email==""){
          echo "<script> alert('Por favor asegurese de que ha añadido un email') </script>";
          die('datos incorrectos<br><br>');
        }
        if($contraseña!=""){
          if($estado=='bloqueado'){
            echo "<script> alert('Usted ha sido bloqueado') </script>";
            die('Usuario bloqueado<br><br>');
          }
          mail($email,"Restablecimiento de password","probando");
        }
       else{
          echo "<script> alert('los datos introducidos no son correctos') </script>";
          die('datos incorrectos<br><br>');
        }
        
      }
      ?>
  </body>
  </html>