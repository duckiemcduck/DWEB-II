<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../stylesheets/global.css">        
		<link rel="stylesheet" href="../stylesheets/9.css">        
    </head>
    <body>
        <h1> Exercício 14 - Formulário e Matemática com PHP</h1>     
        <div id="container-conteudo">
            <form action="./controller/calculo.php" method="post">
                <fieldset>
                    <legend> Cálculo numérico Fahrenheit -> Celsius </legend>
                    <div id="tabela">
                        <div id=labels>
                            <label class="alinhar">Temperatura Fahrenheit: </label>
                        </div>
                        <div id=inputs>
                            <input type="number" step="0.1" min="0" name="temp" value=0>
                        </div>
                        <div id=labels>
                            <label class="alinhar">°F</label>
                        </div>
                    </div>
                </fieldset>
                <button id="botao-enviar" type="submit" name="enviar"> Processar com PHP </button>
            </form>
            
        </div>
    </body>
</html>

