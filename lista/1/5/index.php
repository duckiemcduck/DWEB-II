<!DOCTYPE html>
<html>
    <head>
        <title> Lista 1 - Fundamentos PHP </title>
		<link rel="stylesheet" href="../stylesheets/global.css">        
    </head>
    <body>
        <h1> Exercício 6 - Constantes de Usuário </h1>        
        <?php
            $const=['D','a','ê',' ','m','u','n','d','o', '!'];
            foreach($const as $index => $letra)
            {
                echo "$letra";
            }
        ?>
    </body>
</html>

