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
  		  	require_once('Dbconfig.php');
    		$conexion = mysqli_connect($server, $user, $pass, $basededatos);

    		if(!$conexion){
    			die("Connection failed: " . mysqli_connect_error());
    		}
      
      		$consultaPregunta = mysqli_query($conexion, "SELECT email, enunciado, respuestaC FROM preguntas");
      		$rawdata=array();
      		$i=0;
      		
      		while($row=mysqli_fetch_array($consultaPregunta)){
      			$rawdata[$i]=$row;
      			$i++;
      		}
      
      		$close=mysqli_close($conexion);
       
       		echo '<table width="100%" border="1" style="text-align:center;">';
   
   			$columnas = count($rawdata[0])/2;
   
   			$filas = count($rawdata);
   
   		   for($i=1;$i<count($rawdata[0]);$i=$i+2){
      			next($rawdata[0]);
      			echo "<th><b>".key($rawdata[0])."</b></th>";
      			next($rawdata[0]);
   			}

   			for($i=0;$i<$filas;$i++){
      			echo "<tr>";
      			for($j=0;$j<$columnas;$j++){
         			echo "<td>".$rawdata[$i][$j]."</td>";
      			}
    
    	 	echo "</tr>";

   			}
   			echo '</table>';
   		?>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
