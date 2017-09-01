<?php 
                  session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Fundamentos da Linguagem PHP </title>
        <link rel="stylesheet" href="../stylesheets/global.css">        
		<link rel="stylesheet" href="../stylesheets/1.css">        
    </head>
    <body>
        <h1> Exercício 4 - Print foreach()</h1>     
        <div id="container-conteudo">
            <form action="#" method="get">
                <?php
                  
                  $linhas=6;
                  $colunas=10;
                  function inicializarArray($x,$y)
                  {
                      $array;
                      for($i=0;$i<($x);$i++)
                      {
                        for($j=0;$j<$y;$j++)
                        {
                            $array[$i][$j]=true;
                        }
                      }
                      return $array;
                  }
                  function imprimirLinha($array)
                  {
                      foreach($array as $linha => $colunas)					
                    {
                        echo '<label class="alinhar">', chr($linha+65), "</label>";
                    }
                  }
                  function validarTamanho($linhas, $colunas)
                  {
                    if(isset($_GET["selecao"]))
                    {
                        $letra = ord(strtoupper($_GET["selecao"][0]))-65;
                        $numero = intval(substr($_GET["selecao"],1))-1;
                        if ( $letra > $linhas-1 || $numero > $colunas-1 || $letra < 0 || $numero < 0 )
                        {
                            return false;
                        }
                        else 
                            return true;
                    }
                    else
                        return true;
                  }
                  function imprimirColunas($array)
                  { 
                    $totalLinhas = count($array);
                    $totalColunas = count($array[$totalLinhas-1]);
                    for($coluna=0;$coluna<$totalColunas; $coluna++)
                    {
                        echo '<div id="labels">';
                            echo '<label class="alinhar">', $coluna+1, "</label>";
                            for($linha=0;$linha<$totalLinhas; $linha++)
                            {
                                echo '<label class="alinhar">', ($array[$linha][$coluna]) ? "O" : "X", "</label>";
                                //echo '<input type="checkbox" name="',chr($linha+65),$coluna+1,'" value="0"',($array[$linha][$coluna]) ? "" : "checked",'>';
                            }
                        echo '</div>';
                    }

                  }
                  if (!isset($_GET["acao"]))
                  {
                     $_SESSION["array"] = inicializarArray($linhas,$colunas);
                     $_SESSION["iniciado"]=true; 
                  }

                  if (isset($_GET["selecao"]) && isset($_GET["acao"]) ) 
                  {
                    if($_GET["acao"]==1)
                        if(validarTamanho($linhas, $colunas))
                        $_SESSION["array"][ord(strtoupper($_GET["selecao"][0]))-65][intval(substr($_GET["selecao"],1))-1] = false;
                  }

                  if (isset($_GET["selecao"]) && isset($_GET["acao"]) ) 
                  {
                    if($_GET["acao"]==2)
                        if(validarTamanho($linhas, $colunas))
                            $_SESSION["array"][ord(strtoupper($_GET["selecao"][0]))-65][intval(substr($_GET["selecao"],1))-1] = true;
                  }
                  
			    ?>
                <fieldset>
                    <legend> Loja </legend>
                    <div id="tabela">
                        <div id="labels">
                            <label class="alinhar">&nbsp</label>
                            <?php imprimirLinha($_SESSION["array"]) ?>
                        </div>
                            <?php  imprimirColunas($_SESSION["array"]);
                            ?>
                    </div>
                    <input type="text" name="selecao" value="<?php echo isset($_GET["selecao"]) ? $_GET["selecao"] : "" ?>"></input><?php echo isset($_GET["selecao"]) ? $_GET["selecao"] : "" ?>
                </fieldset>
                <button type="submit" name="acao" value="0">Checar Disponibilidade</button>
                <button type="submit" name="acao" value="1">Alocar</button>
                <button type="submit" name="acao" value="2">Desalocar</button>

            </form>
                <p> 
                    
                    <?php 
                        switch($_GET["acao"])
                        {
                          case 0:  
                            if(isset($_GET["selecao"]))
                            {
                                if(validarTamanho($linhas, $colunas))
                                    echo $_SESSION["array"][ord(strtoupper($_GET["selecao"][0]))-65][intval(substr($_GET["selecao"],1))-1] ? "Disponível" : "Ocupado";
                                else
                                    echo "Posição inválida.";
                            }
                            break;
                            default: 
                                if(!validarTamanho($linhas, $colunas))
                                    echo "Posição inválida.";
                            break;
                        }
                    ?>
                </p>
        </div>
    </body>
</html>

