<?php 
$con = new PDO("mysql:dbname=db_php7; host=localhost", "root", "");

$stmt = $con->prepare("SELECT * FROM tbusuario ORDER BY loginusuario");
$stmt->execute();

$query = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($query as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>" .$key.": </strong>".$value."<br>";
	}
	echo "=========================<br>";
}



 ?>