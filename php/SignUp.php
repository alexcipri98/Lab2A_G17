<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
	  <?php include '../php/DbConfig.php'?>;

  <?php include '../php/Menus.php' ?>
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/ValidateSignUp.js"></script>
  <script src="../js/SinginAjax.js"></script>
  <script src="../js/SingpassAjax.js"></script>
  <section class="main" id="s1">
  <div>
      <h2>Registrate!!</h2><br>
      <form id='Ssignup' name='Ssignup' method='post'>
      	<select name="tipo" id="tipo">
			<option value="1">Alumno</option>
			<option value="2">Profesor</option>
		</select><br><br>
      	Email: <input type=text name="email" id="email" autofocus placeholder="ejemplo000@ikasle.ehu.eus"><div id='mss'></div><br><br>
      	Nombre y Apellido/s: <input type=text name="nombre" id="nombre"><br><br>
        Contraseña: <input type=password name="password" id="password"><br><br>
        <div id='mss2'></div>
        Repetir contraseña: <input type=password name="password2" id="password2"><br><br>
   	 <input name=btnLogA type=submit id="enviar" value="Enviar" disabled=true >
	</form>
    <?php
      if(isset($_POST['btnLogA'])){

      $conexion = mysqli_connect($server, $user, $pass, $basededatos);

      if(!$conexion){
        die("Connection failed: " . mysqli_connect_error());
      }
      
        $tipo=$_POST['tipo'];
        $email = $_POST['email'];
        $nombre = $_POST['nombre'];
        $contraseña = crypt($_POST['password'],'st');
        $contraseña1 = crypt($_POST['password2'],'st');
        $estado="activo";

        if(strlen($contraseña)<6){

       echo "<script> alert('contraseña demasiado corta')</script>";
             die('contraseña demasiado corta <br><br>');
        
        }
        if($contraseña!=$contraseña1){
           echo "<script> alert('Las contraseñas no coinciden')</script>";
           die('Las contraseñas no coinciden<br><br>');
        }
          echo "<br><br>";
      
        $sql = "INSERT INTO Usuarios(tipo, email, nombre, password, estado) VALUES ('$tipo', '$email', '$nombre', '$contraseña', '$estado')";

        if(mysqli_query($conexion, $sql)){
          echo "new record created";
        } 
        else {
          echo "ERROR: " . $sql . "<br>" . mysqli_error($conexion);
        }
        mysqli_close($conexion);
      }
        ?>

    </div>
    </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>