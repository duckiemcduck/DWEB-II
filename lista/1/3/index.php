<!DOCTYPE html>
<html>
    <head>
        <title> Lista 1 - Fundamentos PHP </title>
		<link rel="stylesheet" href="../stylesheets/global.css">        
    </head>
    <body>
        <h1> Exercício 3 - Retornando informações do servidor com phpinfo() </h1>        
        <?php
            $info = phpinfo();
            echo "$info";
        ?>
    </body>
</html>

