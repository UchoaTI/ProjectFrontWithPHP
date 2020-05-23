<?php

$conexao = new PDO('mysql:host=localhost:3306;dbname=meubanco', 'root', '');

$result = $conexao -> query("SELECT codigo, nome, preco, estoque FROM produto order by preco desc");

if($result){
    foreach($result as $row)
    echo $row['codigo'] . '-' . $row['nome'] . '-' . $row['preco'] . '-' . $row['estoque'] . '<br>';
}


?>