<?php 

try {
	$pdo = new PDO("mysql:dbname=projeto_reservas;host=localhost", "root", "");
} catch(PDOExeption $e) {

	echo "ERRO: ".$e->getMenssage();
	exit;
	
}

?>