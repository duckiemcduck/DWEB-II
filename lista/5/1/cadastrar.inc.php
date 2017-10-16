<?php
    $matricula =  $conexao->escape_string($_POST['matricula']);
    $uc =  $conexao->escape_string($_POST["uc"]);
    $nota1 =  $conexao->escape_string($_POST["nota1"]);
    $nota2 =  $conexao->escape_string($_POST["nota2"]);

    $sql = "INSERT $nomeDaTabela (matricula, uc, nota1, nota2)
            VALUES ('$matricula', '$uc', '$nota1', '$nota2')";
    $resultado = $conexao->query($sql) or die ($conexao->error);
    echo "cadastro realizado";
?>