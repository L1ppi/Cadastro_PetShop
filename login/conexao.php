<?php

$servidor="localhost";
$banco="l1ppispet";
$usuario="root";
$senha="";

try {
    
    $pdo=new PDO("mysql:hostname=$servidor;dbname=$banco; charsetutf8","$usuario","$senha");

} catch (Exception $e) {

    echo "DB não conectado";
    echo $e;
}

?>