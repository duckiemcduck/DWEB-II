<!DOCTYPE html>
<html>
    <head>
        <title> Lista 1 - Fundamentos PHP </title>
		<link rel="stylesheet" href="../stylesheets/global.css">        
    </head>
    <body>
        <h1> Exercício 6 - Variaveis Mistas </h1>        
        <?php
            $bool = TRUE;
            $int = 7;
            $intComp = 10;
            $stringV = "bool é true, olhe:";
            $stringF = "bool é false, não deve haver valor";
            $stringAltV = "$int é menor que $intComp, olhe:";
            $stringAltF = "$int é maior que $intComp, olhe:";
            echo ($bool == TRUE) ? "$stringV $bool" : "$stringF $bool";
            echo "<br>";
            echo ($int < $intComp) ? "$stringAltV $int" : "$stringALtF $int";  
        ?>
    </body>
</html>

