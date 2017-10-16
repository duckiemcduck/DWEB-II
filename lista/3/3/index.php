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
                <?php
                    function imprimirPrecos($array)
                    {
                        foreach($array as $produto => $valor)					
                        {
                            echo '<label class="alinhar">', number_format($valor["preço"],"2",",","."),"</label>";
                        }
                    }
                    function imprimirEstoques($array)
                    {
                        foreach($array as $produto => $valor)					
                        {
                            echo '<label class="alinhar">', number_format($valor["estoque"],"1",",","."),"</label>";
                        }
                    }
                    function imprimirChaves($array)
                    {
                        foreach($array as $produto => $valor)					
                        {
                            echo '<label class="alinhar">', $produto ,"</label>";
                        }
                    }
                    function faturamentoTotal($array)
                    {
                        $total = 0;
                        foreach($array as $produto => $valor)					
                        {
                            $total += $valor["estoque"] * $valor["preço"];
                        }
                        return $total;
                    }
                    function chaveDoMaisCaro($array)
                    {
                        $chave = key($array);
                        foreach($array as $produto => $valor)					
                        {
                            if($valor["preço"] > $array[$chave]["preço"])
                                $chave = $produto;
                        }
                        return $chave;
                    }
                    $produtos = 
                    [
                        "Impressora" => array("preço" => 350.00, "estoque"=>10),
                        "Mouse Laser" => array("preço" => 45.32, "estoque"=>45),
                        "Placa de Vídeo" => array("preço" => 456.78, "estoque"=>15),
                        "Webcam" => array("preço" => 62.00, "estoque"=>12)
                    ];
			    ?>
                <fieldset>
                    <legend> Loja </legend>
                    <div id="tabela">
                        <div id="labels">
                            <label class="alinhar"> Produto </label>
                            <?php imprimirChaves($produtos) ?>
                        </div>
                        <div id="labels">
                            <label class="alinhar"> Preço </label>
                            <?php imprimirPrecos($produtos) ?>
                        </div>
                        <div id="labels">
                            <label class="alinhar"> Quantidade </label>
                            <?php imprimirEstoques($produtos) ?>

                        </div>
                    </div>
                </fieldset>


                <p> Total: <?php echo "R$",number_format(faturamentoTotal($produtos),"2",',','.') ?> </p>
                <h3> Produto mais caro: <?php $chave = chaveDoMaisCaro($produtos); echo $chave, "- R$",number_format($produtos[$chave]["preço"],"2",',','.') ?> </h3>
        </div>
    </body>
</html>

