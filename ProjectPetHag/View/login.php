<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Faça seu login:</h1>

    <form action="../Controller/buscarUsuario.php" method="POST">

    <label for="">Usuario ou Email</label>
    <input type="text" name="nomeLogin" id="nome">

    <label for="">Senha</label>
    <input type="password" name="senhaLogin" id="senha">

    <input type="submit" name="enviarLogin" id="enviar">
    </form>

    <?php 
    if($existe) {
        
    }
    ?>

</body>
</html>