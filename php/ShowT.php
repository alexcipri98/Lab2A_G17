<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<?php
if($_SESSION['autentificacion']=="si"){
}
else{
  echo"<script> alert('Debe hacer login primero');
                         
                          window.location.href='../php/LogIn.php?<?=SID?>';
                </script>";
}
?>
<head>
</head>
<body>
<?php
$val=$_SESSION['email'];        
$count=0;
$total=0;
echo '<link rel="stylesheet" type="text/css" href="../styles/table.css">';
$assessmentItems = simplexml_load_file('../xml/Questions.xml');
 
	 echo "<table>
			<tr>
			  <td><strong>Número total de preguntas</strong></td>
			  <td><strong>Número de preguntas insertadas por usted</strong></td>
			</tr>";
foreach($assessmentItems as $assessmentItem){
	$total=$total+1;
	$autor=$assessmentItem['author'];
	if($autor==$val){
		$count=$count+1;
	}
  }
  echo'
		<tr>
		<td>'.$total.'</td>
		<td>'.$count.'</td>
		</tr>
		';

echo'
</table>
';
?>
</body>
</html>

