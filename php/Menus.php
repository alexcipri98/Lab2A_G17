
<?php
if (isset($_SESSION['email']))
{
$email=$_SESSION['email'];
if($email=="admin@ehu.es"){
  echo"
<div id='page-wrap'>
<script src='../js/ShowMoreOptions.js'></script>
<header class='main' id='h1'>
        <span class='right'><a href='LogOut.php'>Logout</a></span>
        <span class='right' style='display:none;'><a href='/logout'>Logout</a></span> <br>
        <span>$email </span>
</header>

<nav class='main' id='n1' role='navigation'>
  <span><a href='Layout.php?'>Inicio</a></span><br><br>
  <span><a href='HandlingAccounts.php?'> Gestionar usuarios</a></span><br><br>
  <span><a href='Credits.php?'>Creditos</a></span><br><br>
</nav>";
}else{
echo"
<div id='page-wrap'>
<script src='../js/ShowMoreOptions.js'></script>
<header class='main' id='h1'>
        <span class='right'><a href='LogOut.php'>Logout</a></span>
        <span class='right' style='display:none;'><a href='/logout'>Logout</a></span> <br>
        <span>$email </span>
</header>

<nav class='main' id='n1' role='navigation'>
  <span><a href='Layout.php?'>Inicio</a></span><br><br>
  <span><a href='HandlingQuizesAjax.php?'> Gestionar preguntas</a></span><br><br>
  <span><a href='Credits.php?'>Creditos</a></span><br><br>
</nav>";}
}
else{
	echo"
	<div id='page-wrap'>
<header class='main' id='h1'>

<span class='right'><a href='SignUp.php'>Registro</a></span>
        <span class='right'><a href='LogIn.php'>Login</a></span>
        <span class='right' style='display:none;'><a href='/logout'>Logout</a></span>
</header>

<nav class='main' id='n1' role='navigation'>
  <span><a href='Layout.php'>Inicio</a></span><br><br>
  <span><a href='Credits.php'>Creditos</a></span>
</nav>";
}
?>