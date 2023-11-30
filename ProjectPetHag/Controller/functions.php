<?php

require("../Connection/conexaoBD.php");

function logar($conexao)
{
    if (isset($_POST['enviarLogin']) and !empty($_POST['emailLogin']) and !empty($_POST['senhaLogin'])) {
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuario WHERE email=:email and senha=:senha";

        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':email', $email);

        $linha = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($linha) {

            if (password_verify($senha, $linha['senha'])) {
                //Encaminha o usuario para a pagina de login
                header("Location:../index.php");
                echo "Usuario existe";
                exit(); // Importante para evitar execução adicional do código

            } else {
                echo "Usuário ou Senha incorreta";
            }
        } else {
            echo "Usuario não existe!";
        }
    }
}
