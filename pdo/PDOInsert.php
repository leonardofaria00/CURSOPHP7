<?php 
$con = new PDO("mysql:dbname=db_php7; host=localhost", "root", "");

$login = "leonardo";
$password = "123456";

//INSERINDO DADOS
$stmt = $con->prepare("INSERT INTO tbusuario (loginusuario, senhausuario)
 VALUES(:LOGIN, :PASSWORD)");

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();
echo "Inserido!";





 ?>