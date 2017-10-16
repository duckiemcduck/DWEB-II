<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../stylesheets/global.css">        
		<link rel="stylesheet" href="../stylesheets/9.css">        
    </head>
    <body>
        <h1> Exercício 12 - Formulário e Matemática com PHP</h1>     
        <div id="container-conteudo">
            <form action="./controller/calculo.php" method="post">
                <fieldset>
                    <legend> Cálculo numérico com valores quaisquer </legend>
                    <div id="tabela">
                        <div id=labels>
                            <label class="alinhar"> Distância a percorrer:</label>
                            <label class="alinhar"> Consumo do carro</label>
                            <label class="alinhar"> Preço da Gasolina R$</label>
                        </div>
                        <div id=inputs>
                            <input type="number" step="0.1" min="1" name="distancia">
                            <input type="number" step="0.1" min="0" name="consumo">
                            <input type="number" step="0.01" min="0" name="preco">
                        </div>
                        <div id=labels>
                            <label class="alinhar"> km</label>
                            <label class="alinhar"> km/litro</label>
                        </div>
                    </div>
                </fieldset>
                <button id="botao-enviar" type="submit" name="enviar"> Processar com PHP </button>
            </form>
            
        </div>
    </body>
</html>

