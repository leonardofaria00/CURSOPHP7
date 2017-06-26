<?php 
//Usando a função DATA e HORA (date end TIME) no PHP.
echo date("l, d/m/Y H:i:s");

//usando a função SETLOCATE para definir a . LC_ALL muda a configuração de localização para portugues. 
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portugues");

//Definindo Dia e Mês do ano.
echo ucwords( strftime("%A %B"));
 ?>