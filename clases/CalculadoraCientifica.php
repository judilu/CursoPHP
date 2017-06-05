<?php

    require_once './interfaces/ICalculadoraCientifica.php';
    require_once './clases/Calculadora.php';
    

    /**
     * Calculadora Cientifica
     */
    class CalculadoraCientifica extends Calculadora 
        implements ICalculadoraCientifica
    {
        
        function __construct()
        {
           
        }

        public function elevar($base,$exp)
        {
            return pow($base,$exp);
        }
    }
    