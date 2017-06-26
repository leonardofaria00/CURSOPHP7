<?php 
//Esta função recebe "Mundo e Bom dia como default." Podemos passar os parametros ao chamarmos a função, quando é feito o echo deve ser dizer qual parametro deve ser passado.
function dizerOla($texto = "Mundo", $periodo = "Bom dia"){

	return "Ola $texto, $periodo <br>";
}
//passando parametro para a função.
echo dizerOla("João");
echo dizerOla("João", "Boa tarde");
echo dizerOla();

 ?>