<?php
    /*
        Escribir una función que reciba un arreglo de enteros como parámetro y retorne un arreglo con l
        los cuadrados de dichos números. Imprimir el arreglo que retorna la función
    */

    $arregloNumeros = [2,3,4];
    $cubo = null;

   $cubo = function() use ($arregloNumeros) 
   {
        foreach($arregloNumeros as $numero) 
        {
            echo ($numero * $numero);
        }
    };

    function cuadrados($arregloNum){
        $arregloCuadrados = array();
        foreach($arregloNum as $numero) 
        {
            $arregloCuadrados[] = ($numero * $numero);
        }
        return $arregloCuadrados;
    }

    function imprimir($arregloNum)
    {
        foreach($arregloNum as $numero) 
        {
           echo($numero);
        }
    }
    echo $cubo() . "<br>";

    $arreglo = [1,2,3];
    imprimir((cuadrados($arreglo)));
