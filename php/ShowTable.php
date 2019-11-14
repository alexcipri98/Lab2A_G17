<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
echo '<link rel="stylesheet" type="text/css" href="../styles/table.css">
';
$assessmentItems = simplexml_load_file('../xml/Questions.xml');
 
	 echo "<table>
			<tr>
			  <td><strong>Autor</strong></td>
			  <td><strong>Enunciado</strong></td>
			  <td><strong>Respuesta correcta</strong></td>
			</tr>";
foreach($assessmentItems as $assessmentItem){
	$autor=$assessmentItem['author'];
	$asignatura=$assessmentItem['subject'];
	$enunciado=$assessmentItem->itemBody->p;
	$correct=$assessmentItem->correctResponse->value;
	$incorrect1=$assessmentItem->incorrectResponses->value[0];
	$incorrect2=$assessmentItem->incorrectResponses->value[1];
	$incorrect3=$assessmentItem->incorrectResponses->value[2];
	echo'
		<tr>
		<td>'.$autor.'</td>
		<td>'.$enunciado.'</td>
		<td>'.$correct.'</td>
		</tr>
		';

  }
echo'
</table>
';
?>
</body>
</html>

