<?php
require_once "../Controller/functions.php";

if (isset($_POST['enviarLogin'])) {
    logar($conexao);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/Style/Login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC&display=swap" rel="stylesheet">
    <title>Login Pethag</title>
</head>

<body>
    <div class="container">
        <div class="login">

            <h1>Seja Bem-Vindo!</h1>

            <form method="POST">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail">

                <label for="senha">Senha</label>
                <input type="password" name="senhaLogin" id="senha" placeholder="Digite sua senha">

                <div class="button-wrapper">
                    <a href="../index.php"> <button type="submit">Voltar</button></a>
                    
                    
                    <a href="./Index.html"> <button type="submit"
                            <?php ?>>Avançar</button></a>
                </div>

                <div class="cad">
                    <li>Deseja se Cadastrar?  <a href="../View/Cadastro.php" title="Sobre a Empresa">
                    <li> Clique aqui</li></a></li>
                </div>
            </form>
        </div>
        <div class="contain-img">
            <img src="../View/img/3.png" alt="">

        </div>
    </div>
</body>

</html>