<?php

include ("conexaoBD.php");

$sql =  "SELECT * FROM pessoafisica";


$stmt = $conexao->prepare($sql);

$result = $stmt->execute() or die("Erro na consulta");

foreach ($stmt->fetchAll() as $row) {
    echo $row['nome']."-".$row['sobrenome'].'<br>'; 
}

$stmt -> closeCursor();
$conexao =null;