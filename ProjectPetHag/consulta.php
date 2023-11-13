<?php

//Inclui a pagina de conexãoBD.php, no caso a pagina de conexão com o banco de dados
include ("conexaoBD.php");

$teste = "pessoafisica";
//Codigo SQL para consultar toda a tabela pessoafisica
$sql =  "SELECT * FROM $teste";


//Variavel para conter o cod SQL ja preparado para realizar a consulta
$stmt = $conexao->prepare($sql);

//Variavel para conter o resultado da execução do codigo SQL ou um possivel erro 
$result = $stmt->execute() or die("Erro na consulta"); //die serve para parar o codigo

//Para cada consulta ele ira criar uma matriz (fetchAll() = Matriz; fetch= Array simples;) com base na variavel $row
foreach ($stmt->fetchAll() as $row) {
    //Printa somente os campos desejados do banco de dados
    echo $row['nome']."-".$row['sobrenome']."-".$row['data_nasc']."-".$row['sexo']."-".$row['email']."-".$row['cpf']."<br>"; 
    
    //Pegar as primeiras letras do nome e sobrenome usando uma função da string 
    $pegarletras = strtoupper(substr($row['nome'],0,1)); //Colocando a letra maiuscula
    $pegarletras2 = substr($row['sobrenome'],0,1);
    echo $pegarletras.$pegarletras2;
    
    //Existem muitas funções de string veja, pois é possivle verificar se em uma string contem uma determinada expressão str_contains();
}




//Fechar a conexão
$stmt -> closeCursor();
//Limpa a variavel 
$conexao =null;