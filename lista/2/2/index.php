<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../stylesheets/global.css">        
		<link rel="stylesheet" href="../stylesheets/1.css">        
    </head>
    <body>
        <h1> Exercício 2 - Print foreach()</h1>     
        <div id="container-conteudo">
                <fieldset>
                    <legend> Boletim </legend>
                    <div id="tabela">
			    <?php
				function imprimirArray($array)
				{
					echo "<div id=container>";
							echo "<div id=labels >";
							foreach($array as $index => $valor)					
							{
								echo '<label class=alinhar>',$index,"</label>";
							}
							echo "</div>";
							echo "<div id=labels >";
							foreach($array as $index => $valor)					
							{
								echo '<label class=alinhar>', number_format($valor,"1",",","."),"</label>";
							}
							echo "</div>";
					echo "</div>";
				}
				$notas =
				[
					"Programação para Web" => 9.2,
					"Programação Orientada a Objetos" => 7.5,
					"Análise de Sistemas" => 8.1,
					"Redes de Computadores" => 9.5,
				];
				imprimirArray($notas);
			    ?>

                        </div>
                    </div>
                </fieldset>
        </div>
    </body>
</html>

