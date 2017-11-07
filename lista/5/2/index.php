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
                <label class="alinhar"> Título TCC </label>
                <label class="alinhar"> Número de Alunos: </label>
                <label class="alinhar"> Presença de Coordenador? </label>
                <label class="alinhar"> Terminalidade do projeto: </label>
                <label class="alinhar"> Metolodologia utilizada: </label>
                <label class="alinhar"> Data de Apresentação: </label>

            </div>
            <div id=inputs>
                <input type="text" name="titulo" class="maior" autofocus> 
                <input type="number" name="participantes" min="1" max="101" step="1" class="maior" > 
                <div><input type="radio" name="coorientador" value=1> Sim <input type="radio" name="presencaOrientador" value=0> Não</div>
		<select name="area"> 
			<option> Teórica </option>
			<option> Aplicação Web </option>
		</select>
		<div><input type="checkbox" name="metolodogia[]" value="acao" checked> Plano de Ação <input type="checkbox" name="metodologia[]" value="pesquisa" checked> Pesquisa de Campo </div>
                <input type="text" name="data" class="maior" > 



            </div>
            <div class="botao">
        </div>
        
        </fieldset>
        <button type="submit" name="botao" value=0> Cadastrar informações em uma tabela </button>
        <button type="submit" name="botao" value=1> Listar todos os projetos orientados antes de 05/01/2015 </button>
        <button type="submit" name="botao" value=2> Limpar TCCs inválidos (+2 alunos) </button>
	<button type="submit" name="botao" value=3> Atualizar pesquisas cadastradas para Aplicação Web </button>
	<button type="submit" name="botao" value=4> Contar registros </button>
    </form>
    <?php
        //Inserir as includes responsáveis pela conexão do PHP com o banco de dados.
        require "dados-conexao.inc.php";
        require "conectar.inc.php";
        require "criar-banco.inc.php";
        require "selecionar-banco.inc.php";
        require "criar-tabela.inc.php";

        //testar submit

        if(isset($_POST["botao"]))
        {
            switch($_POST["botao"])
            {
                case 0: require "cadastrar.inc.php"; break;
                case 1: require "listar.inc.php"; break;
                case 2: require "excluir.inc.php"; break;
                case 3: require "alterar.inc.php"; break;
                default:  echo "<p> Você não selecionou nenhuma operação sobre o banco </p>";
            }
        }

        else
        {
            echo "<p> Você não selecionou nenhuma operação sobre o banco </p>";
        }
        require "desconectar.inc.php";
    ?>
    </body>
</html>
