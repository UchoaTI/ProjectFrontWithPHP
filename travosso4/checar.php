<?php
    session_start();
    $nome = $_POST['nome'];
    $senha = md5($_POST['senha']);

    $conexao = new PDO('mysql:host=localhost:3306;dbname=meubanco', 'root', '');

    $query = $conexao -> prepare("SELECT nome, senha FROM usuario WHERE nome='$nome' AND senha='$senha' ");
    $query -> execute();
    $contar = $query -> rowCount();

    if($contar > 0){
        $_SESSION['usuario']=$usuario;
        header('location:painel.php');
    }
    else{
        header('location:login.html');
    }
?>


CREATE DATABASE meubanco;

use meubanco;

CREATE TABLE usuario(
    id int AUTO_INCREMENT PRIMARY KEY,
    nome varchar(30),
    email varchar(30),
    senha varchar(32)
 
); 

CREATE TABLE produto (
    codigo MEDIUMINT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (codigo),
    nome varchar(100),
    preco INT,
    estoque INT
    );