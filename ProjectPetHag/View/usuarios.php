<?php require_once "../Controller/functions.php"?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Usuarios</title>
</head>
<body>
    

    <h1>Usuarios na tabela </h1>

    <form action="./deletarUsuario.php" method="POST">
        <table border=1>
        <thead>
        
            <th>nome</th>
            <th>sobrenome</th>
            <th>datanascimento</th>
            <th>sexo</th>
            <th>email</th>
            <th>CPF</th>
            <th>celular</th>
            <th>telefone</th>
            <th>cep</th>
            <th>senha</th>
            <th>excluir</th>
            
            <?php 
            $tabela ="usuario";
            $users= buscarAll($conexao, $tabela);
            ?> 
            <style>
            thead {
                text-transform: uppercase;
                font-size:20px;
            }
        </style>
        </thead>
        <a type="button" id="login" name="login" href="../View/login.php">Login</a>
            <br>
            <?php
                foreach ($users as $row) {
                    echo '<tbody>'. '<td>' . $row['nome'].'</td>'.
                    '<td>'. $row['sobrenome']. '</td>'.
                    '<td>' . $row['data_nasc'].  '</td>'.
                    '<td>' . $row['sexo']. '</td>'.
                    '<td>' . $row['email'].'</td>'.
                    '<td>'. $row['cpf'] .'</td>'.
                    '<td>' . $row['celular'].'</td>'.
                    '<td>' . $row['telefone']. '</td>'.
                    '<td>' . $row['cep']. '</td>'.
                    '<td>' . $row['senha'] .'</td>'.
                    '<td>'. '<input type="submit" value="Excluir" name="excluir">' .'</td>'. '</tbody>';
                }
            ?>
            
</body>
</html>