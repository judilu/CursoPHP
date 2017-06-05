<?php
    $numero1 = $_GET["num1"];
    $numero2 = $_GET["num2"];
    $numero3 = $_GET["num3"];

    $ResultadoSum = $numero1 + $numero2 + $numero3;
    $ResultadoRes = $numero1 - $numero2 - $numero3;
    $ResultadoMul = $numero1 * $numero2 * $numero3;
    $ResultadoDiv = $numero3 / $numero2 / $numero1;

    esMultiploDos("suma",$ResultadoSum);
    esMultiploDos("resta",$ResultadoRes);
    esMultiploDos("multiplicación",$ResultadoMul);
    esMultiploDos("división",$ResultadoDiv);
    
    function esMultiploDos($operacion,$resultado)
    {
        if(($resultado % 2 ) === 0)
        {
            echo "El resultado de la " . $operacion . " es: " . $resultado . "<br>" ;
        } 
    }