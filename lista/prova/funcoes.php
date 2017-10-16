<?php 
    function media($A,$B)
    {
        if(is_numeric($A) && is_numeric($B) && $A >= 0 && $B >= 0 && $A <= 10 && $B <= 10  )
        {
            return ($A + $B) / 2;
        }
        else
        {
            return false;
        }
    
    }
    function imprimirAlunos($array)
    {
        foreach($array as $index => $dados)
        {
            echo "<h3> Matrícula: ",$index," -  Média: ", $array[$index]['media'], " pontos</h3>";
        }
    }

    function imprimirMaior($array)
    {
        $maior = 0;
        $chaveMaior = 0;
        foreach($array as $index => $dados)
        {
            if($array[$index]["media"] > $maior)
            {
                $maior = $array[$index]["media"];
                $chaveMaior = $index;
            }
 
        }
        echo "<h1> Maior Média: </h1> <h2> Matrícula: ",$chaveMaior," -  Média: ", $array[$chaveMaior]['media'], " pontos</h3>";
    }
    function getNotasA()
    {
        if(isset($_GET["notasA"]))
        {
            return explode(",", $_GET["notasA"]);
        }
            else return false;
    }
    function getNotasB()
    {
        if(isset($_GET["notasB"]))
        {
            return explode(",", $_GET["notasB"]);
        }
        else 
            return false;
    }
?>