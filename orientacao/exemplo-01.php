<?php 
class Pessoa{
  public $nome;

  public function falar(){
	return "Olá, meu nome é: " . $this->nome;
   }//fim function falar

}//fim class

$obj = new Pessoa();
$obj->nome = "Leonardo Faria";
echo $obj->falar();