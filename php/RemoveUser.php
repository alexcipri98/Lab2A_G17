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
  <?php include '../php/DbConfig.php'?>;

  <section class="main" id="s1">
  	<div>
  		<?php
    	$conexion = mysqli_connect($server, $user, $pass, $basededatos);

    	if(!$conexion){
    		die("Connection failed: " . mysqli_connect_error());
    	}
    		?>

    <?php
        $email=$_GET['email'];
    		$sql = "DELETE FROM usuarios WHERE email='".$email."'";
    		if(mysqli_query($conexion, $sql)){
    			echo"modificación realizada";
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