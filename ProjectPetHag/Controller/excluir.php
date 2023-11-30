<?php   
session_start();

include('../Connection/conexaoBD.php');

$sql = "DELETE FROM usuario WHERE idusu=:id;";

if(isset($_GET['exclu'])){

    if(isset($_POST['submmit'])){

    $stmt = $conexao->prepare($sql);
        $stmt->bindValue(':id',$_SESSION['id']);

    $stmt->execute($_GET['delete']) or die("Erro na consulta"); //die serve para parar o codigo;

    echo "Exluído com sucesso";
    }
}
