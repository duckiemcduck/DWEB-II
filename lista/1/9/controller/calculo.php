<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../../stylesheets/global.css">        
		<link rel="stylesheet" href="../../stylesheets/9.css">        
    </head>
    <body>
        <h1> Exercício 9 - Formulários e Matemática com PHP </h1> 
        <div id="container-conteudo" class="resultado">
            <p>
                <?php
                    //fazendo o PHP receber os 3 dados do formulário retornados
                    $num1 = $_POST["numero1"];
                    $num2 = $_POST["numero2"];
                    $num3 = $_POST["numero3"];
                    switch($_POST["operacao"]) 
                    {
                        case '/':
                            echo "$num1/$num2/$num3=",$num1/$num2/$num3;
                            break;
                        case '+':
                            echo "$num1+$num2+$num3=",$num1+$num2+$num3;
                            break;
                        case '-':
                            echo "$num1-$num2-$num3=",$num1-$num2-$num3;
                            break;
                        case '*':
                            echo "$num1*$num2*$num3=",$num1*$num2*$num3;
                            break;
                        default:
                            echo "get out of here, hacker";
                    }
                    /*poderia utilizar-se de echo "eval($num1 $operador $num2 $operador $num3)
                    mas é muito perigoso para injeção de código*/
                ?>
            </p>
        </div>
</html>

