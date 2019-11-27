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
  <?php
 	session_destroy ();
  ?>
  <script>
  alert('Hasta pronto, te esperamos, click en aceptar para finalizar!');
	window.location.href="../php/Layout.php";
</script>
</body>
</html>