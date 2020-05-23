<?php
//param do post defirido na index pelo nome do input
$nome = $_POST ["nome"];
$email = $_POST ["email"];
$senha = md5($_POST["senha"]);

$conexao = new PDO("mysql:host=localhost:3306;dbname=meubanco", "root", "");
$inserir = $conexao ->exec("INSERT INTO usuario (nome, email, senha) VALUES('$nome', '$email', '$senha')");

header('Location:login.html');

?>