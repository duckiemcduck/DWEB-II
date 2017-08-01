<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../stylesheets/global.css">        
		<link rel="stylesheet" href="../stylesheets/9.css">        
    </head>
    <body>
        <h1> Exercício 13 - Formulário e Matemática com PHP</h1>     
        <div id="container-conteudo">
            <form action="./controller/calculo.php" method="post">
                <fieldset>
                    <legend> Cálculo numérico com valores quaisquer </legend>
                    <div id="tabela">
                        <div id=labels>
                            <label class="alinhar">Total: R$</label>
                            <label class="alinhar">Desconto:</label>
                            <label class="alinhar">Imposto:</label>
                            <label class="alinhar">Comissão:</label>
                        </div>
                        <div id=inputs>
                            <input type="number" step="0.1" min="0" name="total">
                            <input type="number" step="1" min="0" name="desconto" value="10">
                            <input type="number" step="1" min="0" name="imposto" value="12">
                            <input type="number" step="1" min="0" name="comissao" value="5">
                        </div>
                        <div id=labels>
                            <label class="alinhar">&nbsp</label>
                            <label class="alinhar">%</label>
                            <label class="alinhar">%</label>
                            <label class="alinhar">%</label>
                        </div>
                    </div>
                </fieldset>
                <button id="botao-enviar" type="submit" name="enviar"> Processar com PHP </button>
            </form>
            
        </div>
    </body>
</html>

