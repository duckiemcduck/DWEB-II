<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../stylesheets/global.css">        
		<link rel="stylesheet" href="../stylesheets/1.css">        
    </head>
    <body>
    <h1> PHP + MySQL - Protótipo de Sistema Acadêmico </h1>
    <form action="" method="post">
        <fieldset>
        <legend> Exercício 1 - Dados do Aluno </legend>
        <div id="tabela">
            
            <div id=labels>
                <label class="alinhar"> Matricula </label>
                <label class="alinhar"> Nome da Unidade Curricular: </label>
                <label class="alinhar"> Nota da Primeira Avaliação: </label>
                <label class="alinhar"> Nota da Segunda Avaliação: </label>
                <label class="alinhar"> Operação a realizar: </label>
            </div>
            <div id=inputs>
                <input type="text" name="matricula" class="maior" autofocus> 
                <input type="text" name="uc" class="maior"> 
                <input type="number" name="nota1" min="0" max="101" step="0.1" class="maior" > 
                <input type="number" name="nota2" min="0" max="101" step="0.1" class="maior" > 
                <div><input type="radio" name="operacoes" value=1> Calcular Média do Aluno </div>
                <div><input type="radio" name="operacoes" value=2> Cadastrar Dados do Aluno </div>
                <div> <input type="radio" name="operacoes" value=3> Mostrar número de alunos com média superior a 6.00 </div>
            </div>
            <div class="botao">


        </div>
        
        </fieldset>
        <button type="submit" name="enviar"> Executar Operação Selecionada </button>
    </form>
    <?php
        //Inserir as includes responsáveis pela conexão do PHP com o banco de dados.
        require "dados-conexao.inc.php";
        require "conectar.inc.php";
        require "criar-banco.inc.php";
        require "selecionar-banco.inc.php";
        require "criar-tabela.inc.php";

        //testar submit

        if(isset($_POST["enviar"]))
        {
            if(isset($_POST["operacoes"]))
            {
		switch($_POST["operacoes"])
		{
			case 1: echo "1"; break;
			case 2: require "cadastrar.inc.php"; break;
			case 3: require "mostrar-media-acima6.inc.php"; break;
		}
            }

            else
            {
                echo "<p> Você não selecionou nenhuma operação sobre o banco </p>";
            }
        }
        require "desconectar.inc.php";
    ?>
    </body>
</html>
