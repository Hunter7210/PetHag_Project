<?php   
session_start();

include('../Connection/conexaoBD.php');

$sql = "DELETE FROM pessoafisica WHERE id=:idpf;";

if(isset($_GET['exclu'])){

    if(isset($_POST['submmit'])){

    $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':idpf',$_SESSION['idpf']);

    $stmt->execute($_GET['delete']) or die("Erro na consulta"); //die serve para parar o codigo;

    echo "Exluído com sucesso";
    }
}
