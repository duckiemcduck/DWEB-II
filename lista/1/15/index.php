<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../stylesheets/global.css">        
		<link rel="stylesheet" href="../stylesheets/9.css">        
    </head>
    <body>
        <h1> Exercício 15 - Isset</h1>     
        <div id="container-conteudo">
            <form action="#" method="get">
                <fieldset>
                    <legend> Cálculo numérico Fahrenheit -> Celsius </legend>
                    <div id="tabela">
                        <div id=labels>
                            <label class="alinhar">Número: </label>
                        </div>
                        <div id=inputs>
                            <input type="number" step="0.1" min="0" name="numero" value=0>
                        </div>
                    </div>
                </fieldset>
                <button id="botao-enviar" type="submit" name="enviar"> Processar com PHP </button>
            </form>
		<div>

			<p>

			Terceira potencia:
				<?php
					$numero=0;
					if(isset($_GET["numero"]))
						$numero=$_GET["numero"];
					echo pow($numero, 3);

				?>
			</p>
			<p>

			Raiz quadrada:
				<?php
					$numero=0;
					if(isset($_GET["numero"]));
						$numero=$_GET["numero"];
					echo sqrt($numero);
				?>
			</p>
		</div>
        </div>
    </body>
</html>

