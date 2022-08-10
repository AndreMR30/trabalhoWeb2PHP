<?php

session_start();
if(!isset($_SESSION['prop'])){
   $_SESSION['prop']= array();
}

if(!isset($_SESSION['srei'])){
   $_SESSION['srei']= array();
}

//include "menu.php";
// $conexao = db_connect();

// ini_set('memory_limit', '-1');

// $consulta = $conexao->query("SELECT *FROM tb_proprietario");

// while ($row = $consulta->fetch()) {
//    echo "NOME".$row['nome']."CPF".$row['cpf']."<br>";
// }

header("Refresh:0; view");

?>