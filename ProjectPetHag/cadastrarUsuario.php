<?php
//Iniciando a sessao
session_start();

//Incluindo a conexão com o banco de dados
include ("conexaoBD.php");

//Pegando o resultado do input nome no form com o metodo POST 
$nome = mysqli_real_escape_string($conexaoBD, trim($_POST['nome']));




