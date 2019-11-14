
<?php
$numero = count($_GET);
if($numero!=0){
$email=$_GET['email'];
echo"
<div id='page-wrap'>
<header class='main' id='h1'>
        <span class='right'><a href='LogOut.php'>Logout</a></span>
        <span class='right' style='display:none;'><a href='/logout'>Logout</a></span> <br>
        <span>$email </span>
</header>

<nav class='main' id='n1' role='navigation'>
  <span><a href='Layout.php?email=$email'>Inicio</a></span><br><br>
  <span><a href='QuestionForm.php?email=$email'> Insertar Pregunta</a></span><br><br>
  <span><a href='Credits.php?email=$email'>Creditos</a></span><br><br>
    <span><a href='ShowXmlQuestions.php?email=$email'>ShowXmlQuestions</a></span><br><br>
     <span><a href='ShowQuestions.php?email=$email'>ShowQuestions</a></span>
</nav>";
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