<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site teste!</title>
</head>

<body>

    <h1>FAÇA SEU CADASTRO</h1>
    <form action="./cadastrarUsuario.php" method="POST">

      
        <label for="">NOME:</label>
        <input type="text" name="nome" id="nome">

        <label for="">SOBRENOME:</label>
        <input type="text" name="sobreNome" id="sobreNome">

        <label for="">DATA DE NASCIMENTO:</label>
        <input type="date" name="datnasc" id="datnasc">

        <label for="">SEXO:</label>
        <input type="text" name="sexo" id="sexo">

        <label for="">Email:</label>
        <input type="text" name="email" id="email">

        <label for="">CPF:</label>
        <input type="text" name="cpf" id="cpf">

        <label for="">Celular:</label>
        <input type="tel" name="celular" id="celular">

        <label for="">TELEFONE:</label>
        <input type="tel" name="telefone" id="telefone">

        <label for="">CEP:</label>
        <input type="number" name="cep" id="cep">

        <label for="">SENHA:</label>
        <input type="password" name="senha" id="senha">

        <input type="submit" name="submit" value="Enviar">
    </form>


<<<<<<< HEAD


=======
>>>>>>> 2bf0744974049e2b74617721d9b786e12efdfb17
    <a href="consulta.php?consulta=execute">Exibir</a>

    <a href="updateUsuarios.php?p=execute">Atualizar</a>


    <!-- </form>
<input type="submit" value="Atualizar" name="updateUsuarios.php"> -->
    <!--Incluindo a pagina consulta.php-->
</body>

</html>