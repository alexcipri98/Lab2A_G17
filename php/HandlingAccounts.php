<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<?php
if($_SESSION['autentificacion']!='si'){
	echo"<script> alert('Debe hacer login primero');
                          window.location.href='../php/LogIn.php?<?=SID?>';
                </script>";
}
if($_SESSION['email']!='admin@ehu.es'){
  				echo"<script> alert('Usted no es un usuario administrador');
                         
                          window.location.href='../php/HandlingQuizesAjax.php?<?=SID?>';
                </script>";
}
?>
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
      
          $consultaPregunta = mysqli_query($conexion, "SELECT tipo, email, nombre, password, estado FROM usuarios");
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
        echo "<th><b>Modifica estado</b></th>";
        echo "<th><b>Borrar</b></th>";
        for($i=0;$i<$filas;$i++){
            echo "<tr>";
            for($j=0;$j<$columnas;$j++){
              echo "<td>".$rawdata[$i][$j]."</td>";
            }
            $email=$rawdata[$i][1];
            $estado=$rawdata[$i][4];
          	if($estado=='activo'){
          		$aux=1;
          	}else{
          		$aux=0;
          	}
    	echo"<td><input name='btn' type='button' id='modificar' value='Modificar' onclick=modifica('".$email."',".$aux.")></input></td>";
    	echo"<td><input name='btn2' type='button' id='borrar' value='Eliminar' onclick=elimina('".$email."')></input><td>";
        echo "</tr>";

        }
        echo '</table>';
      ?>
      <script>
      function modifica(email,estado){
        if(email=='admin@ehu.es'){
    		alert("Este usuario no puede ser bloqueado, es un usuario ADMINISTRADOR");
       		var resultado=false;
        }else{
          var resultado=confirm("¿Seguro que deseas modificar a este usuario?");
        }
      	var dir='../php/ChangeState.php?email='+email+'&estado='+estado;
 		   if(resultado){
 			    window.location.href=dir;
 		     } 
      	}
      function elimina(email){
       if(email=='admin@ehu.es'){
       		alert("Este usuario no puede ser eliminado, es un usuario ADMINISTRADOR");
       		var resultado=false;
        }else{
          var resultado=confirm("¿Seguro que deseas eliminar a este usuario?");
        }        
        var dir='../php/RemoveUser.php?email='+email;

      	if(resultado){
 					window.location.href=dir;
 			  } 
      	}
      </script>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
