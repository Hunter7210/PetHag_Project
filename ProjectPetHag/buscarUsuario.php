<?php
//Armazena os dados de forma temporaria
session_start();

//Cria as variaveis para conter os valores do campo preenchido
$nome = $_POST['nome'];
$senha = $_POST['senha'];

    //inclui a conexão com o banco
    include('conexaoBD.php');

//Cria o codigo SQL a ser executado 
$sql =  "SELECT * FROM pessoafisica WHERE (nome='nome' or email='email') AND senha ='senha'";

//Verifica se os campos estão vazios
if (isset($nome) && isset($senha)) {
    //Prepara os dados para a execução
    $stmt = $conexao->prepare($sql);
    //Utilizando as hash, para
    $stmt->bindValue('nome', $nome);
    $stmt->bindValue('email', $nome);
    $stmt->bindValue('senha', $senha);

    //Executa a a consulta
    $result = $stmt->execute();
    //Atribui a variavel linha a linha de onde foi inserido a consulta 
    $linha = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    
    //Verifica se a linha inserida NÃO está vazia, ou seja, o usuario existe
    if ($linha) {
        // Verifica se a senha fornecida coincide com o hash no banco de dados
        if (password_verify($senha, $linha['senha'])) {
            //Senha correta
            //Armazena de forma temporária os valores dos campos da linha
            $_SESSION['nome'] = $linha['nome'];
            $_SESSION['sobrenome'] = $linha['sobrenome'];
            $_SESSION['data_nasc'] = $linha['data_nasc'];
            $_SESSION['sexo'] = $linha['sexo'];
            $_SESSION['email'] = $linha['email'];
            $_SESSION['cpf'] = $linha['cpf'];
            $_SESSION['celular'] = $linha['celular'];
            $_SESSION['telefone'] = $linha['telefone'];
            $_SESSION['idpf'] = $linha['idpf'];
            $_SESSION['senha'] = $linha['senha'];

            //Encaminha o usuario para a pagina de login
            header("Location: index.php");
            echo "Usuario existe";
            exit(); // Importante para evitar execução adicional do código
        } else {
            echo "Senha incorreta";
        }
    } else {
        unset($_SESSION['nome']);
        unset($_SESSION['sobrenome']);
        unset($_SESSION['data_nasc']);
        unset($_SESSION['sexo']);
        unset($_SESSION['email']);
        unset($_SESSION['cpf']);
        unset($_SESSION['celular']);
        unset($_SESSION['telefone']);
        unset($_SESSION['idpf']);

        echo "Usuario não existe";
        echo $senha;
    }
}
