<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM</title>
    <link rel="stylesheet" href="./Style/adm-style.css">
</head>

<body>
    <div class="containerADM">
        <form class="containerDisplay" method="$_POST" action="cadastrarUsuario.php">
            <div class="btnEscolha">
                <input type="submit" class="Dat" value="DATABASE" id="DATABASE" name="DATABASE">
                <input type="submit" class="Usu" value="USUARIOS" id="USUARIOS" name="USUARIOS">
                <input type="submit" class="AddProd" value="ADPRODUTOS" id="ADPRODUTOS" name="ADPRODUTOS">
                <input type="submit" class="AddCol" value="ADCOLABORADORES" id="ADCOLABORADORES" name="ADCOLABORADORES">
                <input type="submit" class="UPCol" value="UPCOLABORADORES" id="UPCOLABORADORES" name="UPCOLABORADORES">
                <input type="submit" class="DelCol" value="DELCOLABORADORES" id="DELCOLABORADORES" name="DELCOLABORADORES">
                <input type="submit" class="Rel" value="RELATÓRIO" id="RELATÓRIO" name="RELATÓRIO">
            </div>
            <div class="exibirMsg">

                <div class="exibirDatabase"></div>
            </div>
        </form>
    </div>
</body>

</html>