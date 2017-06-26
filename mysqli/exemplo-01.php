<?php 
//Conexao com banco de dados
$con = new mysqli("localhost","root","","db_php7");
echo "Conectado ao bando com sucesso!<br>";

if ($con->connect_error) {
echo "Deu pau na conexao, Erro: " . $con->connect_error;
}//if

//Inserindo dados no banco
$login = "root";
$senha = "123";
$stmt = $con->prepare("INSERT INTO tbusuario (loginusuario, senhausuario) VALUES(?, ?)");

$stmt->bind_param("ss", $login, $senha);

$stmt->execute();
echo "Dados cadastrados com sucesso!<br>";

