<?php

    require_once('../lib/nusoap.php');
    require_once('../lib/class.wsdlcache.php');
    //creamos el objeto de tipo soap_server
    $ns="http://localhost/ProyectoSW2019/php";
    $server = new soap_server();
    $server->configureWSDL('compr',$ns);
    $server->wsdl->schemaTargetNamespace=$ns;
    //registramos la función que vamos a implementar
    $server->register('compr',array('x'=>'xsd:string','y'=>'xsd:int'),array('z'=>'xsd:string'),$ns);
    //implementamos la función
    function compr($contrasena, $ticket){
        
        if($ticket!=1010) return 'Número de ticket inválido';
        $pagina = file_get_contents("../txt/toppasswords.txt");
        $pos = strpos($pagina, $contrasena);
        if ($pos === false)return 'VALIDA';
        else return 'INVALIDA';
        
    }
    //llamamos al método service de la clase nusoap
    if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents( "php://input" );
    $server->service($HTTP_RAW_POST_DATA);

?>