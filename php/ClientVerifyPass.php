<?php
    require_once('../lib/nusoap.php');
    require_once('../lib/class.wsdlcache.php');

  $soapclient = new nusoap_client('http://localhost:80/ProyectoSW2019/php/VerifyPassWS.php?wsdl');
  
  if (isset($_GET['password'])){
    $respuesta = $soapclient->call('compr',array( 'x'=>$_GET['password'],'y'=>$_GET['ticket']));
    //echo '<h1>La contraseña introducida es ';
    echo $respuesta;
   /* echo '<h2>Request</h2><pre>' . htmlspecialchars($soapclient->request, ENT_QUOTES) . '</pre>';
    echo '<h2>Response</h2><pre>' . htmlspecialchars($soapclient->response, ENT_QUOTES) . '</pre>';
    echo '<h2>Debug</h2>';
    echo '<pre>' . htmlspecialchars($soapclient->debug_str, ENT_QUOTES) . '</pre>';*/
  }
?>
