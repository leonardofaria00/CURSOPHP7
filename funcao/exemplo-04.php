<?php 
//Esta função realiza a soma de qualquer valor que for passado no echo, e pode ser convertida para qualquer tipo usando como exemplo o ":string".
function soma(int ... $valores):string{
return array_sum($valores);
}

echo var_dump(soma(2, 2));

 ?>