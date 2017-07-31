<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../stylesheets/global.css">        
		<link rel="stylesheet" href="../stylesheets/9.css">        
    </head>
    <body>
        <h1> Exercício 9 - Formulários e Matemática com PHP </h1>     
        <div id="container-conteudo">
            <form action="./controller/calculo.php" method="post">
                <fieldset>
                    <legend> Cálculo numérico com valores quaisquer </legend>
                    <div id="tabela">
                        <div id=labels>
                            <label class="alinhar"> Forneça o primeiro valor número:</label>
                            <label class="alinhar"> Forneça o segundo valor número:</label>
                            <label class="alinhar"> Forneça o terceiro valor número:</label>
                            <label class="alinhar"> Forneça a operação:</label>
                        </div>
                        <div id=inputs>
                            <input type="number" step="any" name="numero1">
                            <input type="number" step="any" name="numero2">
                            <input type="number" step="any" name="numero3">
                            <select name="operacao">
                                <option value="/">Divisão</option>
                                <option value="*">Multiplicação</option>
                                <option value="+">Soma</option>
                                <option value="-" selected>Subtração</option>
                            </select> 
                        </div>
                    </div>
                </fieldset>
                <button id="botao-enviar" type="submit" name="enviar"> Processar com PHP </button>
            </form>
            
        </div>
    </body>
</html>

