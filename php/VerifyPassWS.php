<?php
//incluimos la clase nusoap.php
require_once('../lib/nusoap.php');
require_once('../lib/class.wsdlcache.php');
//creamos el objeto de tipo soap_server
echo '<script>alert("hey");</script>';
$ns="http://localhost";
$server = new soap_server;
$server->configureWSDL('cont',$ns);
$server->wsdl->schemaTargetNamespace=$ns;
//registramos la función que vamos a implementar
$server->register('cont',array('x'=>'xsd:string','y'=>'xsd:int'), array('z'=>'xsd:string'), $ns);

//implementamos la función
function cont($x,$y){
        $archivo = fopen("../txt/toppasswords.txt", "r");
        if ($y == 1010){
        while(!feof($archivo)){
            if(strcmp($x, str_replace(array("\r", "\n"), '', fgets($archivo))) == 0){
                fclose($archivo);
                return "INVALIDA";
            }
        }
        return "VALIDA";
    }
    else{
        return "SIN SERVICIO";
    }
}
//llamamos al método service de la clase nusoap antes obtenemos los valores de los parámetros
if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );
$server->service($HTTP_RAW_POST_DATA);
?>
