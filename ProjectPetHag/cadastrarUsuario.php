<?php
//Iniciando a sessao
session_start();

if (isset($_POST['submit'])) {
    //Incluindo a conexão com o banco de dados
    
    include("conexaoBD.php");

    //Pegando o resultado do input nome no form com o metodo POST 
    /* $nome = mysqli_real_escape_string($conexaoBD, trim($_POST['nome'])); */

    $sql = "INSERT INTO pessoafisica (idpf, nome, sobrenome, data_nasc, sexo, email, cpf, celular, telefone, cep, senha) VALUES (null,?,?,?,?,?,?,?,?,?,?);";
    //Inserir dados no banco


    $cadastradoSuce = false;

    echo "TPASSOU";
    if (isset($_POST['nome']) && isset($_POST['nome'])) {
        //Null porque o valor já é auto incremento
        $stmt = $conexao->prepare($sql);

        echo "TEST";

        //Usando hash para armazenar e criotgrafar a senha
        $hash_armazena = password_hash($_POST['senha'], PASSWORD_BCRYPT);

        $stmt->execute(array($_POST['nome'], $_POST['sobrenome'], $_POST['datnasc'], $_POST['sexo'], $_POST['email'], $_POST['cpf'], $_POST['celular'], $_POST['telefone'], $_POST['cep'], $hash_armazena)); //Executar o codigo
        echo "inserido com sucesso";

        header("Location: login.php");
        $cadastradoSuce = true;
    } else {
        echo "<br> Implementar novos dados falhou";
    }


    //Fechar a conexão
    /* $stmt -> closeCursor(); */
    //Limpa a variavel 
    $conexao = null;
}
