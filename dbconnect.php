<?php

$server = 'localhost';
$user = 'root';
$password = '';
$db_name = 'bd_viaturas';
$port = '8086';

$db_connect = new mysqli($server,$user,$password,$db_name,$port);
mysqli_set_charset($db_connect,"utf8");

if($db_connect->connect_error) {
    echo 'Falha: ' . $db_connect->conncet_error;
} else {
    echo 'Conecao sucedida';
}


?>
