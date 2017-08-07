<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../stylesheets/global.css">        
		<link rel="stylesheet" href="../stylesheets/9.css">        
    </head>
    <body>
        <h1> Exercício 17 - Aplicativo</h1>     
        <div id="container-conteudo">
            <form action="#" method="get">
                <fieldset>
                    <legend> Cálculo comissão </legend>
                    <div id="tabela">
                        <div id=labels>
                            <label class="alinhar">Total da compra: R$</label>
                            <label class="alinhar">Percentual de comissão:</label>
                        </div>
                        <div id=inputs>
                            <?php
				echo '<input type="number" step="0.01" min="0" name="valor" value=', strlen($_GET["valor"])==0 ? 0 : $_GET["valor"] ,'>';
			    ?>
                            <?php
				echo '<input type="number" step="0.01" min="0" name="comissao" value=', strlen($_GET["comissao"])==0 ? 10 : $_GET["comissao"] ,'>';
			    ?>
                        </div>
                        <div id=labels>
                            <label class="alinhar">&nbsp</label>
                            <label class="alinhar">%</label>
                        </div>
                    </div>
                </fieldset>
                <button id="botao-enviar" type="submit" name="enviar"> Processar com PHP </button>
            </form>
		<div>
			<p>
				<?php
					$valor=0;
					$comissao=10;
					if(isset($_GET["valor"]) && strlen($_GET["valor"])!=0 && isset($_GET["comissao"]) && strlen($_GET["comissao"])!=0)
					{
						$valor=$_GET["valor"];
						$comissao=$_GET["comissao"];
					}
					$resultado=$valor*$comissao*0.01;
					echo "R$", number_format($resultado, 2, ',', ' ');
				?>
			</p>
		</div>
        </div>
    </body>
</html>

