<?php

//Inclui a pagina de conexãoBD.php, no caso a pagina de conexão com o banco de dados
include ("conexaoBD.php");

$teste = "pessoafisica";
//Codigo SQL para consultar toda a tabela pessoafisica
$sql =  "SELECT * FROM $teste;";


//Variavel para conter o cod SQL ja preparado para realizar a consulta
$stmt = $conexao->prepare($sql);

//Variavel para conter o resultado da execução do codigo SQL ou um possivel erro 
$result = $stmt->execute() or die("Erro na consulta"); //die serve para parar o codigo

//Para cada consulta ele ira criar uma matriz (fetchAll() = Matriz; fetch= Array simples;) com base na variavel $row
echo '
<table border=1>
<thead>

    <th>nome</th>
    <th>sobrenome</th>
    <th>datanascimento</th>
    <th>sexo</th>
    <th>email</th>
    <th>CPF</th>
    <th>celular</th>
    <th>telefone</th>
    <th>cep</th>
    <th>senha</th>
    <th>excluir</th>

    <style>
    thead {
        text-transform: uppercase;
        font-size:20px;
    }
</style>
</thead>';

foreach ($stmt->fetchAll() as $row) {
    //Printa somente os campos desejados do banco de dados
    echo
    '<tbody>' . '<td>' . $row['nome'].'</td>'. '<td>'. $row['sobrenome']. '</td>'. '<td>' . $row['data_nasc'].  '</td>'. '<td>' . $row['sexo']. '</td>'. '<td>' . $row['email'].'</td>'. '<td>'. $row['cpf'] .'</td>'. '<td>' . $row['celular'].'</td>'. '<td>' . $row['telefone']. '</td>'. '<td>' . $row['cep']. '</td>'. '<td>' . $row['senha'] . '<td>'. '<a href="excluir.php?exclu=execute" nome="deletar">(X)</a>' .'</td>';
    '</tbody>';
    
    //Pegar as primeiras letras do nome e sobrenome usando uma função da string 
    /* $pegarletras = strtoupper(substr($row['nome'],0,1)); //Colocando a letra maiuscula
    $pegarletras2 = substr($row['sobrenome'],0,1);
    echo $pegarletras.$pegarletras2;
     */
    //Existem muitas funções de string veja, pois é possivle verificar se em uma string contem uma determinada expressão str_contains();
}

'</table>';


//Fechar a conexão
$stmt -> closeCursor();
//Limpa a variavel 
$conexao =null;