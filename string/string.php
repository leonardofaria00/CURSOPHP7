<?php
echo "<h2>Strings - formas de trabalhar</h2>";
//variavel recebendo texto.
$var = "Lorem Ipsum é simplesmente um texto fofo da indústria de impressão e tipografia.";

//ststoupper = deixa os caracteres em caixa alta.
echo strtoupper("$var") ;
echo "<br>";

//strtolower = deixa os caracteres em caixa baixa.
echo strtolower("$var") ;
echo "<br>";

//ucwords = Deixa as Primeiras Letras em Caixa ALTA.
echo ucwords("$var") ;
echo "<br>";

//ucfirst = Deixa a PRIMEIRA Letra em Caixa ALTA, muito itulizado em PARAGRAFOS.
echo ucfirst("$var") ;
echo "<br>";

//TROCANDO OS DADOS STRINGS POR NUMERICOS.
//str_replace = Substitui um dado por outro.
$empresa = "Hcode";
$empresa = str_replace("o", "0", $empresa);
echo "$empresa";