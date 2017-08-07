<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../../stylesheets/global.css">        
		<link rel="stylesheet" href="../../stylesheets/9.css">        
    </head>
    <body>
        <h1> Exercício 14 - Formulário e Matemática com PHP</h1> 
        <div id="container-conteudo" class="resultado">
                
                <?php
                    $fahrenheit = $_POST["temp"];
                    $celsius = (($fahrenheit-32)*5)/9;
                    echo "Temperatura:";
                    echo "<p>",number_format($celsius, '2', ',', ' '), "°C </p>";
                    //referencia number_format:
                    //http://php.net/manual/pt_BR/function.number-format.php
                ?>
        </div>
</html>

