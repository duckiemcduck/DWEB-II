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
                <label class="alinhar"> Fabricante: </label>
                <label class="alinhar"> Modelo: </label>
                <label class="alinhar"> Ano: </label>
                <label class="alinhar"> Preço: </label>
                <label class="alinhar"> É novo?: </label>
            </div>
            <div id=inputs>
                <input type="text" name="fabricante" class="maior" autofocus <?php echo isset($_POST["fabricante"]) ? "value=".$_POST['fabricante'] : "Entre valor"?>> 
                <input type="text" name="modelo" class="maior" autofocus <?php echo isset($_POST["modelo"]) ? "value=".$_POST['modelo'] : "Entre valor"?>> 
                <input type="number" step="1" name="ano" class="maior" <?php echo isset($_POST["ano"]) ? "value=".$_POST['ano'] : "Entre valor"?>> 
                <input type="number" step="0.01" name="preco" class="maior" <?php echo isset($_POST["preco"]) ? "value=".$_POST['preco'] : "Entre valor"?>> 

                <div>
                    <input type="radio" name="estado" value=1  <?php echo !isset($_POST["estado"]) || $_POST["estado"] == 1 ? "checked" : ""?>> Usado 
                    <input type="radio" name="estado" value=0 <?php echo !isset($_POST["estado"]) || $_POST["estado"] == 0 ? "checked" : ""?>> Novo 
                </div>
                <div> &nbsp </div>
                <div><input type="radio" name="operacoes" value=1 <?php echo $_POST["operacoes"] == 1 ? "checked" : ""?>> Cadastrar </div>
                <div><input type="radio" name="operacoes" value=2 <?php echo !isset($_POST["operacoes"]) || $_POST["operacoes"] == 2 ? "checked" : ""?>> De 2000 Usados </div>
                <div><input type="radio" name="operacoes" value=3 <?php echo $_POST["operacoes"] == 3 ? "checked" : ""?>> Listar Novos</div>
                <div><input type="radio" name="operacoes" value=4 <?php echo $_POST["operacoes"] == 4 ? "checked" : ""?>> Apagar anteriores 2013 </div>
            </div>
            <div class="botao">


        </div>
        
        </fieldset>
        <button type="submit" name="enviar"> Executar Operação Selecionada </button>
    </form>
    <?php
        //Inserir as includes responsáveis pela conexão do PHP com o banco de dados.
        require "definicaoProjeto.php";
        $projeto = new Projeto();
        $projeto->conectar();
        
        //testar submit

        if(isset($_POST["enviar"]))
        {
            if(isset($_POST["operacoes"]))
            {
                switch($_POST["operacoes"])
                {
                    case 1: $projeto->cadastrar($_POST['fabricante'], $_POST['modelo'], $_POST['preco'], $_POST['ano'], $_POST['estado']);
                            break;
                    case 2: $projeto->retornarLista(2000);
                            break;
                    case 3: $projeto->retornarLista("");
                            break;
                    case 4: $projeto->retornarLista(-1);
                            break;
                    default: echo "Nao implementado";
                }
            }
            else
            {
                echo "<p> Você não selecionou nenhuma operação sobre o banco </p>";
            }
        }
        $projeto->encerrarConexao();
    ?>
    </body>
</html>

