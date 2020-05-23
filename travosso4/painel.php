<?php
    session_start();
if (!$_SESSION['usuario']){

} 
else {
    header("location:index.html#expirado");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"  href="style2.css">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="style2.css">
    <h1>PONHA OS ITENS</h1>
</link>
    <div class="container">
        <a href="inserir.html"class="btn1">Inserir Produto</a>
        <a href="crescente.php"class="btn2">Listar - Crescente</a>
        <a href="decrescente.php"class="btn3">Listar - Decrescente</a>
    </div>

    <a href="sair.php">Sair</a>
</body>
</html>
