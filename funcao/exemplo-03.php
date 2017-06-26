<?php 
//passando valor por referencia "&"
$pessoa = array('nome'=>'Leonardo', 'idade'=>22);

foreach ($pessoa as &$value) {
	if (gettype($value) === 'integer') $value += 10;

echo $value. "<br>";
}

print_r($pessoa);