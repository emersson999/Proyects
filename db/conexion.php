<?php 
$host ='localhost';
$user = 'root';
$password = '';
$namedb = 'prueba_atenea';

 $conection = new mysqli($host, $user, $password, $namedb);

 if ($conection->connect_error){
    echo 'Error de conexión';
    exit();
 }else{
    echo "";
 }
?>