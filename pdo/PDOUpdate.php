<?php 
$con = new PDO("mysql:dbname=db_php7; host=localhost", "root", "");

$login = "Leonardo Faria";
$password = "asdasq";
$id = 3;

//ALTERANDO DADOS
$stmt = $con->prepare("UPDATE tbusuario SET loginusuario = :LOGIN, senhausuario = :PASSWORD WHERE idusuario = :ID");

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();
echo "Alterado com Sucesso!";

 ?>