<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="./stylesheets/global.css">        
		<link rel="stylesheet" href="./stylesheets/1.css">        
    </head>
    <body>
        <h1> Matrizes em PHP - controle de rendimento docente</h1>     
        <div id="container-conteudo">
            <form action="#" method="get">
                <fieldset>
                    <legend> Alunos - rendimento na Unidade Curricular Programação para Web </legend>
                    <div id="tabela">
				<div id=labels>
					<label class="cabecalho"> Forneça a matrícula do aluno </label>
					<textarea name="matriculas" value=""><?php
                    echo (isset($_GET["matriculas"]) ? $_GET["matriculas"] : "");
                    ?></textarea>
                    <label class="cabecalho"> Forneça a primeira nota do aluno </label>
					<textarea name="notasA"><?php
                    echo (isset($_GET["notasA"]) ? $_GET["notasA"] : "");
                    ?></textarea>
                    <label class="cabecalho"> Forneça a segunda nota do aluno </label>
					<textarea name="notasB"><?php
                    echo (isset($_GET["notasB"]) ? $_GET["notasB"] : "");
                    ?></textarea>
				</div>
                </fieldset>
		
            <div id="botoes">
                	<button id="botao-enviar" type="submit" name="botao" value=1> Processar Rendimento </button>
		    </div>
            </form>
	<p>
		<?php
            include("funcoes.php");
            if(isset($_GET["matriculas"]))
            {
                $matriculas = explode(",", $_GET["matriculas"]);
                $notasA = getNotasA();
                $notasB = getNotasB();
                $erro=false;
                if($notasA && $notasB && $matriculas)
                {
                    if(count($notasA) == count($notasB) &&  count($notasB) ==  count($matriculas) )
                    {
                            for($i = 0; $i < count($notasA); $i++)
                            {
                                $media = media($notasA[$i], $notasB[$i]);
                                if($media === false)
                                {
                                    echo "As notas de $matriculas[$i] apresentam erro de digitação";
                                    $erro = true;
                                    break;
                                }
                                $array[$matriculas[$i]]["A"] = $notasA[$i];
                                $array[$matriculas[$i]]["B"] = $notasB[$i];
                                $array[$matriculas[$i]]["media"]=$media;
                            }
                            if(!$erro)
                            {
                                imprimirAlunos($array);
                                imprimirMaior($array);
                            }
                    }
                    else
                    {
                        echo "Número de Matrículas e Notas não correspondentes.";                
                    }
                    
                }
                
            }
            else
                echo "Entre dados separados por vírgula";
		?>
	</p>
        </div>
    </body>
</html>