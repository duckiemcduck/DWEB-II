<?php
    $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela 
    (
	    id SMALLINT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
        titulo VARCHAR(20),
        numero_participantes TINYINT UNSIGNED,
        coorientador VARCHAR(10),
        terminalidade VARCHAR(100),
	    metodologia VARCHAR(100),
	    data_apresentacao DATE
    )";
    $resultado = $conexao->query($sql) or die($conexao->error);
?>
