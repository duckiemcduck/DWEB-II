<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../stylesheets/global.css">        
		<link rel="stylesheet" href="../stylesheets/9.css">        
    </head>
    <body>
        <h1> Exercício 16 - Aplicativo</h1>     
        <div id="container-conteudo">
            <form action="#" method="get">
                <fieldset>
                    <legend> Cálculo numérico Fahrenheit -> Celsius </legend>
                    <div id="tabela">
                        <div id=labels>
                            <label class="alinhar">Valor em dólar: R$</label>
                            <label class="alinhar">Taxa de Câmbio: R$</label>
                        </div>
                        <div id=inputs>
                            <input type="number" step="0.0001" min="0" name="valor" value=0>
                            <input type="number" step="0.0001" min="0" name="cambio" value=3.2644>
                        </div>
                    </div>
                </fieldset>
                <button id="botao-enviar" type="submit" name="enviar"> Processar com PHP </button>
            </form>
		<div>
			<p>
				<?php
					$valor=0;
					$cambio=1;
					if(isset($_GET["valor"]) && strlen($_GET["valor"])!=0 && isset($_GET["cambio"]) && strlen($_GET["cambio"])!=0)
					{
						$valor=$_GET["valor"];
						$cambio=$_GET["cambio"];
					}
					$resultado=$valor/$cambio;
					echo "US$", number_format($resultado, 2, ',', ' ');
				?>
			</p>
		</div>
        </div>
    </body>
</html>

