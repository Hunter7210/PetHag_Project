<?php
//Armazena os dados de forma temporaria
session_start();

//Cria as variaveis para conter os valores do campo preenchido
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

/* 
include_once("cadastrarUsuario.php"); */
//inclui a conexão com o banco
include("../Connection/conexaoBD.php");
//Cria o codigo SQL a ser executado 
$sql = "SELECT * FROM pessoafisica WHERE (nome=:nome OR email=:email) AND senha =:senha";

//Verifica se os campos estão vazios
if (isset($nome) && isset($senha)) {
    //Prepara os dados para a execução
    $stmt = $conexao->prepare($sql);
    //Atribuindo os valores do sql para minhas variaveis
<<<<<<<< HEAD:ProjectPetHag/View/buscarUsuario.php
    //A minha conexão recebe os dados vindos do meu metodo POST, com o formato de String
    
    $stmt->bindValue(':senha', $senha,PDO::PARAM_STR);
    if(!$nome == null){
        $stmt->bindValue(':nome', $nome,PDO::PARAM_STR);
    } else {
    $stmt->bindValue(':email', $email,PDO::PARAM_STR);
    } 
    
========
    $stmt->bindValue(':nome', $nome,PDO::PARAM_STR);
    $stmt->bindValue(':email', $nome,PDO::PARAM_STR);
    $stmt->bindValue(':senha', $senha,PDO::PARAM_STR);
>>>>>>>> 2bf0744974049e2b74617721d9b786e12efdfb17:ProjectPetHag/Controller/buscarUsuario.php

    //Executa a a consulta
    $result = $stmt->execute();

    //Atribui a variavel linha a linha de onde foi inserido a consulta 
    $linha = $stmt->fetch(PDO::FETCH_ASSOC);

    //Verifica se a linha inserida existe
    if ($linha) {
        // Verifica se a senha fornecida coincide com o hash no banco de dados
        if (password_verify($senha, $hash_armazena)) {
            //Senha correta
            //Armazena de  forma temporária os valores dos campos da linha
            $_SESSION['nome'] = $linha['nome'];
            $_SESSION['sobrenome'] = $linha['sobrenome'];
            $_SESSION['data_nasc'] = $linha['data_nasc'];
            $_SESSION['sexo'] = $linha['sexo'];
            $_SESSION['email'] = $linha['email'];
            $_SESSION['cpf'] = $linha['cpf'];
            $_SESSION['celular'] = $linha['celular'];
            $_SESSION['telefone'] = $linha['telefone'];
            $_SESSION['idpf'] = $linha['idpf'];
            /* $_SESSION['senha'] = $linha['senha']; */

            //Encaminha o usuario para a pagina de login
            /* header("Location: index.php"); */
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
        echo $_POST['nome'];
        /* echo $_POST['email']; */
        echo $nome;
        echo $senha;
    }
}
