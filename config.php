<?php
try {
	$pdo = new PDO("mysql:dbname=registroporconvite;host=localhost", "root", "");
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}