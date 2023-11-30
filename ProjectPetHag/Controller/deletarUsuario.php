<?php

session_start();

include ("../Connection/conexaoBD.php");

$sql = "DELETE FROM usuario WHERE idpf=':id'";
$id = (int)$_POST['delete'];


if(isset($_POST['delete'])){
    
    $stmt = $conexao->prepare($sql);

    $stmt->bindValue(':id', $id);

    $stmt->execute();

    echo "DELETADO COM SUCESSO";
} else {
    echo  "ERRO";   
}