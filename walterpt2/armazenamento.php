<?php
$hostname="localhost";  
    $username="USUARIO";  
    $password="SENHA";  
    $db = "Nome_DB";

    $dbcon = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);

$sql = "select cliente,telefone from tbClientes";
$stmt = $dbcon->prepare($sql);
$stmt->execute();

if ($data = $stmt->fetch()) {
    do {
        $dadosBrutos .= $data['cliente'].','.$data['telefone'].'§'; 

    } while ($data = $stmt->fetch());

    $dadosBrutos= substr($dadosBrutos,0,-1); //AQUI ELIMINA O ULTIMO §

} else {
    $dadosBrutos= "zero_clientes_cadastrados";
}

echo $dadosBrutos; 

?>