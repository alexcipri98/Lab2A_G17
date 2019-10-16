<?php
$local=1; //0 para la nube
if ($local==1){
    $server="localhost";
    $user="root";
    $pass="";
    $basededatos="quiz";
}
else{
    $server="localhost:3306";
    $user="id10865980_alexymireia";
    $pass="alexymireia";
    $basededatos="id10865980_quiz";
}
?>
