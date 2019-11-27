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
      <h2>HAZ LOGIN!!</h2><br>
      <form id='Ssignup' name='Ssignup' method='post'>
        Email: <input type=text name="email" id="email" autofocus placeholder="ejemplo000@ikasle.ehu.eus"><br><br>
        Contraseña: <input type=password name="password" id="password"><br><br>
     <input name=btnLogA type=submit id="enviar" value="Enviar" >
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
        $password1=$_POST['password'];
        $consultaPregunta = mysqli_query($conexion, "SELECT * FROM Usuarios WHERE email='$email'");
        $row=mysqli_fetch_array($consultaPregunta);
        $contraseña=$row['password'];
        $estado=$row['estado'];

        if($email==""){
          echo "<script> alert('los datos introducidos no son correctos') </script>";
          die('datos incorrectos<br><br>');
        }
        if($contraseña==$password1){
          if($estado=='bloqueado'){
            echo "<script> alert('Usted ha sido bloqueado') </script>";
            die('Usuario bloqueado<br><br>');
          }
				$_SESSION['email'] = $email;
				$_SESSION['autentificacion']="si";
          echo "<script> alert('Bien venido, click en aceptar para continuar!');
                         
                          window.location.href='../php/Layout.php';
                </script>";
        }
       else{
          echo "<script> alert('los datos introducidos no son correctos') </script>";
          die('datos incorrectos<br><br>');
        }
        
      }
      ?>
  </body>
  </html>