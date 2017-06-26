<?php 
//Conexao com banco de dados
$con = new mysqli("localhost","root","","db_php7");
echo "Conectado ao bando com sucesso!<br>";

if ($con->connect_error) {
echo "Deu pau na conexao, Erro: " . $con->connect_error;
}//if

//SELECIONANDO DADOS NO BANCO E MOSTRANDO.
$query = $con->query("SELECT * FROM tbusuario ORDER BY loginusuario");

//MOSTRANDO DADOS
while ($row = $query->fetch_assoc()) {
	var_dump($row);
}