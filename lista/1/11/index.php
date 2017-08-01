<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../stylesheets/global.css">        
		<link rel="stylesheet" href="../stylesheets/9.css">        
    </head>
    <body>
        <h1> Exercício 11 - Média Aritmética de Formulário PHP</h1>     
        <div id="container-conteudo">
            <form action="./controller/calculo.php" method="post">
                <fieldset>
                    <legend> Cálculo numérico com valores quaisquer </legend>
                    <div id="tabela">
                        <div id=labels>
                            <label class="alinhar"> Forneça a primeira nota</label>
                            <label class="alinhar"> Forneça a segunda nota</label>
                            <label class="alinhar"> Forneça o nome do aluno:</label>
                        </div>
                        <div id=inputs>
                            <input type="number" step="0.1" min="0" max="10" name="nota1">
                            <input type="number" step="0.1" min="0" max="10" name="nota2">
                            <input type="text" name="nome">
                        </div>
                         <div id=labels>
                            <label class="alinhar"> Peso 1:</label>
                            <label class="alinhar"> Peso 2:</label>
                        </div>
                        <div id=inputs>
                            <input type="number" name="peso1">
                            <input type="number" name="peso2">
                        </div>
                    </div>
                </fieldset>
                <button id="botao-enviar" type="submit" name="enviar"> Processar com PHP </button>
            </form>
            
        </div>
    </body>
</html>

