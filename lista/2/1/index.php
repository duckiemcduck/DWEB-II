<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../stylesheets/global.css">        
		<link rel="stylesheet" href="../stylesheets/1.css">        
    </head>
    <body>
        <h1> Exercício 1 - Ordenando tabela</h1>     
        <div id="container-conteudo">
            <form action="#" method="get">
                <fieldset>
                    <legend> Cálculo Populacional </legend>
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
								echo '<label class=alinhar>', number_format($valor,"0",",","."),"</label>";
							}
							echo "</div>";
					echo "</div>";
				}
				$GLOBALS['capitais'] =
				[
					"Porto Alegre" => 1420766,
					"Recife" => 1533712,
					"Rio de Janeiro" => 6102968,
					"Salvador" => 289701,
					"São Paulo" => 10970654,
					"Florianópolis" => 421240
				];
				//echo "<pre>", print_r($GLOBALS) , "</pre>";
			    ?>
				<div id=labels>
					Província:
				</div>
				<div id=inputs>
					<select name="operacao">
				            <?php
						foreach($GLOBALS['capitais'] as $index => $valor)					
						{
							echo '<option value="',$index,'"','>',$index,"</option>";
							//option seleected
						}
		     			    ?>	
				        </select> 
				</div>
                        </div>
                    </div>
                </fieldset>
<div id="botoes">
                <button id="botao-enviar" type="submit" name="botao" value=1> Ver População </button>
		<button id="botao-enviar" type="submit" name="botao" value=2> Calcular Média Populacional </button>
		<button id="botao-enviar" type="submit" name="botao" value=3> Ordenar Número de habitantes </button>
		<button id="botao-enviar" type="submit" name="botao" value=4> Ordenar Por Capital </button>
		<button id="botao-enviar" type="submit" name="botao" value=5>  Capital Mais Populosa </button>
</div>
            </form>
	<p>
		<?php
			$botao=0;
			if(strlen($_GET["botao"]!=0))
			{
				$botao=$_GET["botao"];
			}
			switch($botao)
			{
				case 1:
					echo "Populacao:<br>", number_format($GLOBALS['capitais'][$_GET["operacao"]],'0',',','.');
					break;
				case 2:
					echo "Media:<br>", number_format(array_sum($GLOBALS['capitais'])/count($GLOBALS['capitais']),'0',',','.');
					break;
				case 3:
					arsort($GLOBALS['capitais']);
					imprimirArray($GLOBALS['capitais']);
					break;
				case 4:
					ksort($GLOBALS['capitais']);
					imprimirArray($GLOBALS['capitais']);
					break;
				case 5:
					arsort($GLOBALS['capitais']);
					echo "Mais populosa: <br>", key($GLOBALS['capitais']);
					break;
				default: 
					echo "Aperte um botão";
			}
		?>
	</p>
        </div>
    </body>
</html>

