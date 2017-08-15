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
					<label class="cabecalho"> Funcionários </label>
					<textarea name="nomes" value="">teste</textarea>
				</div>
				<div id=inputs>
					<label class="cabecalho"> Salário </label>
					<textarea name="salario"></textarea>
				</div>
			
                </fieldset>
		<div id="botoes">
                	<button id="botao-enviar" type="submit" name="botao" value=1> Ver Miseráveis </button>
		</div>
            </form>
	<p>
		<?php
            if(isset($_GET["nomes"]))
            {
                $funcionarios = explode(",", $_GET["nomes"]);
                foreach($funcionarios as $index => $nome)
                {
                    echo $nome,"\n";
                }
            }
            if(isset($_GET["salario"]))
            {
                $salarios = explode(",", $_GET["salario"]);
                foreach($salarios as $index => $valor)
                {
                    echo $valor,"\n";
                }
            }
			$botao=0;
			if(strlen($_GET["botao"]!=0))
			{
				$botao=$_GET["botao"];
			}
		?>
	</p>
        </div>
    </body>
</html>