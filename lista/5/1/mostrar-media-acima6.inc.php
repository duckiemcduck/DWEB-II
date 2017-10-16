<?php
    $sql = "SELECT * FROM aluno";
    $resultado = $conexao->query($sql) or die ($conexao->error);

    while($registro = $resultado->fetch_array())
    {
        foreach($resultado->fetch_array() as $index => $row)
        {
            echo "$index";
        }
    }
?>