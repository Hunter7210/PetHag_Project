<?php

session_start();

include ("conexaoBD.php");

$stmt = "DELETE FROM pessoafisica WHERE id=$id"; 

if(isset($_GET['delete'])){
    $id = (int)$_GET['delete'];
    $result = $conexao->prepare($stmt);
    $result->execute();

    echo "DELETADO COM SUCESSO";
}