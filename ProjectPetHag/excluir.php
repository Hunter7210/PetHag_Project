<?php   
session_start();

include('conexaoBD.php');

$sql = "DELETE FROM pessoafisica WHERE id=?;";


if(isset($_GET['exclu'])){

    if(isset($_POST['submmit'])){
    $stmt = $conexao->prepare($sql);
    $stmt->execute($_GET['deletar']) or die("Erro na consulta"); //die serve para parar o codigo;

    echo "Exluído com sucesso";
    }
}
