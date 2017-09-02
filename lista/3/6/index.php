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
                $numCampos = 2;
                $limite = 2000;
                $nome = "Antônia";
                function imprimirCampos($campos)
                {
                    for($i = 0 ; $i<$campos; $i++)
                    {
                        echo '<div id="labels">
                            <label class="cabecalho"> Funcionario ', $i+1, "</label>",
                            '<textarea name="funcionario',$i,'" value="">',
                            (isset($_GET["funcionario$i"]) ? $_GET["funcionario$i"] : "Entre Valores separados por vírgula"),
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
        // 0 = Matricula
        // 1 = Nome
        // 2 = Idade
        // 3 = SalarioMensal
            function media($array)
            {
                $total = 0 ;
                foreach($array as $index => $pessoa)
                {
                   if(is_Numeric($pessoa[2]))
                    if($pessoa[2]<30)
                        if(is_Numeric($pessoa[3]))
                            $total += $pessoa[3];
                }
                return $total / count($array);
            }
            function maioresQue($array, $limite)
            {
                foreach($array as $index => $pessoa)
                {
                   if(is_Numeric($pessoa[3]))
                    if($pessoa[3]>$limite)
                    echo "<h3>$pessoa[0] - $pessoa[1]</h3>";
                }
            }
             function tirarAcentos($string){
                return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$string);
            }
            $funcionarios = [];
            for($i=0; $i<$numCampos; $i++)
			{
					if(isset($_GET["funcionario$i"]))
                    {
                        $pessoa[$i] = explode(",", $_GET["funcionario$i"]);
                        $funcionarios[$pessoa[$i][0]]=$pessoa[$i];
                    }
			}
            function funcionarioExiste($array, $nome)
            {
                foreach($array as $index => $pessoa)
                {
                    if(strtoupper(tirarAcentos($pessoa[1])) == strtoupper(tirarAcentos($nome)))
                        return true;
                }
                return false;
            }
            switch($_GET["botao"])
            {
                case 1:
                    echo "<h1>Media salarios: R$", number_format(media($funcionarios), "2", ',', '.'), " </h1>";
                    echo "<h2>Funcionarios com mais de $limite: ", maioresQue($funcionarios,$limite), " </h2>";
                    echo funcionarioExiste($funcionarios, $nome) ? "$nome está na lista" : "$nome não está na lista"; 
                    break;
                default: "Entre dados e aperte o botão";
            }
		?>
    
        </div>
    </body>
</html>