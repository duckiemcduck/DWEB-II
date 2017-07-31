<!DOCTYPE html>
<html>
    <head>
        <title> Lista 1 - Fundamentos PHP </title>
		<link rel="stylesheet" href="../stylesheets/global.css">            
    </head>
    <body>
        <h1> Exercício 7 - Echo com apóstrofos e aspas </h1>        
        <?php
            $string="Aspas: ";
            $string2="Apóstrofos: ";
            echo "$string 'dentro com apostrofos'";
            echo "<br>";
            echo $string2, '"dentro com aspas"';
        ?>
    </body>
</html>

