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
				<div id=labels>
					<label class="cabecalho"> Funcionário </label>
					<?php
						$numFuncionarios=100;
						for($i=0; $i<$numFuncionarios; $i++)
							echo "<label class='alinhar'>Funcionario ", $i+1, ":</label>"
					?>
				</div>
				<div id=inputs>
					<label class="cabecalho"> Nome </label>
					<?php
						for($i=0; $i<$numFuncionarios; $i++)
							echo '<input value="', isset($_GET["nomeFun$i"]) ? $_GET["nomeFun$i"] : "N/A"  ,'"type="text" name="nomeFun',$i,'">'
					?>
				</div>

				<div id=labels>
					<label class="cabecalho"> &nbsp </label>
					<?php
						for($i=0; $i<$numFuncionarios; $i++)
							echo '<label class=alinhar>R$</label>'
					?>
				</div>

				<div id=inputs>
					<label class="cabecalho"> Salario </label>
					<?php
						for($i=0; $i<$numFuncionarios; $i++)
							echo '<input value="', isset($_GET["salFun$i"]) ? $_GET["salFun$i"] : "0"  ,'" type="number" step="0.01" min="0" name="salFun',$i,'">'
					?>
				</div>
                        </div>
                    </div>
			
                </fieldset>
		<div id="botoes">
                	<button id="botao-enviar" type="submit" name="botao" value=1> Ver Miseráveis </button>
		</div>
            </form>
	<p>
		<?php
			$botao=0;
			if(strlen($_GET["botao"]!=0))
			{
				$botao=$_GET["botao"];
			}
			$arrayFun=[];
			for($i=0; $i<$numFuncionarios; $i++)
			{
					$arrayFun[$_GET["nomeFun$i"]]=$_GET["salFun$i"];
			}
			function imprimirAbaixoDe($array,$valor)
			{
				foreach($array as $index => $valorArray)
				{
						if((float)$valorArray<$valor)
							echo "$index: Salário R$", number_format((float)$valorArray,"2",",",'.') ,"<br>";
				}				
			}
			switch($botao)
			{
				case 1:
					echo "Miseraveis: <br>", imprimirAbaixoDe($arrayFun, 700);
					break;
				default: 
					echo "Aperte um botão";
			}
		?>
	</p>
        </div>
    </body>
</html>
