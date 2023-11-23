<?php
//Iniciando a sessao
session_start();

//Incluindo a conexão com o banco de dados
include ("conexaoBD.php");

//Pegando o resultado do input nome no form com o metodo POST 
/* $nome = mysqli_real_escape_string($conexaoBD, trim($_POST['nome'])); */

$sql = "INSERT INTO pessoafisica (idpf, nome, sobrenome, data_nasc, sexo, email, cpf, celular, telefone, cep, senha) VALUES (null,?,?,?,?,?,?,?,?,?,?);";
//Inserir dados no banco


$cadastradoSuce = false;

echo "TPASSOU";
if(isset($_POST['nome'])&& isset($_POST['nome'])){
     //Null porque o valor já é auto incremento
     $stmt = $conexao->prepare($sql);
    
     echo "TEST";
     
     $stmt->execute(array($_POST['nome'], $_POST['sobreNome'], $_POST['datnasc'], $_POST['sexo'], $_POST['email'], $_POST['cpf'], $_POST['celular'], $_POST['telefone'], $_POST['cep'], md5($_POST['senha']))); //Executar o codigo
    echo "inserido com sucesso";
    header("Location: login.php");
    $cadastradoSuce = true;
}else{
    echo "<br> Implementar novos dados falhou";
}


//Fechar a conexão
/* $stmt -> closeCursor(); */
//Limpa a variavel 
$conexao =null;
