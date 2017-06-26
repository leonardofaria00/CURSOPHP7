<form method="POST">
	<input type="text" name="nome">
		<input type="date" name="nascimento">
	<input type="submit" value="OK">

</form>
<?php 

foreach ($_POST as $key => $value) {
	echo "Nome do campo: ".$key."<br>";
	echo "Valor do campo: ". $value. "<br>";
	echo "<hr>";
}

 ?>