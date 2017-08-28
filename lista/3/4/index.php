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
                <?php
                  
                  function inicializarArray($x,$y)
                  {
                      $array;
                      for($i=0;$i<($x);$i++)
                      {
                        for($j=0;$j<$y;$j++)
                        {
                            $array[$i][$j]=false;
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
                                //echo '<label class="alinhar">', ($array[$linha][$coluna]) ? "O" : "X", "</label>";
                                echo '<input type="checkbox" name="',chr($linha+65),$coluna+1,'" value="0"',($array[$linha][$coluna]) ? "" : "checked",'>';
                            }
                        echo '</div>';
                    }

                  }
                  $linhas=6;
                  $colunas=4;
                  $array = inicializarArray($linhas,$colunas);
                   
			    ?>
                <fieldset>
                    <legend> Loja </legend>
                    <div id="tabela">
                        <div id="labels">
                            <label class="alinhar">&nbsp</label>
                            <?php imprimirLinha($array) ?>
                        </div>
                            <?php imprimirColunas($array) ?>
                    </div>
                </fieldset>
        </div>
    </body>
</html>

