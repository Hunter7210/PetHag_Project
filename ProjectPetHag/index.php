<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site teste!</title>
</head>

<body>

    <h1>FAÇA SEU CADASTRO</h1>
    <form action="cadastrarUsuario.php" method="POST">
        
        <label for="">NOME:</label>
        <input type="text" name="nome" id="nome">

        <label for="">SOBRENOME:</label>
        <input type="text" name="sobreNome" id="sobreNome">

        <label for="">DATA DE NASCIMENTO:</label>
        <input type="date" name="datnasc" id="datnasc">

        <label for="">CPF:</label>
        <input type="text" name="CPF" id="CPF">

        <label for="">TELEFONE:</label>
        <input type="number" name="telefone" id="telefone">

        <label for="">SENHA:</label>
        <input type="password" name="senha" id="senha">

        <input type="button" value="Enviar">
    </form>

    
    <h1>RESULTADO</h1>

    <!--Incluindo a pagina consulta.php-->
    <?php 
    include 'consulta.php';

    ?>
</body>

</html>