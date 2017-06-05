<?php

    require_once './interfaces/ICalculadora.php';

    /**
     * Clase Calculadora
     */
    class Calculadora implements ICalculadora
    {
        
        function __construct()
        {
           
        }

        public function sumar($a,$b)
        {
            return $a + $b;
        }

        public function restar($a,$b)
        {
            return $a - $b;
        }
    }
    