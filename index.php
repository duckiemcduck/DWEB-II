<!DOCTYPE html>
<html>
    <head>
        <title> Lista 1 - Fundamentos PHP </title>
		<link rel="stylesheet" href="../stylesheets/9.css">        
    </head>
    <body>
        <h1> Links Navegaçao: </h1>
        <ul>
            <?php 
                    $links=[
                    "Index de Listas" => "./lista"];
                    foreach($links as $index => $link)
                    {
                        echo "<li><a href=$link>$index</a></li>";
                    }
                    

            ?>
            <?php
                $numeroListas=5;
                $tamanhoLista=[17,10,7,11,7];
                $caminhoLista="./lista";
                $caminhoPdf="./pdf";
                $i=0;
                $j=0;
                for($i=0; $i<$numeroListas; $i++)
                {
                    echo "<h2><a href=",'"',$caminhoPdf,'/',$i+1,'">',"Lista ", $i+1, "</a></h2>";
                    echo "<ul>";
                    for($j=1; $j<$tamanhoLista[$i]+1; $j++)
                    {
                        echo "<li><a href=",'"',$caminhoLista,'/',$i+1,'/',$j,'"',">", "Exercício $j</a></li>";
                    }
                    echo "</ul>";
                }
            ?>
        </ul>
        <h1> Links Informativos: </h1>
        <ul>
            <?php 
                    $links=[
                    "Plano de ensino" => "./docs/plano",
                    "Fundamentos PHP" => "http://hdam.pro.br/ti-prw2/eslaides/PHP-fundamentos.pdf",
                    "Vetores e Matrizes em PHP" => "http://hdam.pro.br/ti-prw2/eslaides/vetores-matrizes.pdf",
                    "Lista Formulários PHP" => "./pdf/1",
                    "Lista Vetores PHP" => "./pdf/2",
                    "Lista Matrizes PHP" => "./pdf/3"];
                    foreach($links as $index => $link)
                    {
                        echo "<li><a href=$link>$index</a></li>";
                    }

            ?>
        </ul>
        <h1> Links Oficiais: </h1>
        <ul>
            <?php 
                    $linksOficiais=[
                    "[Oficial] hdam-pro" => "http://hdam.pro.br/",    
                    "[Oficial]Lista Formulários PHP" => "http://hdam.pro.br/ti-prw2/exercicios/L1-fundamentos-php-formularios.pdf",
                    "[Oficial]Lista Vetores PHP" => "http://hdam.pro.br/ti-prw2/exercicios/L2-vetores.pdf",
                    "[Oficial]Lista Matrizes PHP" => "http://hdam.pro.br/ti-prw2/exercicios/L3-matrizes.pdf"];
                    foreach($linksOficiais as $index => $link)
                    {
                        echo "<li><a href=$link>$index</a></li>";
                    }

            ?>
        </ul>
    </body>
</html>


