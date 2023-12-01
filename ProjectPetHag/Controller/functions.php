<?php

require("../Connection/conexaoBD.php");

function logar($conexao)
{
    if (isset($_POST['enviarLogin']) and !empty($_POST['emailLogin']) and !empty($_POST['senhaLogin'])) {


        $email = filter_input(INPUT_POST, "emailLogin", FILTER_VALIDATE_EMAIL);
        $senha = $_POST['senhaLogin'];

        $sql = "SELECT * FROM usuario WHERE email=:email";

        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        $linha = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($linha) {

            if (password_verify($senha, $linha['senha'])) {
                //Encaminha o usuario para a pagina de login
                
                session_start();

                $_SESSION['nome'] = $linha['nome'];
                $_SESSION['email'] = $linha['email'];
                $_SESSION['idusu'] = $linha['idusu'];
                $_SESSION['ativa'] = TRUE;
                
                header("Location: ../index.php");
                exit(); // Importante para evitar execução adicional do código

            } else {
                echo "Usuário ou Senha incorreta";
            }
        } else {
            echo "Usuario não existe!";
        }
    }
}

function logout(){
    session_start();
    session_unset();
    session_destroy();
    header("location: ../index.php");
}
