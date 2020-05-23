
<?php
session_start();
if (!$_SESSION['usuario']){

} 
else {
    header("location:index.html");
}

    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $estoque = $_POST["estoque"];

    $conexao = new PDO('mysql:host=localhost:3306;dbname=meubanco', 'root', '');

    $inserir = $conexao -> exec("INSERT INTO produto (nome, preco, estoque) VALUES ('$nome', '$preco', '$estoque')");
    
    header('Location:painel.php');

?>

