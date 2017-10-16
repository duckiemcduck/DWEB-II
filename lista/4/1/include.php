<?php
    function testarValor($valor)
    {
        if(is_float($valor) || is_integer($valor) || is_numeric($valor))
        {
            if($valor >= 0)
                return true;
        }
        else
            return false;
    }
?>