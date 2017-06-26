<?php 
$con = new PDO("mysql:dbname=db_php7; host=localhost", "root", "");

$id = 2;

//DELETANDO DADOS
$stmt = $con->prepare("DELETE FROM tbusuario WHERE idusuario = :ID");

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Deletado com Sucesso!";

 ?>