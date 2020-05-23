<?php
$nome = $_REQUEST['nome'];

$senha = $_REQUEST['senha'];
$senha2 = $_REQUEST['senha2'];

 if($senha == $senha2){
   header("Location: http://localhost/walterpt2/index2.php");
   } 
 else{
    header("Location: http://localhost/walterpt2/index.php");
   }
  
?>