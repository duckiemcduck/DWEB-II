<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../../stylesheets/global.css">        
		<link rel="stylesheet" href="../../stylesheets/9.css">        
    </head>
    <body>
        <h1> Exercício 11 - Média Aritmética de Formulário PHP </h1> 
        <div id="container-conteudo" class="resultado">
                <?php
                    $nota1 = $_POST["nota1"];
                    $nota2 = $_POST["nota2"];
                    $peso1 = $_POST["peso1"];
                    $peso2 = $_POST["peso1"];
                    $nome = $_POST["nome"];
                    echo "Nota de $nome:";
                    echo "<p>",($nota1*$peso1+$nota2*$peso2)/($peso1+$peso2),"</p>";
                ?>
        </div>
</html>

