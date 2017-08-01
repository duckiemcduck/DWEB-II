<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../../stylesheets/global.css">        
		<link rel="stylesheet" href="../../stylesheets/9.css">        
    </head>
    <body>
        <h1> Exercício 13 - Formulário e Matemática com PHP</h1> 
        <div id="container-conteudo" class="resultado">
                
                <?php
                    $total = $_POST["total"];
                    $desconto = $total * $_POST["desconto"]*0.01;
                    $imposto = $total * $_POST["imposto"]*0.01;
                    $comissao = $total * $_POST["comissao"]*0.01;;
                    $resultado = $total - ($desconto + $imposto + $comissao);
                    echo "Total recebido:";
                    echo "<p>R$",number_format($resultado, 2, ',', ' '),"</p>";
                    //referencia number_format:
                    //http://php.net/manual/pt_BR/function.number-format.php
                ?>
        </div>
</html>

