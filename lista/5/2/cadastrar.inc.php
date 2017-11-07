<?php

    $titulo =  trim($_POST["titulo"]);
    $participantes =  $_POST["participantes"];
    $coorientador =  $_POST["coorientador"];
    $area =  $_POST["area"];
    $metodologia =  $_POST["metodologia"];

    $data = $_POST["data"];

    $metodologia = implode("-", $metodologia);
    $titulo = $conexao->escape_string($titulo);
    $participantes = $conexao->escape_string($participantes);
    $terminalidade = $conexao->escape_string($area);
    $metodologia = $conexao->escape_string($metodologia);
    $data = $conexao->escape_string($data);
    $sql = "INSERT INTO $nomeDaTabela (id, titulo, numero_participantes, coorientador, terminalidade, metodologia, data_apresentacao) 
            VALUES (null, '$titulo', '$participantes', '$coorientador', '$area', '$metodologia', '$data')";

    $resultado = $conexao->query($sql) or die ($conexao->error);
    echo "cadastro realizado";
?>