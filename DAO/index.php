<!DOCTYPE html>

<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Conteúdo aqui</h2>
        <hr>
    </body>
</html>

<?php
// Carrega a classe que estiver sendo instanciada
require_once("config.php");

//Carrega usuario pelo ID
//$leo = new usuario();
//$leo->loadById(3);
//echo $leo;


//Carrega uma lista de Usuarios.
//$lista = usuario::listaUsuarios();
//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo Login
$busca = usuario::search("Leo"); //ATENÇÂO, tem que passar o dado dentro do objeto
echo json_encode($busca);
?>
