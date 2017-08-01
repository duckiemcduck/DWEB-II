<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../../stylesheets/global.css">        
		<link rel="stylesheet" href="../../stylesheets/9.css">        
    </head>
    <body>
        <h1> Exercício 12 - Formulário e Matemática com PHP</h1> 
        <div id="container-conteudo" class="resultado">
                
                <?php
                    $distancia = $_POST["distancia"];
                    $consumo = $_POST["consumo"];
                    $preco = $_POST["preco"];
                    $resultado = $distancia*(1/$consumo)*($preco);
                    echo "Você irá gastar:";
                    echo "<p>R$",number_format($resultado, 2, ',', ' '),"</p>";
                    //referencia number_format:
                    //http://php.net/manual/pt_BR/function.number-format.php
                ?>
        </div>
</html>

