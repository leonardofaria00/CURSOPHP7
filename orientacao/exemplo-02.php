<?php 
class Pessoa{
public $nome;
public $idade;

public function status(){

	return "Meu nome é: ".$this->nome." minha Idade é: ".$this->idade;
}//fim status

	}//fim class

	//Criando o objeto
	$objeto = new Pessoa();

	//Colocando dados dentro do atributo.
	$objeto->nome ="Lindolfo";
	$objeto->idade = "22";

	//imprimindo o metodo.
	echo $objeto->status();