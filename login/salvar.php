<?php

require_once("conexao.php");
@session_start();

$user =$_POST['usuario'];
$passwd =$_POST['senha'];

try {
    $query = " INSERT INTO clientes (nomeCliente,senhaCliente)
    VALUES (:user, :passwd) ";
    
    $stmt =$pdo -> prepare($query);
    $stmt-> bindParam(":user",$user);
    $stmt-> bindParam(":passwd",$passwd);
    $stmt-> execute();

    echo'Usuario cadastrado com sucesso';

} catch (Exception $e) {
    
    echo "Erro ao cadastrar no banco de dados motivo: '$e'";
}

?>