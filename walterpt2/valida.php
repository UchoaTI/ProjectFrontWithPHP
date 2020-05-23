<?php
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$conf = $_REQUEST['conf'];
$senha = $_REQUEST['senha'];
$senha2 = $_REQUEST['senha2'];

 if($conf == $email and $senha == $senha2){
   header("Location: http://localhost/walterpt2/index2.php");
   } 
 else{
    header("Location: http://localhost/walterpt2/index.php");
   }
  
?>