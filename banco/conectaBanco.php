<?php
header('Content-Type: text/html; charset=utf-8');

try{
	
	$conexao = new PDO('mysql:host=localhost;dbname=bibliotecasys','root','');

	}catch(PDOException $e){
	echo 'ERROR: ' . $e->getMessage();
 }

?>