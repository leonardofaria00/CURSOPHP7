<?php 

//Ferifica se a idade é menor que as idades informadas, se for ele imprime o resultado.
$idade = 66;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($idade < $idadeCrianca) {
	echo "Criança";
   } elseif ($idade < $idadeMaior) {
	echo "Adolecente";
   }elseif($idade < $idadeMelhor){
    echo "Adulto";
   }elseif($idade > $idadeMelhor){
    echo "Melhor idade";

   }else{
	echo "Idade não enontrada";
  }
  echo "<br>";
  echo ($idade < $idadeMaior)?"Menor de idade":"Maior de idade";

 ?>