<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../stylesheets/global.css">        
		<link rel="stylesheet" href="../stylesheets/2.css">        
    </head>
    <body>
        <h1> Exercício 4 - Ordenando tabela</h1>     
        <div id="container-conteudo">
                <fieldset>
                    <legend> Display Produtos </legend>
                    <div id="tabela">

                        <?php
                        $produtos =
                        [
                            "Windows 8 Pro –versão completa" => 650,
                            "Windows 7 Ultimate Edition" => 275.32,
                            "Linux Mageia" => 0,
                            "Microsoft Office Professional 2013" => 980.56,
                            "ESED NOD32 6.0 - licença de um ano" => 80.13
                        ];
                        //echo "<pre>", print_r($GLOBALS) , "</pre>";
                        ?>
                        <div id=labels>
                            Produto:
                            <?php
                            foreach($produtos as $index => $valor)					
                            {
                                echo '<label>',$index," </label>";
                                //option seleected
                            }
                            ?>	
                        </div>
                        <div id=labels>
                            Preço:
                            <?php
                            foreach($produtos as $index => $valor)					
                            {
                                echo '<label> R$',number_format($valor, 2, ',', '.'),"</label>";
                                //option seleected
                            }
                            ?>	
                        </div>
                        
                </fieldset>
        </div>
    </body>
</html>

