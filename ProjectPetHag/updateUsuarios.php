<?php

session_start();

include "conexaoBD.php";

$sql = "UPDATE pethagdboficial SET nome='Max' WHERE id='1';";

//Variavel para conter o cod SQL ja preparado para realizar a consulta
$stmt = $conexao->prepare($sql);

//Variavel para conter o resultado da execução do codigo SQL ou um possivel erro 
$result = $stmt->execute() or die("Erro na consulta"); //die serve para parar o codigo



