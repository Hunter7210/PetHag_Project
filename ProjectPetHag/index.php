<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site teste!</title>

</head>

<body>

    <?php
    if (isset($_SESSION['ativa'])) { ?>
        <nav>
            <h1>Bem vindo!<?php echo $_SESSION['nome']; ?> </h1>
        </nav>

    <?php } else {
        /* header("location: ./View/login.php"); */
    } ?> <h1>Escolha uma opção:</h1>
    <br>
    <a type="button" id="login" name="login" href="./View/login.php">login</a>
    <br>
    <a type="button" id="cadastro" name="cadastro" href="./View/cadastroUsua.php">Cadastrar Usuario</a>
    <br>
    <a href="./Controller/logout.php">Sair</a>
    <br>
    <br>
    <br>
    <a type="button" id="cadastro" name="cadastro" href="./View/cadastroEmpre.php">Cadastrar Parceiro</a>
    <br>
    <a href="./View/usuarios.php">Exibir</a>
    <br>
    <a href="Controller/updateUsuarios.php">Atualizar</a>


</body>


</html>