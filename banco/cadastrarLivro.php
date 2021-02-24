<?php
include 'conectaBanco.php';

$titulo =  $_POST["titulo"];
$editora =  $_POST["editora"];
$autor = $_POST["autor"];
$quantidade =  $_POST["quantidade"];

$stmt = $conexao->prepare("INSERT INTO acervo(titulo, editora, autor, quantidade) VALUES (?,?,?,?)");

$stmt -> bindParam(1,$titulo);
$stmt -> bindParam(2,$editora);
$stmt -> bindParam(3,$autor);
$stmt -> bindParam(4,$quantidade);

$stmt -> execute();
 header('Location:../html/cadastrarLivro.html');

?>