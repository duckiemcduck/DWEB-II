<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../stylesheets/global.css">        
        <link rel="stylesheet" href="../stylesheets/10.css">       
    </head>
    <body>
        <h1> Exercício 10 - Fórmula matemática com constantes em PHP </h1> 
        <div id="container-conteudo" class="resultado">
            <p>
                <?php
                    $x=6;
                    define("Y",2);
                    define("Z",1);
                    echo "($x-5)*",Y,"-",Z,"=",($x-5)*Y-Z
                ?>
            </p>
        </div>
</html>


