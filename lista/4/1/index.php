<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../stylesheets/global.css">        
		<link rel="stylesheet" href="../stylesheets/1.css">        
    </head>
    <body>
        <h1> Exercício 5 - Text Field</h1>     
        <div id="container-conteudo">
            <form action="#" method="get">
            <?php
                $numCampos = 1;
                function imprimirCampos($campos)
                {
                    for($i = 0 ; $i<$campos; $i++)
                    {
                        echo '<div id="labels">
                            <label class="cabecalho"> Pessoa ', $i+1, "</label>",
                            '<textarea name="pesquisado',$i,'" value="">',
                            (isset($_GET["pesquisado$i"]) ? $_GET["pesquisado$i"] : "Entre Valores separados por vírgula"),
                            "</textarea>",
                        "</div>";
                    }
                }
            ?>
                <fieldset>
                    <legend> Dados </legend>
                    <div id="tabela">
                    <?php imprimirCampos($numCampos)?>
                </fieldset>
		<div id="botoes">

                    ex: joao, 200, Rádio, 500
                	<button id="botao-enviar" type="submit" name="botao" value=1> Ver Miseráveis </button>
		</div>
            </form>
		<?php
        // 0 = Nome
        // 1 = Horas
        // 2 = Tipo
        // 3 = Mensalidade
            function total($array)
            {
                $total = 0 ;
                for($i = 0; $i < count($array); $i++)
                {
                        if(is_Numeric($array[$i][1]))
                            $total += $array[$i][1];
                }
                return $total;
            }
            function maior($array)
            {
                $maior = 0 ;
                for($i = 0; $i < count($array); $i++)
                {
                    if($array[$i][3] > $maior)
                        if(is_Numeric($array[$i][3]))
                            $maior = $array[$i][3];
                }
                return $maior;
            }
            function tirarAcentos($string){
                return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
            }
            function frequente($array)
            {
                $tipos = 
                [
                    "ADSL" => 0,
                    "RADIO" => 0,
                    "DISCADA" => 0
                ];
                for($i = 0; $i < count($array); $i++)
                {
                    $tipos[strtoupper(tirarAcentos($array[$i][2]))]++;
                }
                arsort($tipos);
                return key($tipos);
            }
            $pessoa = [];
            for($i=0; $i<$numCampos; $i++)
			{
					if(isset($_GET["pesquisado$i"]))
                    {
                        $pessoa[$i] = explode(",", $_GET["pesquisado$i"]);
                        $pessoa[$i];
                    }
			}
            switch($_GET["botao"])
            {
                case 1:
                    $total = total($pessoa);
                    echo "<h1>Total horas: $total </h1>";
                    echo "<h2>Maior consumo:", maior($pessoa), "</h2>";
                    echo "<h2>Tipo mais popular: ", frequente($pessoa),"</h2>";
                    break;
                default: "Entre dados e aperte o botão";
            }
		?>
    
        </div>
    </body>
</html>