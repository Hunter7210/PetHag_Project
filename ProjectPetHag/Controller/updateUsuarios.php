<?php

session_start();

include "../Connection/conexaoBD.php";

$sql = "UPDATE pessoafisica SET nome=':nome' WHERE idpf=':id'";

//Variavel para conter o cod SQL ja preparado para realizar a consulta
$stmt = $conexao->prepare($sql);

//Variavel para conter o resultado da execução do codigo SQL ou um possivel erro 



if(isset($_GET['p'])){
    $result = $stmt->execute() or die("Erro na consulta"); //die serve para parar o codigo
    echo "Atualização realizada com sucesso";
} else{
    echo "Atualização realizada com sucesso";
}

//Fechar a conexão
$stmt -> closeCursor();
//Limpa a variavel 
$conexao =null;

