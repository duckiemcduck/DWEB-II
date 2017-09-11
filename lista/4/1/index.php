<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../stylesheets/global.css">        
		<link rel="stylesheet" href="../stylesheets/1.css">        
    </head>
    <body>
        <h1> Exercício 1 - include</h1>     
        <form action="#" method="post">
            <fieldset>
                <legend> Valores Numéricos </legend>

                </label> Forneça um inteiro maior ou igual a zero: </label>
                <input type="text" name="valor" value=<?php echo '"',isset($_POST["enviar"]) ? $_POST["valor"] : "2",'"' ?> autofocus>
                <div class="botao">
                    <button type="submit" name="enviar">
                        Validar o dado e calcular Raiz
                    </button>
                </div>
            </fieldset>
        </form>
        <?php  
            include("include.php");
            if(isset($_POST['enviar']))
            {
                $valor=$_POST["valor"];
                if(testarValor($valor))
                {
                    echo "<p>",sqrt($valor),"</p>";
                }
                else
                {
                    echo "<p>Entre um numero positivo</p>";
                }
                
            }
        ?>
</html>

