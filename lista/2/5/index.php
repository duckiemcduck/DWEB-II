<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../stylesheets/global.css">        
		<link rel="stylesheet" href="../stylesheets/1.css">        
    </head>
    <body>
        <h1> Exercício 5 - Extraindo de String</h1>     
        <div id="container-conteudo">
            <form action="#" method="get">
                <fieldset>
                    <legend> Cálculo Populacional </legend>
                    <div id="tabela">
				<div id=labels>
					<label class="cabecalho"> Funcionários </label>
					<textarea name="nomes" value=""><?php
                    echo (isset($_GET["nomes"]) ? $_GET["nomes"] : "Entre Valores separados por vírgula");
                    ?></textarea>
				</div>
				<div id=inputs>
					<label class="cabecalho"> Salário </label>
					<textarea name="salario"><?php
                    echo (isset($_GET["salario"]) ? $_GET["salario"] : "Entre Valores separados por vírgula");
                    ?></textarea>
				</div>
			
                </fieldset>
		<div id="botoes">
                	<button id="botao-enviar" type="submit" name="botao" value=1> Ver Miseráveis </button>
		</div>
            </form>
	<p>
		<?php
            function media($array)
            {
                $total = 0 ;
                foreach($array as $index => $valor )
                {
                    if(!is_numeric($valor))
                        return false;
                    $total += $valor;
                }

                return $total / count($array);
            
            }
            if(isset($_GET["salario"]))
            {
                $salarios = explode(",", $_GET["salario"]);
                $media = media($salarios);
                if($media)
                {
                    echo "<p>Média de salarios: R$", number_format($media, 2, ',','.'), "</p>";
                    if(isset($_GET["nomes"]))
                    {
                        $array = [];
                        $funcionarios = explode(",", $_GET["nomes"]);
                        
                        if(count($funcionarios) == count($salarios))
                        {
                            $array = array_combine($funcionarios, $salarios);
                            $media = media($array);
                                echo "Funcionarios com crédito maiores que a média: ";
                                foreach($array as $index => $valor )
                                {
                                    if ($valor > $media)
                                    {
                                        echo "<h2>",$index,"</h2>";
                                    }
                                }
                                echo "<h3>Funcionario mais bem pago:</h3>";
                                arsort($array); // Ordena em ordem Descrescente
                                echo key($array); // Retorna posicao apontada no array (primeira posicao)
                                echo "<h3>Funcionario mais mal pago:</h3>";
                                end($array); // Aponta para a última posicao no array
                                echo key($array);
                        }
                        else
                            echo "Numero de funcionarios e salários não são iguais.";
                    }
                }
                else
                {
                    echo "Valores entrados não são válidos";
                }
            }
		?>
	</p>
        </div>
    </body>
</html>