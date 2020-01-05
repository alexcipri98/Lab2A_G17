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
    	
    	

    		$email = $_POST['email'];
       	$enunciado = $_POST['enunciado'];
    		$respC = $_POST['resp1'];
    		$respuesta1 = $_POST['resp2'];
    		$respuesta2 = $_POST['resp3'];
    		$respuesta3 = $_POST['resp4'];
    		$dificultad = $_POST['dificultad'];
    		$tema = $_POST['tema'];
        $im=addslashes(file_get_contents($_FILES['image']['tmp_name']));
        move_uploaded_file($im, $_FILES['image']['name']);
    		?>

<?php
         if(preg_match("/[a-z]+[0-9]{3}@+(ikasle\.ehu\.eus|ikasle\.ehu\.es)/",$email)==null && preg_match("/([a-z]{2}\.[a-z]|[a-z])@+(ehu\.eus|ehu\.es)/",$email)==null){
         	            echo "<script> alert('email incorrecto')</script>";
         	            die('Email incorrecto <br><br>
         	             <button onclick="goBack()">Go Back</button>

								<script>
								function goBack() {
  								window.history.back();
								}
								</script>');

         }

        if(strlen($enunciado)< 10){
            echo "<script> alert('enunciado incompleto')</script>";
            die('Enunciado incompleto <br><br>
         	             <button onclick="goBack()">Go Back</button>

								<script>
								function goBack() {
  								window.history.back();
								}
								</script>');
         }

         if(strlen($respC) ==0){
            echo "<script> alert('respuesta correcta incompleta')</script>";
                        die('Respuesta correcta incompleta <br><br>
         	             <button onclick="goBack()">Go Back</button>

								<script>
								function goBack() {
  								window.history.back();
								}
								</script>');

         }
         
         if(strlen($respuesta1) ==0){
            echo "<script> alert('respuesta 2 incompleta')</script>";
                       die('Respuesta 2 incompleta <br><br>
         	             <button onclick="goBack()">Go Back</button>

								<script>
								function goBack() {
  								window.history.back();
								}
								</script>');


         }
         
         if(strlen($respuesta2) ==0){
            echo "<script> alert('respuesta 3 incompleta')</script>";
                          die('Respuesta 3 incompleta <br><br>
         	             <button onclick="goBack()">Go Back</button>

								<script>
								function goBack() {
  								window.history.back();
								}
								</script>');

         }
         
        if(strlen($respuesta3) ==0){
            echo "<script> alert('respuesta 4 incompleta')</script>";
                          die('Respuesta 4 incompleta <br><br>
         	             <button onclick="goBack()">Go Back</button>

								<script>
								function goBack() {
  								window.history.back();
								}
								</script>');
         }
         
          if(strlen($tema) ==0){
            echo "<script> alert('tema incompleto')</script>";
                          die('Tema incompleto <br><br>
         	             <button onclick="goBack()">Go Back</button>

								<script>
								function goBack() {
  								window.history.back();
								}
								</script>');
         }
         if(strlen($im)==0){
           echo "<script> alert('No ha insertado ninguna imagen')</script>";
                          die('Inserte alguna imagen <br><br>
                       <button onclick="goBack()">Go Back</button>

                <script>
                function goBack() {
                  window.history.back();
                }
                </script>');
         }
      /*    if(strlen($imagen) ==0){
            echo "<script> alert('imagen incompleto')</script>";
                          die('imagen incompleto <br><br>
                       <button onclick="goBack()">Go Back</button>

                <script>
                function goBack() {
                  window.history.back();
                }
                </script>');
         }*/

    ?>

    <?php
    $sql = "INSERT INTO Preguntas(clave, email, enunciado, respuestaC, respuesta1, respuesta2, respuesta3, complejidad, tema, contenido_imagen) VALUES (NULL, '$email', '$enunciado', '$respC', '$respuesta1', '$respuesta2', '$respuesta3', '$dificultad', '$tema', '$im')";
    if(mysqli_query($conexion, $sql)){
          
    } 
    else {
      echo "ERROR: " . $sql . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);

    $xml=simplexml_load_file('../xml/Questions.xml');
    $assessmentItem = $xml->addChild('assessmentItem');
    $assessmentItem ->addAttribute('author',$email);
    $assessmentItem ->addAttribute('subject','');
    $itemBody= $assessmentItem ->addChild('itemBody');
    $itemBody->addChild('p',$enunciado);
    $correctResponse= $assessmentItem ->addChild('correctResponse');
    $correctResponse->addChild('value',$respC);
    $incorrectResponse= $assessmentItem ->addChild('incorrectResponse');
    $incorrectResponse->addChild('value',$respuesta1);
    $incorrectResponse->addChild('value',$respuesta2);
    $incorrectResponse->addChild('value',$respuesta3);
    $foto=$assessmentItem ->addChild('imagen');
   // $foto->addChild('value',$imagen);
    $xml->asXML('../xml/Questions.xml');
   
    	?>
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>
